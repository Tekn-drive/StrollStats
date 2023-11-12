@extends('template.template')

@section('title')
    StrollStats - Home
@endsection

@section('container')
    <h1>Welcome to StrollStats</h1>
    {{-- Display player information --}}
    @if($playerDetails)
        <p>Phone: {{ $playerDetails->player_phone }}</p>
        <p>Gender: {{ $playerDetails->player_gender }}</p>
    @endif
@endsection
