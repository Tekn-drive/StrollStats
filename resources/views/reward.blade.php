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

    @php
        $unlockedCount = $user->vouchers->count();
    @endphp

    @foreach ($voucherMilestones as $type => $milestone)
        @if ($unlockedCount < 4 && !$user->vouchers->contains('voucher_type', $type))
            <div class="voucher locked">
                <p>This reward will be unlocked once you reach {{ number_format($milestone) }} steps.</p>
            </div>
            @php $unlockedCount++; @endphp
        @endif
    @endforeach
</div>
@endsection