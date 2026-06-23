<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $query = Property::forAgent(auth()->id())
            ->orderByDesc('created_at');

        if ($search = $request->input('search')) {
            $query->where('title', 'like', "%{$search}%")
                  ->orWhere('address', 'like', "%{$search}%");
        }

        if ($type = $request->input('type')) {
            $query->where('type', $type);
        }

        if ($operation = $request->input('operation_type')) {
            $query->where('operation_type', $operation);
        }

        if ($status = $request->input('status')) {
            $query->where('status', $status);
        }

        $properties = $query->paginate(12)->withQueryString();

        return view('agent.properties.index', [
            'properties'      => $properties,
            'typeLabels'      => Property::typeLabels(),
            'operationLabels' => Property::operationLabels(),
            'statusLabels'    => Property::statusLabels(),
        ]);
    }

    public function create()
    {
        return view('agent.properties.create', [
            'typeLabels'      => Property::typeLabels(),
            'operationLabels' => Property::operationLabels(),
            'statusLabels'    => Property::statusLabels(),
        ]);
    }

    public function store(StorePropertyRequest $request)
    {
        $data = $request->validated();
        $data['agent_id'] = auth()->id();
        $data['is_featured'] = $request->boolean('is_featured');

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')
                ->store('properties', 'public');
        }

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('properties', 'public');
            }
        }
        $data['images'] = $imagePaths ?: null;

        if (!empty($data['features'])) {
            $data['features'] = array_values(array_filter($data['features']));
        }

        $property = Property::create($data);

        return redirect()
            ->route('agent.properties.show', $property)
            ->with('success', 'Propiedad publicada exitosamente.');
    }

    public function show(Property $property)
    {
        $this->authorizeProperty($property);

        return view('agent.properties.show', [
            'property'        => $property,
            'typeLabels'      => Property::typeLabels(),
            'operationLabels' => Property::operationLabels(),
            'statusLabels'    => Property::statusLabels(),
        ]);
    }

    public function edit(Property $property)
    {
        $this->authorizeProperty($property);

        return view('agent.properties.edit', [
            'property'        => $property,
            'typeLabels'      => Property::typeLabels(),
            'operationLabels' => Property::operationLabels(),
            'statusLabels'    => Property::statusLabels(),
        ]);
    }

    public function update(UpdatePropertyRequest $request, Property $property)
    {
        $data = $request->validated();
        $data['is_featured'] = $request->boolean('is_featured');

        if ($request->hasFile('cover_image')) {
            if ($property->cover_image) {
                Storage::disk('public')->delete($property->cover_image);
            }
            $data['cover_image'] = $request->file('cover_image')
                ->store('properties', 'public');
        }

        $existingImages = $property->images ?? [];

        if ($request->filled('remove_images')) {
            foreach ($request->input('remove_images') as $path) {
                Storage::disk('public')->delete($path);
                $existingImages = array_filter($existingImages, fn($img) => $img !== $path);
            }
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $existingImages[] = $image->store('properties', 'public');
            }
        }

        $data['images'] = array_values($existingImages) ?: null;

        if (!empty($data['features'])) {
            $data['features'] = array_values(array_filter($data['features']));
        }

        $property->update($data);

        return redirect()
            ->route('agent.properties.show', $property)
            ->with('success', 'Propiedad actualizada correctamente.');
    }

    public function destroy(Property $property)
    {
        $this->authorizeProperty($property);

        if ($property->cover_image) {
            Storage::disk('public')->delete($property->cover_image);
        }

        foreach ($property->images ?? [] as $path) {
            Storage::disk('public')->delete($path);
        }

        $property->delete();

        return redirect()
            ->route('agent.properties.index')
            ->with('success', 'Propiedad eliminada.');
    }

    private function authorizeProperty(Property $property): void
    {
        abort_unless($property->agent_id === auth()->id(), 403);
    }
}
