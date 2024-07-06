@extends('theme.header')
@section('content')
<div class="container mt-3">
<div class="d-flex justify-content-between flex-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h1">Input Transaksi</h1>
</div>
    <div class="col-md-8 offset-md-2">
        <form action="{{ route('saveTransaksi') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama_pengguna" class="form-label">Nama Pengguna</label>
                <select name="nama_pengguna" id="nama_pengguna" class="form-control">
                    <option value="">--Pilih Pelanggan--</option>
                    @foreach($data as $lihat)
                    <option value="{{ $lihat->nama }}">{{ $lihat->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama_event" class="form-label">Nama Event</label>
                <select name="nama_event" id="nama_event" class="form-control" onchange="updateHarga()">
                    <option value="">--Pilih Event--</option>
                    @foreach($data_transaksi as $lihat)
                    <option value="{{ $lihat->nama }}" data-harga="{{ $lihat->harga }}">{{ $lihat->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" name="jumlah" id="jumlah" class="form-control" oninput="hitungNominal()" required>
            </div>
            <div class="form-group">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" name="harga" id="harga" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="total" class="form-label">Total</label>
                <input type="number" name="total" id="total" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="tanggal" class="form-label">Tanggal</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" name="tanggal" id="tanggal" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<script>
    function updateHarga() {
        var select = document.getElementById('nama_event');
        var nama_event = select.options[select.selectedIndex].value;
        var harga = select.options[select.selectedIndex].getAttribute('data-harga');

        document.getElementById('harga').value = harga;
    }
    window.onload = updateHarga;

    function hitungNominal() {
        var jumlah = parseFloat(document.getElementById('jumlah').value);
        var harga = parseFloat(document.getElementById('harga').value);
        var total = jumlah * harga;
        if (total < 0) {
            document.getElementById('total').value = '';
        } else {
            document.getElementById('total').value = total;
        }
    }
</script>
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