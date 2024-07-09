<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaAuthor extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'berita_authors';
    public function postsBerita()
    {
        return $this->hasMany(Artikel::class);
    }
}
