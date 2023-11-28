@extends('template.template')
<link rel = "stylesheet" href = "css/about.css">

@section('title')
    StrollStats - About
@endsection

@section('container')
@foreach ($user->vouchers as $voucher)
    <div class="voucher">
        <img src="{{ asset('images/voucher_' . $voucher->voucher_type . '.jpg') }}" alt="Voucher Type {{ $voucher->type }}">
        <div class="voucher-details">
            <p>ID: {{ $voucher->id }}</p>
            <p>User ID: {{ $voucher->player_id }}</p>
            <p>Email: {{ $user->email }}</p>
        </div>
    </div>
@endforeach
@endsection