<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Berita;
use App\Models\Produk;
use App\Models\Menu;
use App\Models\Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['banners'] = Banner::all();
        $data['menus'] = Menu::orderBy('urutan', 'desc')->get();
        $data['mainBerita'] = Berita::where('type' , 'main')->get();
        $data['youtubeBerita'] = Berita::where('type' , 'youtube')->get();
        $data['pertanianBerita'] = Berita::where('type' , 'pertanian')->get();
        $data['informasiBerita'] = Berita::where('type' , 'informasi')->get();
        return view('index',$data);
    }

    public function tentang_kami()
    {
        return view('tentang_kami');
    }

    public function informasi()
    {
        $data['informasiBerita'] = Berita::where('type' , 'informasi')->get();
        return view('informasi', $data);
    }

    public function partner()
    {
        $data['part'] = Partner::all();
        return view('partner', $data);
    }

    public function detail_partner(Request $request)
    {
        $data['detail'] = Partner::findOrFail($request->id);
        $data['detail'] = Partner::find($request->id);
        return view('detail_partner', $data);
    }

    public function contact()
    {
        return view('contact');
    }

    public function detail_berita(Request $request)
    {
        $data['detail'] = Berita::findOrFail($request->id);
        $data['detail'] = Berita::find($request->id);
        return view('detail_berita',$data);
    }

    public function detail_produk()
    {
        return view('detail_produk');
    }

    public function produk()
    {
        $data['produk1'] = Produk::all();
        return view('produk', $data);
    }



    public function visi_misi()
    {
        return view('visi_misi');
    }

    public function struktur_organisasi()
    {
        return view('struktur_organisasi');
    }

    public function sejarah()
    {
        return view('sejarah');
    }
}
