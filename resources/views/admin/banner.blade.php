@extends('admin.layouts.general')

@section('content')

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Banner</h3>

        <a class="btn btn-success btn-sm ml-2" href="/admin/banner/add">
            <i class="fas fa-plus">
            </i>
            Tambah Banner
        </a>
        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 500px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Gambar Banner</th>
              <th>Nama Banner</th>
              <th>Publish</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($banner as $ban)
            <tr>
              <td>{{$ban->id}}</td>
              <td><img src="{{$ban->image}}" alt="" class="img-fluid w-25 h-16"></td>
              <td>{{$ban->name}}</td>
              <td>{{$ban->created_at}}</td>
              <td class="project-actions text-right">
                  <!-- <a class="btn btn-primary btn-sm" href="#">
                      <i class="fas fa-folder">
                      </i>
                      View
                  </a> -->
                  <a class="btn btn-info btn-sm" href="/admin/banner/edit/{{$ban->id}}">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                  </a>
                  <a class="btn btn-danger btn-sm" href="/admin/banner/delete/{{$ban->id}}">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                  </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

@endsection
