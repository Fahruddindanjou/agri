@extends('admin.layouts.general')


@section('content')

<form method="POST" @if($isEdit) action="/admin/partner/edit/{{$edit->id}}" @else action="/admin/partner/add" @endif enctype="multipart/form-data" >

    @csrf
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">@if($isEdit)Edit @else Add @endif Partner</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputFile">Logo Partner</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Resolusi Min.2000px X 3000px</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputName">Nama Partner</label>
                    <input type="text" name="name" class="form-control" @if($isEdit) value="{{$edit->name}}" @endif>
                </div>
                <div class="form-group">
                    <label for="inputDescription">Deskripsi</label>
                    <textarea class="form-control" id="#" rows="3" name="deskripsi">
                        @if($isEdit) {{$edit->deskripsi}} @endif
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="inputName">Website Partner (URL)</label>
                    <input type="text" name="url" class="form-control" @if($isEdit) value="{{$edit->url}}" @endif>
                </div>
                {{-- <div class="form-group">
                    <label for="exampleInputFile">foto Detail Partner</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div> --}}
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
        <!-- /.card -->
    </div>
</form>

@endsection
