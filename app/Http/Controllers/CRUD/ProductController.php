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
        $data['artikel'] = Produk::all();
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
        // Produk::create([
        //     'image'     => $image->hashName(),
        //     'title'     => $request->title,
        //     'content'   => $request->content
        // ]);

        $Produk = new Produk();
        $Produk->title = $request->title;
        $Produk->kategori_id = $request->kategori_id;
        $Produk->url_yt = autoEmbed($request->url_yt);
        $Produk->content = $request->content;
        $Produk->type = $request->type;

        /** upload image */
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $extensions = $image->getClientOriginalExtension();
            $filename = date('dmY').'_'.sha1($image->getClientOriginalName()) . '.'. $extensions;
            $path = public_path('images/');
            $url = url('images/'.$filename);
            $image->move($path , $filename);

            // save image
            $Produk->image = $url;
        }else{
            $Produk->image = 'https://via.placeholder.com/700x400.png/008855?text=No+image';
        }

        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $fileName = time() . '_' . $file->getClientOriginalName();
        //     $filePath = $file->storeAs('/images', $fileName);

        //     $Produk->image = $fileName;
        // } else {
        //     $Produk->image = 'https://via.placeholder.com/700x400.png/008855?text=No+image';
        // }



        $Produk->save();

        return redirect('/admin/product')->with('success' , 'Berhasil menambah Produk');
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
        $Produk = Produk::find($id);
        $Produk->title = $request->title;
        $Produk->kategori_id = $request->kategori_id;
        $Produk->url_yt = autoEmbed($request->url_yt);
        $Produk->content = $request->content;
        $Produk->type = $request->type;

        /** upload image */
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $extensions = $image->getClientOriginalExtension();
            $filename = date('dmY').'_'.sha1($image->getClientOriginalName()) . '.'. $extensions;
            $path = public_path('images/');
            $url = url('images/'.$filename);
            $image->move($path , $filename);

            // save image
            $Produk->image = $url;
        }else{
            $Produk->image = 'https://via.placeholder.com/700x400.png/008855?text=No+image';
        }

        $Produk->save();

        return redirect('/admin/product')->with('success' , 'Berhasil update Produk');
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
