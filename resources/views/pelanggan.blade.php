@extends('theme.header')

@section('content')
<div class="container mt-3">
<div class="d-flex justify-content-between flex-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h1">Data Pelanggan</h1>
</div>
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="text-center table table-striped table-bordered table-hover mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Telepon</th>
                        <th>Tgl Daftar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($anggota as $tampilkan)
                    <tr>
                        <td>{{ $tampilkan->nama }}</td>
                        <td>{{ $tampilkan->alamat }}</td>
                        <td>{{ $tampilkan->jk }}</td>
                        <td>{{ $tampilkan->no_tlp }}</td>
                        <td>{{ $tampilkan->tgl_daftar }}</td>
                        <td>
                            <a onclick="return confirm('Anda yakin?')" href="{{ route('hapus', $tampilkan->id) }}" class="btn btn-sm btn-danger text-white">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </a>
                            <a href="{{ route('edit', $tampilkan->id) }}" class="btn btn-warning btn-sm">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
