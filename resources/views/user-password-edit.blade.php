@extends('template.template')

@section('title')
    StrollStats - Track Your Steps
@endsection

@section('container')
<div style="padding-top: 20px; padding-bottom: 20px;">
    @if(session('success'))
        <div class="alert alert-success" style="margin-top: 20px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger" style="margin-top: 20px; margin-bottom: 20px;">
            {{ session('error') }}
        </div>
    @endif

    <div class="row" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="col-9 col-md-6 offset-md-3" style="padding-top: 20px; padding-bottom: 20px;">
            <form action="{{ route('password.update') }}" method="POST" style="margin-top: 20px; margin-bottom: 20px;">
                @csrf

                <div class="form-group" style="margin-top: 20px; margin-bottom: 20px;">
                    <label for="new_password">New Password:</label>
                    <input type="password" class="form-control" id="new_password" name="new_password" required style="margin-bottom: 20px;">
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="new_password_confirmation">Confirm New Password:</label>
                    <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required style="margin-bottom: 20px;">
                </div>

                <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Change Password</button>
            </form>
        </div>
    </div>
</div>
@endsection