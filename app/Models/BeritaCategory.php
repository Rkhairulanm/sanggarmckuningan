<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaCategory extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'berita_categories';

    public function berita()
    {
        return $this->hasMany(Berita::class, 'category_id');
    }
}
