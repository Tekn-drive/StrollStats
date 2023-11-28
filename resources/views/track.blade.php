@extends('template.template')

@section('title')
    StrollStats - Track Your Steps
@endsection

@section('container')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="mt-4 mb-4 p-3 text-center">
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

    <form action="{{ url('/processForm') }}" method="POST" class="mt-4 mb-4">
        @csrf
        <div class="form-group">
            <label for="steps" class="form-label">Enter the steps you taken:</label>
            <input type="text" class="form-control d-block mx-auto" id="steps" name="steps" 
            value="{{ old('steps') }}" style="max-width: 400px;">
            @error('steps')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3 mx-auto">Register</button>
    </form>
</div>

<!-- <a href="{{ route('google.getFitData') }}">Sync with Google Fit</a> -->

<div class="mt-4 p-3">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <h1 class="text-center mb-4">Track Your Steps!</h1>
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Date recorded</th>
                            <th scope="col">Steps Taken</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($playerSteps as $index => $step)
                        <tr class="text-center">
                            <th scope="row">{{ $index + 1 }}</th>  
                            <td>{{ $step->created_at }}</td> 
                            <td>{{ $step->steps }}</td>
                            <td>
                                <form action="{{ route('steps.destroy', $step->id) }}" method="POST" 
                                    class="d-flex justify-content-center">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
