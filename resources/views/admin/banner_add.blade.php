@extends('admin.layouts.general')

@section('content')

<form method="POST" @if($isEdit) action="/admin/banner/edit/{{$edit->id}}" @else action="/admin/banner/add" @endif enctype="multipart/form-data" >

    @csrf
    <div class="col-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">@if($isEdit)Edit @else Add @endif Banner</h3>
          </div>
          <div class="card-body">
              <div class="form-group">
                  <label for="exampleInputFile">Foto Artikel</label>
                  <div class="input-group">
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Resolusi Min.2000px X 3000px</label>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                <label for="inputName">Nama Banner</label>
                <input type="text" name="name" class="form-control" @if($isEdit) value="{{$edit->name}}" @endif>
              </div>
              <div class="form-group">
                <label for="inputStatus">Type Banner</label>
                <select id="inputStatus" class="form-control custom-select" name="type">
                  <option selected disabled>Select one</option>
                  <option>ya</option>
                  <option>tidak</option>
                </select>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-12 mb-2">
                  <a href="#" class="btn btn-secondary">Cancel</a>
                  <input type="submit" value="Save" class="btn btn-success float-right">
                  </div>
            </div>
          </div>
        </div>
    </div>

</form>

@endsection
