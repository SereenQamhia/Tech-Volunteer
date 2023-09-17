@extends('layouts.master')

@section('title', 'single | Project')



<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<script src="{{ url('https://kit.fontawesome.com/d6692547f6.js') }}" crossorigin="anonymous"></script>

@section('content')




    <div class="heros overlays height:300px" style="background-image: url({{ $products->image }}); important">
        <div class="container">
            <div class="row align-items-center justify-content-center" style="position: relative">
                <div class="col-lg-6 text-center">
                    <h1 class="heading text-white mb-2" data-aos="fade-up">{{ $products->name }}</h1>
                    <p data-aos="fade-up" class=" mb-5 text-white lead text-white-40">Home / {{ $products->name }}</p>
                    {{-- <p data-aos="fade-up"  data-aos-delay="100">
					<a href="#" class="btn btn-primary me-4">Donate Now</a>
				</p>		 --}}

                </div>


            </div>
        </div>
    </div>




    <section class="container mt-5 pb-5  pt-3">
        <div class="row">
            <div class="col-lg-6">


                <div class="card">
                    <div class="card-body">
                        @if ($diffInMinutes < 60)
                            <p class="text">Posted before {{ $diffInMinutes }} Minutes</p>
                        @elseif ($diffInMinutes > 60 && $diffInHours < 24)
                            <p class="text">Posted before {{ $diffInHours }} Hours</p>
                        @elseif ($diffInMinutes > 60 && $diffInHours >= 24)
                            <p class="text">Posted before {{ $diffInDays }} days</p>
                        @endif
                        <h2 class="card-title">Project Role</h2>
                        <p class="card-text">About the project and its activities</p>
                        <h3>About</h3>
                        <p>{{ $products->description2 }}</p>
                        <h3>Responsibilities</h3>
                        <p>{{ $products->description3 }}</p>
                        <h3>Process</h3>
                        <ul class="list-unstyled">
                            <li>Apply Online: Fill out our quick online application form, indicating your interest in
                                mentoring for the {{ $products->name }} Foundations project.</li>
                            <li>Resume Submission: Upload your CV or resume to showcase your skills and experience in
                                web development.</li>
                            <li>Interview and Orientation: After reviewing your application, we'll schedule a brief
                                interview to discuss your availability and expectations. Attend an orientation to get
                                acquainted with our platform and guidelines.</li>
                            <li>Mentor Match: Once approved, we'll match you with learners eager to participate in the
                                {{ $products->name }}Foundations project.</li>
                            <li>Start Mentoring: Begin your volunteer journey by mentoring and sharing your expertise
                                with aspiring web developers.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">

                        <div class="text-muted">
                            <h3><a href="#">Project Details</a></h3>

                            <br>
                            {{-- @php
                                $totalsproduct = 0;
                                $percant = 0;
                            @endphp

                            @foreach ($volanters as $volanter)
                                @if ($volanter->product_id == $products->id)
                                    @php
                                        $totalsproduct += $volanter->amount;
                                        $percant = (int) (($totalsproduct / $products->total) * 100);
                                    @endphp
                                @endif
                            @endforeach --}}
                                        

                            <div class="progress mb-2">
                                @if ($percant > 99)
                                    <div class="progress-bar" role="progressbar" style="width: {{ $percant }}%;"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        complete</div>
                            </div>
                            @endif
                            @if ($percant < 99)
                                <div class="progress-bar" role="progressbar" style="width: {{ $percant }}%;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    {{ $percant }}%</div>
                        </div>
                        @endif
                        <div class="d-flex mb-4 justify-content-between amount">
                            <div>
      {{ $totalsproduct }}
                            </div>
                            <div>${{ $products->total }}</div>
                        </div>
                    </div>
                    <div></div>
                    <div style="display:block; margin:10px 0">

                        <div>
                            <i class="fa-solid fa-location-dot fa-2xl" style="color: #318c5d;"> </i> <span>
                                {{ $products->location }}</span>
                        </div><br><br>
                        <div>
                            <i class="fa-regular fa-clock fa-2xl" style="color: #f3ec20;"> </i><span> Start
                                at{{ $products->time }}</span>
                        </div><br><br>
                        <div>
                            <i class="fa-regular fa-calendar-days fa-2xl" style="color: #fd9d17;"> </i> <span>
                                Days
                                of
                                instruction:{{ $products->period }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-4">Support Others</h3>
                    <a href="frontform/{{ $products->id }}" class="btn btn-primary mb-3 d-block "
                        style="width: 80%; margin:auto">Join us as a
                        trainer</a>
                    @if ($percant < 99)
                        <a href='payment/{{ $products->id }}' class="btn btn-primary d-block"
                            style="width: 80%; margin:auto">Donate</a>
                            
                    @endif
                    @if ($percant > 99)
                    {{-- erro  --}}
                        <a href="#" class="btn btn-primary d-block" style="width: 80%; margin:auto">Donate</a>
                    @endif
                </div>
            </div>
        </div>



        </div>
        </div>
    </section>



@endsection
