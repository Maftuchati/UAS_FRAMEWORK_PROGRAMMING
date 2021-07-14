<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<h1> Data Barang </h1>
<table align="center" width="80%" border="1">
  <tr>
    <th>No</th>
    <th>Katagori Barang</th>
    <th>Nama Barang</th>
    <th>Jumlah Stok</th>
  </tr>
  @php
  @endphp

  @foreach ($stok_barang as $key => $barang)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $barang->katagori_barang }}</td>
        <td>{{ $barang->nama_barang }}</td>
        <td>{{ $barang->jml_stok }}</td>
    </tr>
  @endforeach
</table>

</body>
</html>
