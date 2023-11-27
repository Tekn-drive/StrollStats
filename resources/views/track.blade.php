@extends('template.template')
<link rel = "stylesheet" href = "css/app.css">

@section('title')
    StrollStats - Track Your Steps
@endsection

@section('container')
<div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class = "d-inline-flex justify-content-center" style="width:100%">
        <div class="card mt-4 mb-4 d-inline-flex justify-content-center" style="width: 30vw">
            <div class="card-body">                
                <h1 class="card-title">
                    Add New Record!
                </h1>
                <h6 class = "card-subtitle text-muted">
                    How many steps have you taken today?
                </h6>
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
                    <div class="form-group card-text mt-3">
                        <label for="steps">Enter the steps you taken:</label>
                        <input type="text" class="form-control" id="steps" name="steps" value="{{ old('steps') }}">
                        {{-- CRUD --}}
                        @error('steps')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-3 mb-2">Register</button>
        
                </form>
            </div>
        </div>
    </div>
</div>



<div class="d-inline-flex justify-content-center" style="width:100%;">
    <div class="justify-content-center" style = "width: 75%">
        <h1>Your Steps!</h1>
        <div>
            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col">Num</th>
                        <th scope="col">Date recorded</th>
                        <th scope="col">Steps Taken</th>
                        <th scope="col">Aciton</th>
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
                        <td>
                            <form action="{{ route('steps.destroy', $step->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @php
                        $i = $i + 1;
                    @endphp
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection