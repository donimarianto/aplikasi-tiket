@extends('theme.header')
@section('content')
<div class="container mt-3">
<div class="d-flex justify-content-between flex-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h1">Tiket/Event</h1>
</div>
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="text-center table table-striped table-bordered table-hover mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama Tiket</th>
                        <th>Tanggal Event</th>
                        <th>Lokasi</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_tiket as $lihat)
                    <tr>
                        <td>{{ $lihat->nama }}</td>
                        <td>{{ $lihat->tanggal }}</td>
                        <td>{{ $lihat->lokasi }}</td>
                        <td>{{ $lihat->deskripsi }}</td>
                        <td>Rp. {{ $lihat->harga }}</td>
                        <td>
                            <a onclick="return confirm('Anda yakin?')" href="{{ route('hapus_tiket', $lihat->id) }}" class="btn btn-sm btn-danger text-white">
                                <i class="fas fa-trash-alt"></i>Hapus</a>
                            <a href="{{ route('editEvent', $lihat->id) }}" class="btn btn-sm btn-warning "><i class="fa fa-edit" aria-hidden="true"></i>Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
