@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
              Data Berhasil Di Input
            </div>
            @endif
            <div class="">
                <h1>Edit Jenis</h1>
            </div>
            <div class="modal-body">
                <form action="/jenis/{{$barang->id}}/update" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                    <label for="inputAddress">Nama Jenis</label>
                    <input type="text" class="form-control" id="nama_jenis" name="nama_jenis" value="{{$barang->nama_jenis}}" placeholder="Barang">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit edit</button>
                </form>
            </div>
            
    </div>
</div>
</div>

@endsection
