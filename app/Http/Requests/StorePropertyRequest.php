<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePropertyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check() && auth()->user()->role === 'agente';
    }

    public function rules(): array
    {
        return [
            'title'                  => ['required', 'string', 'max:255'],
            'description'            => ['nullable', 'string'],
            'type'                   => ['required', 'in:casa,terreno,departamento'],
            'operation_type'         => ['required', 'in:venta,preventa,renta_vacacional,renta_anual'],
            'status'                 => ['required', 'in:disponible,vendido,rentado,reservado'],
            'price'                  => ['required', 'numeric', 'min:0'],
            'currency'               => ['required', 'in:MXN,USD'],
            'bedrooms'               => ['nullable', 'integer', 'min:0', 'max:50'],
            'bathrooms'              => ['nullable', 'numeric', 'min:0', 'max:50'],
            'parking_spaces'         => ['nullable', 'integer', 'min:0', 'max:50'],
            'area'                   => ['nullable', 'numeric', 'min:0'],
            'land_area'              => ['nullable', 'numeric', 'min:0'],
            'address'                => ['nullable', 'string', 'max:500'],
            'city'                   => ['nullable', 'string', 'max:100'],
            'state'                  => ['nullable', 'string', 'max:100'],
            'latitude'               => ['nullable', 'numeric', 'between:-90,90'],
            'longitude'              => ['nullable', 'numeric', 'between:-180,180'],
            'maps_url'               => ['nullable', 'url', 'max:5000'],
            'cover_image'            => ['nullable', 'image', 'max:5120'],
            'images.*'               => ['nullable', 'image', 'max:5120'],
            'features'               => ['nullable', 'array'],
            'features.*'             => ['string', 'max:100'],
            'delivery_date'          => ['nullable', 'date', 'after:today'],
            'construction_progress'  => ['nullable', 'integer', 'min:0', 'max:100'],
            'min_nights'             => ['nullable', 'integer', 'min:1'],
            'max_nights'             => ['nullable', 'integer', 'min:1', 'gte:min_nights'],
            'year_built'             => ['nullable', 'integer', 'min:1900', 'max:' . (date('Y') + 5)],
            'is_featured'            => ['boolean'],
            'notes'                  => ['nullable', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'         => 'El título es requerido.',
            'type.required'          => 'El tipo de propiedad es requerido.',
            'operation_type.required' => 'El tipo de operación es requerido.',
            'price.required'         => 'El precio es requerido.',
            'price.numeric'          => 'El precio debe ser un número.',
            'cover_image.image'      => 'La imagen principal debe ser un archivo de imagen.',
            'cover_image.max'        => 'La imagen principal no debe superar 5 MB.',
            'images.*.image'         => 'Cada archivo debe ser una imagen.',
            'images.*.max'           => 'Cada imagen no debe superar 5 MB.',
        ];
    }
}
