@extends('template.template')
<link rel = "stylesheet" href = "css/rewards.css">

@section('title')
    StrollStats - Track Your Steps
@endsection

@section('container')

<h1 style="text-align: center; margin-top: 10px; margin-bottom: 20px">Reach certain milestones to receive vouchers!</h1>

<div class="voucher-container">
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
</div>
@endsection