<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        $title = 'Beranda';
        return view('layouts.beranda', compact('title'));
    }
    public function profile()
    {
        $title = 'Profile';
        return view('layouts.profile', compact('title'));
    }
    public function profileDetail()
    {
        $title = 'Profile';
        return view('layouts.profile-detail', compact('title'));
    }
    public function artikel()
    {
        $title = 'Artikel';
        return view('layouts.artikel', compact('title'));
    }
    public function artikelDetail()
    {
        $title = 'Artikel';
        return view('layouts.artikel-detail', compact('title'));
    }
    public function galeri()
    {
        $title = 'Galeri';
        return view('layouts.galeri', compact('title'));
    }
    public function video()
    {
        $title = 'Galeri';
        return view('layouts.video', compact('title'));
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
