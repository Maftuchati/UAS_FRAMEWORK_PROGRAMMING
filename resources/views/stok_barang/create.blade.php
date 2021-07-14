@extends('stok_barang.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Data</h2>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('stok_barang.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row justify-content-center">
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Katagori Barang</strong>
                <input type="text" name="katagori_barang" class="form-control" placeholder="Katagori Barang">
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Nama Barang</strong>
                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Jumlah Stok</strong>
                <input type="number" name="jml_stok" class="form-control" placeholder="Jumlah Stok">
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a class="btn btn-dark" href="{{ route('stok_barang.index') }}"> Kembali</a>
        </div>
    </div>

</form>
@endsection