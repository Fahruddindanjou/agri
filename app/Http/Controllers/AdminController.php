<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

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
        return view('admin.product');
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
}
