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
                <h1>Edit Barang</h1>
            </div>
            <div class="modal-body">
                <form action="/gudang/{{$barang->id}}/update" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                    <label for="inputAddress">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$barang->nama}}" placeholder="Barang">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">Jenis</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="jenis">
                            @foreach($data_jenis as $jenis)
                                <option value="{{ $jenis->id }}" <?php if($barang->jenis == $jenis->id){ echo 'selected="selected"'; } ?>>{{ $jenis->nama_jenis}}</option>
                            @endforeach
                        </select>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Harga Barang</label>
                      <input type="text" class="form-control" id="harga" name="harga" value="{{$barang->harga}}" placeholder="harga">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Banyak Unit</label>
                      <input type="text" class="form-control" id="item" name="item" value="{{$barang->item}}" placeholder="Jumlah Item">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit edit</button>
                </form>
            </div>
            
    </div>
</div>
</div>

@endsection
