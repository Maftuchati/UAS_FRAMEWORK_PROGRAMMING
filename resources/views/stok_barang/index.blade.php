@extends('stok_barang.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Stok barang</h2>
                <h5>Selamat datang di halaman dashboard, <strong>{{ Auth::user()->name }}</strong></h5>
                <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('stok_barang.create') }}"> Tambah</a>
                <a href="/exportpdf" class="btn btn-info">Export PDF</a>
            </div>
            <br>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Katagori barang</th>
            <th>Nama Barang</th>
            <th>Jumlah Stok</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $barang)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $barang->image }}" width="100px"></td>
            <td>{{ $barang->katagori_barang }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->jml_stok }}</td>
            <td>
                <form action="{{ route('stok_barang.destroy',$barang->id) }}" method="POST">      
                    <a class="btn btn-primary" href="{{ route('stok_barang.edit',$barang->id) }}">Update</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection