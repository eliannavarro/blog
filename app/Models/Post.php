<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category', 'content', 'slug'];

    protected $table = 'post';

    protected function title(): Attribute
    {
        return Attribute::make(
            set: fn($value) => strtolower($value),
            get: fn($value) => ucfirst($value)
        );
    }

    // Usar slug en las rutas
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Generar slug automáticamente al crear o actualizar
    protected static function booted()
    {
        static::saving(function ($post) {
            if (!$post->slug && $post->title) {
                $post->slug = Str::slug($post->title);
            }
        });
    }
}
