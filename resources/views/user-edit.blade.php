@extends('template.template')

@section('title')
    StrollStats - Track Your Steps
@endsection

@section('container')

<style>
    body {
        background: url("/Assets/Login Background.png") no-repeat center center fixed;
    }
</style>


<div>
    @if(session('message'))
        <div class="alert alert-success">
        {{ session('message') }}
        </div>
    @endif
    <h1 style="text-align: center; margin-top: 10px; margin-bottom: 10px">Update Your Details</h1>
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

    <div class="row">
        <div class="col-9 col-md-6 offset-md-3">
            <form action="{{ url('/home/update') }}" method="POST">
                @method('PUT')

                @csrf
                <div class="form-group" style="margin-top: 5px;">
                    <label for="name">Your Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                    {{-- CRUD --}}
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group" style="margin-top: 5px;">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                    {{-- CRUD --}}
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group" style="margin-top: 5px;">
                    <label for="player_phone">Phone Number</label>
                    <input type="text" class="form-control" id="player_phone" name="player_phone" value="{{ $playerDetails->player_phone ?? '-' }}">
                    @error('player_phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group" style="margin-top: 5px;">
                    <label for="player_gender">Gender</label>
                    <select class="form-control" id="player_gender" name="player_gender">
                        <option value="">Select Gender</option>
                        <option value="Male" {{ $user->player?->player_gender == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ $user->player?->player_gender == 'Female' ? 'selected' : '' }}>Female</option>
                        <option value="Other" {{ $user->player?->player_gender == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('player_gender')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Update</button>

            </form>
        </div>
    </div>

    <div class="row" style="margin-top: 20px;">
        <div class="col-9 col-md-6 offset-md-3 text-center">
            <a href="{{ route('password.edit') }}" class="btn btn-secondary">Change Password</a>
        </div>
    </div>
</div>
@endsection