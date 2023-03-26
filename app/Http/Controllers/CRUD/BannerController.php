<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $data['banner'] = Banner::all();
        return view('admin.banner',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['isEdit'] = false;
        $data['edit'] = null;



        return view('admin.banner_add' , $data);
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
        // Banner::create([
        //     'image'     => $image->hashName(),
        //     'title'     => $request->title,
        //     'content'   => $request->content
        // ]);

        $Banner = new Banner();
        $Banner->name = $request->name;
        $Banner->image = $request->image;
        $Banner->type = $request->type;

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
            $Banner->image = $url;
        }else{
            $Banner->image = 'https://via.placeholder.com/700x400.png/008855?text=No+image';
        }

        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $fileName = time() . '_' . $file->getClientOriginalName();
        //     $filePath = $file->storeAs('/images', $fileName);

        //     $Banner->image = $fileName;
        // } else {
        //     $Banner->image = 'https://via.placeholder.com/700x400.png/008855?text=No+image';
        // }



        $Banner->save();

        return redirect('/admin/banner')->with('success' , 'Berhasil menambah Banner');
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
        $data['edit'] = Banner::find($id);
        $data['isEdit'] = true;
        return view('admin.banner_add',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Banner = Banner::find($id);
        $Banner->name = $request->name;
        $Banner->image = $request->image;
        $Banner->type = $request->type;

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $extensions = $image->getClientOriginalExtension();
            $filename = date('dmY').'_'.sha1($image->getClientOriginalName()) . '.'. $extensions;
            $path = public_path('images/');
            $url = url('images/'.$filename);
            $image->move($path , $filename);

            // save image
            $Banner->image = $url;
        }else{
            $Banner->image = 'https://via.placeholder.com/700x400.png/008855?text=No+image';
        }


        $Banner->save();

        return redirect('/admin/banner')->with('success' , 'Berhasil update Banner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Banner::find($id);
        $delete->delete();

        return redirect('/admin/banner')->with('success' , 'Success delete data');
    }
}
