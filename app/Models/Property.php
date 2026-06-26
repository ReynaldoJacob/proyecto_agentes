<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Property extends Model
{
    protected $fillable = [
        'agent_id', 'title', 'slug', 'description',
        'type', 'operation_type', 'status',
        'price', 'currency',
        'bedrooms', 'bathrooms', 'parking_spaces', 'area', 'land_area',
        'address', 'city', 'state', 'latitude', 'longitude', 'maps_url',
        'cover_image', 'images', 'features',
        'delivery_date', 'construction_progress',
        'min_nights', 'max_nights',
        'year_built', 'is_featured', 'is_active', 'notes',
    ];

    protected $casts = [
        'images'    => 'array',
        'features'  => 'array',
        'is_featured' => 'boolean',
        'is_active'   => 'boolean',
        'delivery_date' => 'date',
        'price' => 'decimal:2',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (self $property) {
            if (empty($property->slug)) {
                $property->slug = Str::slug($property->title) . '-' . Str::random(5);
            }
        });
    }

    public function agent()
    {
        return $this->belongsTo(User::class, 'agent_id');
    }

    public static function typeLabels(): array
    {
        return [
            'casa'        => 'Casa',
            'terreno'     => 'Terreno',
            'departamento' => 'Departamento',
        ];
    }

    public static function operationLabels(): array
    {
        return [
            'venta'            => 'Venta',
            'preventa'         => 'Preventa',
            'renta_vacacional' => 'Renta Vacacional',
            'renta_anual'      => 'Renta Anual',
        ];
    }

    public static function statusLabels(): array
    {
        return [
            'disponible' => 'Disponible',
            'vendido'    => 'Vendido',
            'rentado'    => 'Rentado',
            'reservado'  => 'Reservado',
        ];
    }

    public function getTypeLabel(): string
    {
        return self::typeLabels()[$this->type] ?? $this->type;
    }

    public function getOperationLabel(): string
    {
        return self::operationLabels()[$this->operation_type] ?? $this->operation_type;
    }

    public function getStatusLabel(): string
    {
        return self::statusLabels()[$this->status] ?? $this->status;
    }

    public function isRental(): bool
    {
        return in_array($this->operation_type, ['renta_vacacional', 'renta_anual']);
    }

    public function isPresale(): bool
    {
        return $this->operation_type === 'preventa';
    }

    public function scopeForAgent($query, int $agentId)
    {
        return $query->where('agent_id', $agentId);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
