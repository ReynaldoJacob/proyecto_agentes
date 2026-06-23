<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function index(Request $request)
    {
        $query = Property::with('agent')
            ->where('is_active', true)
            ->orderByDesc('is_featured')
            ->orderByDesc('created_at');

        if ($type = $request->input('type')) {
            $query->where('type', $type);
        }

        if ($operation = $request->input('operation_type')) {
            $query->where('operation_type', $operation);
        }

        if ($city = $request->input('city')) {
            $query->where('city', 'like', "%{$city}%");
        }

        $properties = $query->paginate(12)->withQueryString();

        return view('properties', compact('properties'));
    }

    public function show(Property $property)
    {
        abort_unless($property->is_active, 404);

        return view('properties.show', compact('property'));
    }
}
