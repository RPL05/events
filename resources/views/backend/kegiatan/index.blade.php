@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="mb-3">
        <a href="{{route('backend.kegiatan.create')}}" class="btn btn-outline-primary">
          tambah kegiatan
      </a>
      </div>

      <div class="card border-0 shadow">
        <div class="px-3 py-3">
          <h4 class="text-muted">Master Kegiatan</h4>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Kode Kegiatan</th>
                <th>Nama Kegiatan</th>
                <th>Tanggal</th>
                <th>informasi</th>
                <th>Status</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1232</td>
                <td>pramuka</td>
                <td>12/12/11</td>
                <td>jsiakcjam</td>
                <td>hadir</td>
                <td>
                <a href="{{route('backend.kegiatan.show-formEdit')}}" class="btn btn-outline-primary btn-sm">Edit</a>
                  <a href="http://" class="btn btn-outline-danger btn-sm">Hapus</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection