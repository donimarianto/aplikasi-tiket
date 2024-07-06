@extends('theme.header')
@section('content')
<div class="container mt-3">
<div class="d-flex justify-content-between flex-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h1">Transaksi</h1>
</div>
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="text-center table table-striped table-bordered table-hover mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th><i class="fas fa-user"></i> Nama Pembeli</th>
                        <th><i class="fas fa-ticket-alt"></i> Nama Tiket</th>
                        <th><i class="fas fa-sort-numeric-up-alt"></i> Jumlah</th>
                        <th><i class="fas fa-calendar-alt"></i> Tanggal</th>
                        <th><i class="fas fa-dollar-sign"></i> Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $total = 0;
                    @endphp
                    @foreach($transaksi as $lihat)
                    <tr>
                        <td>{{ $lihat->nama_pengguna }}</td>
                        <td>{{ $lihat->nama_event }}</td>
                        <td>{{ $lihat->jumlah }}</td>
                        <td>{{ $lihat->tanggal }}</td>
                        <td>Rp.{{ $lihat->harga }}</td>
                        @php
                        $total += $lihat->harga;
                        @endphp
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="text-right"><strong>Total:</strong></td>
                        <td><strong>Rp.{{ $total }}</strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
