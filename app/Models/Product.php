<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'stock_quantity', 'image'];
    protected $casts = ['price' => 'decimal:2'];

    public function sales() { return $this->hasMany(Sale::class); }

    public function getImageUrlAttribute(): string
    {
        return $this->image ? asset('storage/' . $this->image) : asset('images/shoe-placeholder.svg');
    }
}
