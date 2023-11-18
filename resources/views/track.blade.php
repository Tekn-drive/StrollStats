@extends('template.template')

@section('title')
    StrollStats - Track Your Steps
@endsection

@section('container')
<div>
    <h1>Add New Record!</h1>
    <h6>How many steps have you taken today?</h6>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/processForm') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="steps">Enter the steps you taken:</label>
            <input type="text" class="form-control" id="steps" name="steps" value="{{ old('steps') }}">
            {{-- CRUD --}}
            @error('steps')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mb-2">Register</button>

    </form>
</div>
<div>
    <h1>Track Your Steps!</h1>
    <div>
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date recorded</th>
                    <th scope="col">Steps Taken</th>
                </tr>
            </thead>
            <tbody>
            @php
                $i = 0;
            @endphp
            @foreach($playerSteps as $step)
                <tr>
                    <th scope="row">{{ $i+1 }}</th>  
                    <td>{{ $step->created_at }}</td> 
                    <td>{{ $step->steps }}</td>
                </tr>
                @php
                    $i = $i + 1;
                @endphp
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection