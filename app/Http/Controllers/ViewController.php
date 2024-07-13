<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Subs;
use App\Models\Mitra;
use App\Models\Video;
use App\Models\Berita;
use App\Models\Artikel;
use App\Models\Contact;
use App\Models\Content;
use App\Models\Gallery;
use App\Models\Profile;
use App\Models\Category;
use App\Models\Testimoni;
use App\Models\ContentImage;
use Illuminate\Http\Request;
use App\Models\BeritaCategory;
use Illuminate\Support\Facades\Session;

class ViewController extends Controller
{
    public function index()
    {
        $title = 'Beranda';
        $heroTitle = Content::where('type', 'Hero Title Beranda')->first();
        $imageHero1 = ContentImage::where('type', 'Hero Image 1')->first();
        $imageHero2 = ContentImage::where('type', 'Hero Image 2')->first();
        $aboutImage = ContentImage::where('type', 'About Image')->first();
        $aboutSection = Content::where('type', 'About Section')->first();
        $testimoni = Testimoni::get();
        $klien = Mitra::get();
        return view('layouts.beranda', compact('title', 'heroTitle', 'aboutSection', 'testimoni', 'klien', 'imageHero1', 'imageHero2', 'aboutImage'));
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
        $title = $keyword ? 'Hasil Pencarian Artikel' : 'Artikel'; // Ubah judul berdasarkan keberadaan keyword
        $artikel = Artikel::where(function ($query) use ($keyword) {
            $query->where('title', 'LIKE', '%' . $keyword . '%')
                ->orWhereHas('category', function ($query) use ($keyword) {
                    $query->where('name', 'LIKE', '%' . $keyword . '%');
                });
        })
            ->where('published', true)
            ->orderBy('created_at', 'desc')
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
            ->orderBy('created_at', 'desc') // Menambahkan orderBy untuk mengurutkan berdasarkan created_at
            ->paginate(12);

        return view('layouts.categoryDetail', compact('title', 'artikel'));
    }
    public function artikelDetail($slug)
    {
        $title = 'Artikel';
        $artikel = Artikel::where('slug', $slug)->firstOrFail();
        $categories = Category::withCount('artikel')->get();
        $recentPost = Artikel::orderBy('created_at', 'DESC')->take(12)->get();
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
    public function berita(Request $request)
    {
        $title = 'Berita';
        $keyword = $request->get('keyword');
        $title = $keyword ? 'Hasil Pencarian Berita' : 'Berita'; // Ubah judul berdasarkan keberadaan keyword
        $berita = Berita::where(function ($query) use ($keyword) {
            $query->where('title', 'LIKE', '%' . $keyword . '%')
                ->orWhereHas('categoryBerita', function ($query) use ($keyword) {
                    $query->where('name', 'LIKE', '%' . $keyword . '%');
                });
        })
            ->where('published', true)
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        return view('layouts.berita', compact('title', 'berita'));
    }
    public function beritaDetail($slug)
    {
        $title = 'Berita';
        $berita = Berita::where('slug', $slug)->firstOrFail();
        $categories = BeritaCategory::withCount('berita')->get();
        $recentPost = Berita::orderBy('created_at', 'DESC')->take(12)->get();

        return view('layouts.berita-detail', compact('title', 'berita', 'categories', 'recentPost'));
    }

    public function category($slug)
    {
        $category = BeritaCategory::where('slug', $slug)
            ->firstOrFail();
        $type = 'Berita';
        $title = 'Berita dengan Kategori Terkait';
        $artikel = Berita::where('category_id', $category->id)
            ->where('published', true)
            ->orderBy('created_at', 'desc') // Menambahkan orderBy untuk mengurutkan berdasarkan created_at
            ->paginate(12);

        return view('layouts.categoryDetail', compact('title', 'artikel', 'type'));
    }
    public function beritaCategory($slug)
    {
        $category = Category::where('slug', $slug)
            ->firstOrFail();

        $title = 'Postingan dengan Kategori Terkait';
        $artikel = Artikel::where('category_id', $category->id)
            ->where('published', true)
            ->paginate(12);

        return view('layouts.categoryDetail', compact('title', 'artikel'));
    }
    public function kontak()
    {
        $title = 'Kontak';
        $instagram = Info::where('type', 'Instagram')->first();
        $phone = Info::where('type', 'Phone Number')->first();
        $email = Info::where('type', 'Email')->first();
        $address = Info::where('type', 'Address')->first();
        $youtube = Info::where('type', 'Youtube')->first();

        return view('layouts.kontak', compact('title', 'instagram', 'phone', 'email', 'address', 'youtube'));
    }

    public function kontakSend(Request $request)
    {
        $data = $request->all();
        $kontak = Contact::create($data);

        if ($kontak) {
            // Jika penyimpanan berhasil
            Session::flash('status', 'success');
            Session::flash('message', 'Email Berhasil Di Kirim.');
        } else {
            // Jika penyimpanan gagal
            Session::flash('status', 'error');
            Session::flash('message', 'Gagal mengirim Email.');
        }
        return redirect('/kontak#kontak');
    }
    public function subsSend(Request $request)
    {
        $data = $request->all();
        $kontak = Subs::create($data);

        if ($kontak) {
            // Jika penyimpanan berhasil
            Session::flash('status', 'success');
            Session::flash('message', 'Email Berhasil Di Kirim.');
        } else {
            // Jika penyimpanan gagal
            Session::flash('status', 'error');
            Session::flash('message', 'Gagal mengirim Email.');
        }
        return redirect()->back()->withFragment('footer');
    }
}
