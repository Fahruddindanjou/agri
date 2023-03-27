@extends('admin.layouts.general')


@section('content')
<form method="POST" @if($isEdit) action="/admin/product/edit/{{$edit->id}}" @else action="/admin/product/add" @endif enctype="multipart/form-data" >

    @csrf
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">@if($isEdit)Edit @else Add @endif Product</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="inputName">Nama Produk</label>
                    <input type="text" name="name" class="form-control" @if($isEdit) value="{{$edit->name}}" @endif>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Foto Produk</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputName">Harga</label>
                    <input type="text" name="harga" class="form-control" @if($isEdit) value="{{$edit->harga}}" @endif>
                </div>
                <div class="form-group">
                    <label for="inputName">Terjual</label>
                    <input type="text" name="terjual" class="form-control" @if($isEdit) value="{{$edit->terjual}}" @endif>
                </div>
                <div class="form-group">
                    <label for="inputName">Deskripsi</label>
                    <textarea class="form-control" id="#" rows="3" name="deskripsi">
                        @if($isEdit) {{$edit->deskripsi}} @endif
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="inputName">URL Website</label>
                    <input type="text"  name="url" class="form-control" @if($isEdit) value="{{$edit->url}}" @endif>
                </div>
                <div class="form-group">
                    <label for="inputName">Rating</label>
                    <input type="text"  name="rating" class="form-control" @if($isEdit) value="{{$edit->rating}}" @endif>
                </div>
                <div class="form-group">
                    <label for="inputName">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" @if($isEdit) value="{{$edit->lokasi}}" @endif>
                </div>
                <div class="form-group">
                    <label for="inputName">User</label>
                    <input type="text" name="user_id" class="form-control" @if($isEdit) value="{{$edit->user_id}}" @endif>
                </div>
                <div class="form-group">
                    <label for="inputStatus">Type Artikel</label>
                    <select id="inputStatus" class="form-control custom-select" name="type">
                      <option selected disabled>Select one</option>
                      <option>best</option>
                      <option>normal</option>
                    </select>
                  </div>
                <div class="form-group">
                    <label for="inputStatus">Kategori</label>
                    <select id="inputStatus" name="kategori_id" class="form-control custom-select">
                      <option selected disabled>Select one</option>
                        @foreach(\App\Models\Kategori::all() as $kat)

                            @if($isEdit)
                                @if($kat->id == $edit->kategori_id)
                                <option value="{{$kat->id}}" selected>{{$kat->name}}</option>
                                @endif
                                @endif
                                <option value="{{$kat->id}}">{{$kat->name}}</option>
                        @endforeach
                    </select>
                  </div>
            </div>
            <!-- /.card-body -->
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-2">
                        <a href="#" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Save" class="btn btn-success float-right">
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
</form>


@endsection
