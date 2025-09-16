<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Pest\Laravel\castAsJson;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category', 'content'];

protected function casts(): array
{
    return [
       'published_at' => 'datetime',
       'is_active' => 'boolean',
    ];
}


    protected $table = 'post';

    protected function title(): Attribute
    {
        return Attribute::make( 

            set: function($value) {
                return strtolower($value); 
            },
            get: function($value) // para que se le pnga una mayuscula a la primera letra
            {
                return ucfirst($value);
            }
        );
    }
    
    
}
