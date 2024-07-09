<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function categoryBerita()
    {
        return $this->belongsTo(BeritaCategory::class, 'category_id');
    }

    public function authorBerita()
    {
        return $this->belongsTo(BeritaAuthor::class, 'author_id');
    }
}
