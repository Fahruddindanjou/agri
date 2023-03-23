@extends('admin.layouts.general')


@section('content')

<div class="col-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add Partner</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="inputName">Nama Partner</label>
                <input type="text" id="inputName" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputDescription">Deskripsi</label>
                <textarea class="form-control" id="#" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Logo</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
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
            </div>
            <!-- <div class="form-group">
                <label for="inputStatus">Kategori</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option>Success</option>
                </select>
              </div> -->
        </div>
        <!-- /.card-body -->
        <div class="container">
            <div class="row">
                <div class="col-12 mb-2">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Create new Article" class="btn btn-success float-right">
                </div>
            </div>
        </div>
    </div>
    <!-- /.card -->
</div>

@endsection
