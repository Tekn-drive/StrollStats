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

    <div id="carouselExampleIndicators" class="carousel slide about-carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url('images/walk1.jpg') }}" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{ url('images/walk2.jpg') }}" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{ url('images/walk3.jpg') }}" class="d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row justify-content-center mt-4">

        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Our Team</h2>
                <p></p>
            </div>
        </div>
    
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
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
                ['image' => 'juan.png', 'name' => 'Darian Elbert', 'title' => 'Project Manager'],
                ['image' => 'juan.png', 'name' => 'Nathanael Deciano', 'title' => 'Project Manager'],
                ['image' => 'juan.png', 'name' => 'Dave Sebastian', 'title' => 'Project Manager'],
                ['image' => 'juan.png', 'name' => 'Nathan Setiawan', 'title' => 'Project Manager'],
            ];
        @endphp

        @foreach ($teamMembers as $member)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
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