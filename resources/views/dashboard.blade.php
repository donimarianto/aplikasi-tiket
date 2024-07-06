@extends('theme.header')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <div class="container mt-3">
    <div class="d-flex justify-content-between flex-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h1">Aplikasi Pemesanan Tiket<b>/Home</b></h1>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Pendaftar
                    </div>
                    <div class="card-body text-center">
                        <h1>{{ $hitung1 }}</h1>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        Tiket
                    </div>
                    <div class="card-body text-center">
                        <h1>{{ $hitung2 }}</h1>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-header bg-warning text-white">
                        Transaksi
                    </div>
                    <div class="card-body text-center">
                        <h1>{{ $hitung3 }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
