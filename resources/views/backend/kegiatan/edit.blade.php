@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">
      <div class="card border-0 shadow">
        <div class="card-body">
          <form action="">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Kode Kegiatan</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" readonly>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nama Kegiatan</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" readonly>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Tanggal</label>
                    <input type="date" name="" id="" class="form-control" placeholder="" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Status</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" readonly>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Informasi</label>
                    <textarea name="" id="" class="form-control"></textarea>
                </div>
              </div> 
            </div>
            <div class="pt-2 mb-2">
              <button type="submit" class="btn btn-outline-info">
                  Save
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection