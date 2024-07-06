@extends('theme.header')
@section('content')
<div class="container mt-3">
<div class="d-flex justify-content-between flex-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h1">Input Pelanggan</h1>
</div>
    <div class="col-md-8 offset-md-2">
        <form action="{{ route('daftar') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama" class="form-label">Nama</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama" required>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat" class="form-label">Alamat</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-home"></i></span>
                    </div>
                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan alamat" required>
                </div>
            </div>
            <div class="form-group">
                <label for="no_tlp" class="form-label">No Telepon</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="number" name="no_tlp" id="no_tlp" class="form-control" placeholder="Masukkan nomor telepon" required>
                </div>
            </div>
            <div class="form-group">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select name="jk" id="jk" class="form-control">
                    <option value="Laki - Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tgl_daftar" class="form-label">Tanggal Daftar</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" name="tgl_daftar" id="tgl_daftar" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
@if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            alert('{{ session("success") }}');
        });
    </script>
@endif
