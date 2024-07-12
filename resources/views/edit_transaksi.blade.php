@extends('theme.header')
@section('content')
<div class="container mt-3">
<div class="d-flex justify-content-between flex-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h1">Edit Transaksi</h1>
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
                <label for="bayar" class="form-label">Bayar</label>
                <input type="number" name="bayar" id="bayar" class="form-control" oninput="hitungKembalian()" required>
            </div>
            <div class="form-group">
                <label for="total" class="form-label">Total</label>
                <input type="number" name="total" id="total" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="kembalian" class="form-label">Kembalian</label>
                <input type="number" name="kembalian" id="kembalian" class="form-control" readonly>
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
        hitungNominal();
    }

    function hitungNominal() {
        var jumlah = parseFloat(document.getElementById('jumlah').value) || 0;
        var harga = parseFloat(document.getElementById('harga').value) || 0;
        var total = jumlah * harga;
        document.getElementById('total').value = total;
        hitungKembalian(); 
    }

    function hitungKembalian() {
        var total = parseFloat(document.getElementById('total').value) || 0;
        var bayar = parseFloat(document.getElementById('bayar').value) || 0;
        var kembalian = bayar - total;

        if (kembalian > 0) {
            document.getElementById('kembalian').value = kembalian;
        } else {
            document.getElementById('kembalian').value = '';
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
