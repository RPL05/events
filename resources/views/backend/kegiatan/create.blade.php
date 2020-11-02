@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-8">
      <div class="card border-0 shadow">
        <div class="card-body">
        <form action="{{route('kegiatan.save')}}" enctype="multipart/form-data" method="POST">
          @csrf
          @if(session('success'))
            <div class="alert alert-success">
              {{ session('success')}}
            </div>
            @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="code_activity">Kode Kegiatan</label>
                        <input type="text" name="code_activity" id="code_activity" value="1" class="form-control" required>
                        <span class="text-danger" id="code_activity">{{ $errors->first('code_activity') }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nama Kegiatan</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                        <span class="text-danger" id="name">{{ $errors->first('name') }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date">Tanggal</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                        <span class="text-danger" id="date">{{ $errors->first('date') }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status" id="status" class="form-control" required>
                        <span class="text-danger" id="status">{{ $errors->first('status') }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control" required>
                        <span class="text-danger" id="price">{{ $errors->first('price') }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="images">Image</label>
                        <input type="file" name="images" id="images" class="form-control" required>
                        <span class="text-danger" id="images">{{ $errors->first('images') }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="capacity">Capacity</label>
                        <input type="text" name="capacity" id="capacity" class="form-control" required>
                        <span class="text-danger" id="capacity">{{ $errors->first('capacity') }}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="information">Informasi</label>
                        <textarea name="information" class="form-control" id="information" required></textarea>
                        <span class="text-danger" id="information">{{ $errors->first('information') }}</span>
                    </div>
                </div>
            </div>
            <div class="pt-2 mb-2">
              <button type="submit" class="btn btn-outline-info" >
                  Save
              </button>
              <a href="{{route('backend.kegiatan.index')}}" class="btn btn-outline-secondary">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
