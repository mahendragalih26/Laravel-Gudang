@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
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
                        <button type="submit" class="btn btn-outline-dark" data-toggle="modal" data-target="#TambahJenis">Tambah Jenis Barang</button>     
                    </div>
                </div>
                    <table class="table table-hover">
                      <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Jenis</th>
                            <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($data_jenis as $jenis)
                                <tr>
                                    <td scope="row" >{{ $jenis->id }}</td>
                                    <td>{{ $jenis->nama_jenis }}</td>

                                    <td scope="row"><a href="/jenis/{{ $jenis->id }}/edit" class="btn btn-success" >Edit</a>&nbsp;<a href="/jenis/{{ $jenis->id }}/delete" class="btn btn-danger" >Delete</a></td>
                                </tr>
                            @endforeach
                      </tbody>
                        
                    </table>
                <div class="card-footer">
                    <div class="float-right">
                        {!! $data_jenis->render() !!}
                    </div>
                </div>
            </div>
    </div>
</div>

    
<!-- Modal Jenis Barang-->
<div class="modal fade" id="TambahJenis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="/gudang/cjenis" method="post">
            {{ csrf_field() }}
            
            <div class="modal-body">
                <label for="name" class="text-md-right">Jenis Barang</label>
                    <input id="jenis" type="text" class="form-control" name="nama_jenis" value="" required autofocus>
            </div>
            
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Jenis Baru</button>
            </div>
        </form>
 
    </div>
  </div>
</div>



@endsection
