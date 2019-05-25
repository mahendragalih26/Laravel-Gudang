@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
              Data Berhasil Di Input
            </div>
            @elseif(session('sukses2'))
            <div class="alert alert-success" role="alert">
              Data Berhasil Di Update
            </div>
            @elseif(session('sukses3'))
            <div class="alert alert-success" role="alert">
              Data Berhasil Di hapus
            </div>
            @elseif(session('status'))
            <div class="alert alert-success" role="alert">
              Selamat Datang
            </div>
            @endif
            <h1>Data Barang</h1>
            <div class="card">
                <div class="card-header">
                    <div class="float-right">
                        <a href="/jenis" class="btn btn-outline-dark">Tambah Jenis Barang</a>&nbsp;<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#TambahBarang">Tambah Barang</button>        
                    </div>
                </div>
                    <table class="table table-hover">
                      <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga per unit</th>
                            <th scope="col">Banyak Unit</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($data_barang as $barang)
                                <tr>
                                    <td scope="row" >{{ $barang->id }}</td>
                                    <td>{{ $barang->nama }}</td>
                                    <td>Rp. {{ $barang->harga }}</td>
                                    <td>{{ $barang->item }} Unit</td>
                                    <td>@foreach($data_jenis as $jenis)<?php if($barang->jenis == $jenis->id){ echo $jenis->nama_jenis; } ?>@endforeach</td>
                                    <td scope="row"><a href="/gudang/{{ $barang->id }}/edit" class="btn btn-success" >Edit</a>&nbsp;<a href="/gudang/{{ $barang->id }}/delete" class="btn btn-danger" >Delete</a></td>
                                </tr>
                            @endforeach
                      </tbody>
                        
                    </table>
                <div class="card-footer">
                    <div class="float-right">
                        {!! $data_barang->render() !!}
                    </div>
                </div>
            </div>
    </div>
</div>
    

<!-- Modal Tambah Barang -->
<div class="modal fade" id="TambahBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="/gudang/create" method="post">
            {{ csrf_field() }}
            
            <div class="modal-body">
                <label for="name" class="text-md-right">Nama Barang</label>
                    <input id="nama" type="text" class="form-control" name="nama" value="" required autofocus>
                <label for="harga" class="text-md-right">Harga Barang</label>
                    <input id="harga" type="text" class="form-control" name="harga" value="" required autofocus>
                <label for="item" class="text-md-right">Banyak Unit</label>
                    <input id="item" type="text" class="form-control" name="item" value="" required autofocus>
                <label for="jenis" class="text-md-right">Jenis</label>
                
                        <select class="form-control" id="exampleFormControlSelect1" name="jenis">
                            @foreach($data_jenis as $jenis)
                          <option value="{{ $jenis->id }}"  >{{ $jenis->nama_jenis }}</option>
                            @endforeach
                        </select>
            </div>
            
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Barang</button>
            </div>
        </form>
 
    </div>
  </div>
</div>


@endsection
