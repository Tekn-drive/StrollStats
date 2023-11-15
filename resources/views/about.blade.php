@extends('template.template')
<link rel = "stylesheet" href = "css/about.css">

@section('title')
    StrollStats - About
@endsection

@section('container')
<div class="container my-5 about-background">
    
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">For those who walk the extra mile</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta vel quod ducimus placeat neque,
                 totam sit dignissimos rerum ratione consequatur?</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Our Mission</h2>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta vel quod ducimus placeat neque,
                 totam sit dignissimos rerum ratione consequatur?</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Our Values</h2>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta vel quod ducimus placeat neque,
                 totam sit dignissimos rerum ratione consequatur?</p>
        </div>
    </div>


    <div class="row justify-content-center mt-4">
    
        <div class="col-auto mb-3">
            <div class="card team-card">
                <img src="./images/steps.jpg" class="card-img-top" alt="team member photo">
                <div class="card-body">
                    <h5 class="card-heading">Meet Our<br>Team Members</h5>
                </div>
            </div>
        </div>

        @php
            $teamMembers = [
                ['image' => 'juan.png', 'name' => 'Juan Arnold', 'title' => 'Technical Director'],
                ['image' => 'darian.jpg', 'name' => 'Darian Elbert', 'title' => 'Project Manager'],
                ['image' => 'darian.jpg', 'name' => 'Nathanael Deciano', 'title' => 'Project Manager'],
                ['image' => 'darian.jpg', 'name' => 'Dave Sebastian', 'title' => 'Project Manager'],
                ['image' => 'darian.jpg', 'name' => 'Nathan Setiawan', 'title' => 'Project Manager'],
            ];
        @endphp

        @foreach ($teamMembers as $member)
            <div class="col-auto mb-3">
                <div class="card team-card">
                    <img src="./images/{{ $member['image'] }}" class="card-img-top" alt="{{ $member['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $member['name'] }}</h5>
                        <p class="card-text">{{ $member['title'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
</div>
@endsection