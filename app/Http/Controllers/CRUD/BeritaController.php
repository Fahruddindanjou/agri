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
        //validate form
        // $this->validate($request, [
        //     'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
        //     'title'     => 'required|min:5',
        //     'content'   => 'required|min:10'
        // ]);

        // //upload image
        // $image = $request->file('image');
        // $image->storeAs('public', $image->hashName());

        // //create post
        // Berita::create([
        //     'image'     => $image->hashName(),
        //     'title'     => $request->title,
        //     'content'   => $request->content
        // ]);

        $berita = new Berita();
        $berita->title = $request->title;
        $berita->kategori_id = $request->kategori_id;
        $berita->url_yt = $request->url_yt;
        $berita->content = $request->content;
        $berita->type = $request->type;

        /** upload image */
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $extensions = $image->getClientOriginalExtension();
            $filename = date('dmY').'_'.sha1($image->getClientOriginalName()) . '.'. $extensions;
            $path = public_path('images/'.$filename);
            $url = url('images/'.$filename);
            $image->move($path , $filename);

            // save image
            $berita->image = $url;
        }else{
            $berita->image = 'https://via.placeholder.com/700x400.png/008855?text=No+image';
        }


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
