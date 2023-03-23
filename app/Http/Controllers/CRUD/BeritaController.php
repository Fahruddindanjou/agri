<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['artikel'] = Berita::all();
        return view('admin.article',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['isEdit'] = false;
        $data['edit'] = null;
        return view('admin.article_add' , $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $berita = new Berita();
        $berita->title = $request->title;

        $berita->save();

        return redirect('/admin/article')->with('success' , 'Berhasil menambah berita');
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
        $data['edit'] = Berita::find($id);
        $data['isEdit'] = true;
        return view('admin.article_add',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $berita = Berita::find($id);
        $berita->title = $request->title;

        $berita->save();

        return redirect('/admin/article')->with('success' , 'Berhasil update berita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Berita::find($id);
        $delete->delete();

        return redirect('/admin/article')->with('success' , 'Success delete data');
    }
}
