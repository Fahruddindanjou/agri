<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;

class PartnerController extends Controller
{
    public function index()
    {
        $data['partner'] = Partner::all();
        return view('admin.partner',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['isEdit'] = false;
        $data['edit'] = null;

        return view('admin.partner_add' , $data);
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
        // Partner::create([
        //     'image'     => $image->hashName(),
        //     'title'     => $request->title,
        //     'content'   => $request->content
        // ]);

        $partner = new Partner();
        $partner->name = $request->name;
        $partner->deskripsi = $request->deskripsi;
        $partner->url = $request->url;

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
            $partner->image = $url;
        }else{
            $partner->image = 'https://via.placeholder.com/700x400.png/008855?text=No+image';
        }

        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $fileName = time() . '_' . $file->getClientOriginalName();
        //     $filePath = $file->storeAs('/images', $fileName);

        //     $partner->image = $fileName;
        // } else {
        //     $Partner->image = 'https://via.placeholder.com/700x400.png/008855?text=No+image';
        // }



        $partner->save();

        return redirect('/admin/partner')->with('success' , 'Berhasil menambah Partner');
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
        $data['edit'] = Partner::find($id);
        $data['isEdit'] = true;
        return view('admin.partner_add',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $partner = new Partner();
        $partner->name = $request->name;
        $partner->deskripsi = $request->deskripsi;
        $partner->url = $request->url;

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
            $partner->image = $url;
        }else{
            $partner->image = 'https://via.placeholder.com/700x400.png/008855?text=No+image';
        }

        $partner->save();

        return redirect('/admin/partner')->with('success' , 'Berhasil update Partner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Partner::find($id);
        $delete->delete();

        return redirect('/admin/partner')->with('success' , 'Success delete data');
    }
}
