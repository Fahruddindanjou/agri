<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Banner;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function article()
    {
        $data['artikel'] = Berita::all();
        return view('admin.article', $data);
    }

    public function article_add()
    {
        return view('admin.article_add');
    }

    public function partner()
    {
        return view('admin.partner');
    }

    public function partner_add()
    {
        return view('admin.partner_add');
    }

    public function product()
    {
        $data['produk'] = Produk::all();
        // $data['best'] = Produk::where('bestseller' , 'best')->get();
        // $data['nobest'] = Produk::where('bestseller' , 'normal')->get();
        return view('admin.product', $data);
    }

    public function product_add()
    {
        return view('admin.product_add');
    }

    public function struktur_organisasi()
    {
        return view('admin.struktur_organisasi');
    }

    public function tambah_anggota()
    {
        return view('admin.tambah_anggota');
    }

    public function banner()
    {
        $data['banner'] = Banner::all();
        return view('admin.banner', $data);
    }

    public function banner_add()
    {
        return view('admin.banner_add');
    }
}
