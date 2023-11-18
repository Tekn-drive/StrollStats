@extends('template.template')

@section('title')
    StrollStats - Track Your Steps
@endsection

@section('container')
<div>
    @if(session('message'))
        <div class="alert alert-success">
        {{ session('message') }}
        </div>
    @endif
    <h1>Update Your Details</h1>
    <hr>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ url('/home/update') }}" method="POST">
        @method('PUT')

        @csrf
        <div class="form-group">
            <label for="name">Your Name:</label>
             <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
             {{-- CRUD --}}
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
             {{-- CRUD --}}
            @error('email')
                 <div class="text-danger">{{ $message }}</div>
             @enderror
        </div>

        <div class="form-group">
            <label for="player_phone">Phone Number</label>
             <input type="text" class="form-control" id="player_phone" name="player_phone" value="{{ $playerDetails->player_phone }}">
             {{-- CRUD --}}
             @error('player_phone')
                 <div class="text-danger">{{ $message }}</div>
             @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-2">Update</button>

    </form>
</div>
@endsection