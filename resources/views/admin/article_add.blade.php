@extends('admin.layouts.general')

@section('content')
<form method="POST" @if($isEdit) action="/admin/article/edit/{{$edit->id}}" @else action="/admin/article/add" @endif >

    @csrf
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">@if($isEdit)Edit @else Add @endif Article</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Judul Artikel</label>
                <input type="text" name="title" class="form-control" @if($isEdit) value="{{$edit->title}}" @endif>
              </div>
              <div class="form-group">
                <label for="inputDescription">Project Description</label>
                <textarea id="summernote">
                    @if($isEdit) {{$edit->content}} @endif
                </textarea>
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
                        <option value="{{$kat->id}}">{{$kat->name}}</option>
                        @endif
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
