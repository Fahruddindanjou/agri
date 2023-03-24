@extends('admin.layouts.general')

@section('content')
<form method="POST" @if($isEdit) action="/admin/article/edit/{{$edit->id}}" @else action="/admin/article/add" @endif enctype="multipart/form-data" >

    @csrf
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">@if($isEdit)Edit @else Add @endif Article</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputFile">Foto Artikel</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>
              <div class="form-group">
                <label for="inputName">Judul Artikel</label>
                <input type="text" name="title" class="form-control" @if($isEdit) value="{{$edit->title}}" @endif>
              </div>
              <div class="form-group">
                <label for="inputName">Youtube (URL)</label>
                <input type="text" name="url_yt" class="form-control" @if($isEdit) value="{{$edit->url_yt}}" @endif>
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="summernote" name="content">
                    @if($isEdit) {{$edit->content}} @endif
                </textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Type Artikel</label>
                <select id="inputStatus" class="form-control custom-select" name="type">
                  <option selected disabled>Select one</option>
                  <option>informasi</option>
                  <option>main</option>
                  <option>pertanian</option>
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
