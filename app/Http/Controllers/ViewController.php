<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Artikel;
use App\Models\Content;
use App\Models\Gallery;
use App\Models\Profile;
use App\Models\Category;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        $title = 'Beranda';
        $heroTitle = Content::where('type', 'Hero Title Beranda')->first();
        $aboutSection = Content::where('type', 'About Section')->first();
        return view('layouts.beranda', compact('title', 'heroTitle', 'aboutSection'));
    }
    public function profile()
    {
        $title = 'Profile';
        $profile = Profile::get();
        return view('layouts.profile', compact('title', 'profile'));
    }
    public function profileDetail($id)
    {
        $title = 'Profile';
        $profile = Profile::where('id', $id)->firstOrFail();
        return view('layouts.profile-detail', compact('title', 'profile'));
    }
    public function artikel(Request $request)
    {
        $keyword = $request->get('keyword');
        $title = $keyword ? 'Hasil Pencarian' : 'Artikel'; // Ubah judul berdasarkan keberadaan keyword
        $artikel = Artikel::where('title', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('category', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->where('published', true)
            ->paginate(12);
        return view('layouts.artikel', compact('title', 'artikel'));
    }
    public function categories($slug)
    {
        $category = Category::where('slug', $slug)
            ->firstOrFail();

        $title = 'Postingan dengan Kategori Terkait';
        $artikel = Artikel::where('category_id', $category->id)
            ->where('published', true)
            ->paginate(12);

        return view('layouts.categoryDetail', compact('title', 'artikel'));
    }


    public function artikelDetail($slug)
    {
        $title = 'Artikel';
        $artikel = Artikel::where('slug', $slug)->firstOrFail();
        $categories = Category::withCount('artikel')->get();
        $recentPost = Artikel::orderBy('created_at', 'DESC')->take(6)->get();
        return view('layouts.artikel-detail', compact('title', 'artikel', 'categories', 'recentPost'));
    }
    public function galeri()
    {
        $title = 'Galeri';
        $foto = Gallery::get();
        return view('layouts.galeri', compact('title', 'foto'));
    }
    public function video()
    {
        $title = 'Galeri';
        $video = Video::get();
        return view('layouts.video', compact('title', 'video'));
    }
    public function berita()
    {
        $title = 'Berita';
        return view('layouts.berita', compact('title'));
    }
    public function beritaDetail()
    {
        $title = 'Berita';
        return view('layouts.berita-detail', compact('title'));
    }
    public function kontak()
    {
        $title = 'Kontak';
        return view('layouts.kontak', compact('title'));
    }
}
