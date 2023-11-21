@extends('template.template')

@section('title')
    StrollStats - Leaderboard
@endsection

@section('container')
    <h1>LEADERBOARD</h1>

    @php
        $i = 0;
    @endphp

    @foreach($step as $step)
    <tr>
        <th scope="row">{{ $i+1 }}</th>
        <td>{{ $step->steps }}</td>
        <td>{{ $step->player_id }}</td>


        <br>
    </tr>
    @php
        $i = $i+1;
    @endphp
    @if ($i >= 10)
        @break
    @endif
    @endforeach
<!-- 
    @foreach($user as $user)
    <div>{{$user -> name}}</div>
    @endforeach -->
@endsection