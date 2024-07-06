@extends('theme.header')
@section('content')
<div class="container mt-3">
<div class="d-flex justify-content-between flex-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h1">Input Tiket/Event</h1>
</div>
    <div class="col-md-8 offset-md-2">
        <form action="{{ route('simpanEvent') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama" class="form-label">Nama Tiket Event</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-ticket-alt"></i></span>
                    </div>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama tiket" required>
                </div>
            </div>
            <div class="form-group">
                <label for="tanggal" class="form-label">Tanggal Event</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="lokasi" class="form-label">Lokasi</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                    </div>
                    <input type="text" name="lokasi" id="lokasi" class="form-control" placeholder="Masukkan lokasi" required>
                </div>
            </div>
            <div class="form-group">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-info-circle"></i></span>
                    </div>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan deskripsi" required>
                </div>
            </div>
            <div class="form-group">
                <label for="harga" class="form-label">Harga</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                    </div>
                    <input type="text" name="harga" id="harga" class="form-control" placeholder="Masukkan harga" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

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
@endsection
