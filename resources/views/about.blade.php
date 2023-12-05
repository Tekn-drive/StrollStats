@extends('template.template')
<link rel = "stylesheet" href = "css/about.css">

@section('title')
    StrollStats - About
@endsection

@section('container')
<div class="container my-5 about-background">
    
    <div class="row">
        <div class="col-12" style="max-width: 1100px; margin-left: auto; margin-right: auto;">
            <h1 class="text-center">For those who walk the extra mile</h1><br>
            <p class="text-center" style="font-size: 18px;">Embark on a journey of wellness and discovery with StrollStats, your dedicated companion for tracking every step 
                towards a healthier life. Our step-tracking application is designed for individuals who strive to go 
                beyond the ordinary, who take the road less traveled — literally. <br><br>

                At StrollStats, we believe that every step counts. Whether you're taking a leisurely walk in the park, 
                embarking on a vigorous hike, or simply moving more throughout your day, our application is here to 
                capture your progress, encourage your movements, and celebrate your milestones. <br><br>
                
                For the dreamers who aspire to climb mountains, for the determined who aim to outpace the ordinary, 
                and for the everyday heroes finding adventure in the urban sprawl — StrollStats is here to ensure that 
                when you go the extra mile, it's counted, recorded, and honored. <br><br>
                
                Join our community of walkers, joggers, and fitness enthusiasts who all share one common goal:
                 to keep moving forward, one step at a time. With StrollStats, turn your daily walks into strides 
                 towards a healthier future, and let's take the path to peak wellness together. <br><br>
                
                "Because every journey begins with a single step — and we're here to count them all."</p><br>
        </div>
    </div>

    <div class="row">
        <div class="col-12" style="max-width: 1100px; margin-left: auto; margin-right: auto;">
            <h2 class="text-center">Our Mission</h2><br>
            <p class="text-center" style="font-size: 18px;">At StrollStats, our mission is to inspire and empower individuals to lead more active and fulfilling 
                lives through the simple act of walking. We're committed to providing a robust and intuitive platform that not only 
                tracks each step but also offers insights and encouragement to help our users reach their personal health and 
                wellness goals. <br><br>
                
                We aim to be a catalyst for positive change, fostering a community where progress is celebrated, 
                support is abundant, and the benefits of a step-forward lifestyle are accessible to everyone, everywhere.</p><br>
        </div>
    </div>

    <div class="row">
        <div class="col-12" style="max-width: 1100px; margin-left: auto; margin-right: auto;">
            <h2 class="text-center">Our Values</h2>
            <p class="text-center" style="font-size: 18px;">Our vision is a future where movement is a cornerstone of daily life, and every step taken is a 
                stride towards global health and happiness. We envision StrollStats as more than just an app; it's a movement revolution, 
                a part of daily routines, and a constant companion on the path to wellness. <br><br>
                
                We strive to harness the power of technology 
                to break down barriers to physical activity and to create a world where every step is an opportunity to better ourselves 
                and our communities. With every mile mapped and every goal achieved, we're creating a healthier, more active world—one 
                step at a time.</p><br>
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
                ['image' => 'darian.jpg', 'name' => 'Darian Elbert', 'title' => 'Financial Analyst'],
                ['image' => 'deci.jpg', 'name' => 'Nathanael Deciano', 'title' => 'Systems Administrator'],
                ['image' => 'dave.jpg', 'name' => 'Dave Sebastian', 'title' => 'Project Manager'],
                ['image' => 'nathan.jpg', 'name' => 'Nathan Setiawan', 'title' => 'Operations Manager'],
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