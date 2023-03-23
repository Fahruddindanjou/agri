<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['produk'] = Produk::all();
        return view('admin.product',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['isEdit'] = false;
        $data['edit'] = null;
        return view('admin.product_add' , $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $berita = new Produk();
        $berita->title = $request->title;

        $berita->save();

        return redirect('/admin/product')->with('success' , 'Berhasil menambah berita');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['edit'] = Produk::find($id);
        $data['isEdit'] = true;
        return view('admin.product_add',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $berita = Produk::find($id);
        $berita->name = $request->name;

        $berita->save();

        return redirect('/admin/product')->with('success' , 'Berhasil update produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Produk::find($id);
        $delete->delete();

        return redirect('/admin/product')->with('success' , 'Success delete data');
    }
}
