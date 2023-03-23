@extends('admin.layouts.general')

@section('content')

<div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product</h3>

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
                      <th>Nama Partner</th>
                      <th>Deskripsi</th>
                      <th>Url</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                        foreach ($partners as $partner){

                    ?>
                    <tr>
                      <td><?= $partner['id']?></td>
                      <td><?= $partner['nama_partner']?></td>
                      <td><?= $partner['deskripsi']?></td>
                      <td><?= $partner['url'] ?></td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="<?= base_url('admin/partner/' . $partner['id']) ?>" name="delete_partner">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                    </tr>
                    <?php
                        }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

@endsection
