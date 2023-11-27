@extends('template.template')
<link rel = "stylesheet" href = "css/app.css">

@section('title')
    StrollStats - Home
@endsection

@section('container')
    <div class="mt-4 mb-4 p-3">
        <h1 class="display-4 text-center" style="font-size: 3.8em;">Welcome to StrollStats</h1>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                @if($user)
                    <div class="mb-3 text-center" style="font-size: 1.3em;">
                        <strong>Name:</strong>
                        <p>{{ $user->name }}</p>
                    </div>
                    <div class="mb-3 text-center" style="font-size: 1.3em;">
                        <strong>Email:</strong>
                        <p>{{ $user->email }}</p>
                    </div>
                @endif
                @if($playerDetails)
                    <div class="mb-3 text-center" style="font-size: 1.3em;">
                        <strong>Phone:</strong>
                        <p>{{ $playerDetails->player_phone }}</p>
                    </div>
                    <div class="mb-3 text-center" style="font-size: 1.3em;">
                        <strong>Gender:</strong>
                        <p>{{ $playerDetails->player_gender }}</p>
                    </div>
                @endif
                <div class="mb-3 text-center" style="font-size: 1.3em;">
                    <strong>Total Steps Taken:</strong>
                    <p>{{ $totalSteps }}</p>
                </div>
                <div class="text-center">
                    <a href="/home/edit" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 p-3">
        <h2 class="mb-3 text-center">Leaderboard</h2>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="table-responsive">
                     <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">Name</th>
                                <th class="text-center" scope="col">Steps</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usersWithSteps as $user)
                                <tr>
                                    <td class="text-center">{{ $user->name }}</td>
                                    <td class="text-center">{{ $user->totalSteps }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection