@extends('template.template')

@section('title')
    StrollStats - Home
@endsection

@section('container')
    <h1>Welcome to StrollStats</h1>
    @if($user)
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
    @endif
    {{-- Display player information --}}
    @if($playerDetails)
        <p>Phone: {{ $playerDetails->player_phone }}</p>
        <p>Gender: {{ $playerDetails->player_gender }}</p>
    @endif
    <p>Total Steps Taken: {{ $totalSteps }}</p>

    <a href="/home/edit" class="btn btn-primary">Edit Profile</a>

    <h2>Leaderboard</h2>
    <ul>
        @foreach ($usersWithSteps as $user)
            <li>{{ $user->name }}: {{ $user->totalSteps }} steps</li>
        @endforeach
    </ul>
@endsection
