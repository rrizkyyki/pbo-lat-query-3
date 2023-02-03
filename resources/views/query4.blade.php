@extends('components.base', ["title" => "query1"])
@section('content')
    <div class="container" style="margin-top: 100px;">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jumlah Transaksi Per-Barang</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($konsumen as $key => $item)
                    <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td>{{$item->nama_barang}}</td>
                        <td>{{$item->jumlah_transaksi_per_barang}}</td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
