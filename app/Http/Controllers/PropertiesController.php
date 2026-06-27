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
            $query->where('city', $city);
        }

        $properties = $query->paginate(12)->withQueryString();

        $cities = Property::where('is_active', true)
            ->whereNotNull('city')
            ->where('city', '!=', '')
            ->distinct()
            ->orderBy('city')
            ->pluck('city');

        return view('properties', compact('properties', 'cities'));
    }

    public function show(Property $property)
    {
        abort_unless($property->is_active, 404);

        return view('properties.show', compact('property'));
    }
}
