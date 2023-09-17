@extends('layouts.master')


@section('title', 'about')




<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>



@section('content')





    <div class="heros overlays" style="background-image: url('images/about.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1 class="heading text-white mb-2" data-aos="fade-up">About Us</h1>
                    <p data-aos="fade-up" class=" mb-5 text-white lead text-white-40">Home / About Us</p>


                </div>


            </div>
        </div>
    </div>

    <div class="section sec-about">
        <div class="container">
            <div class="row g-5 justify-content-between">
                <div class="col-lg-6 has-bg" data-aos="fade-right">
                    <img src="images/hero_2.jpg" alt="Image" class="img-fluid img-box-shadow rounded">
                </div>
                <div class="col-lg-6 align-self-center" data-aos="fade-left" data-aos-delay="100">
                    <span class="subheading mb-3">About</span>
                    <h2 class="heading mb-4">History</h2>
                    <p>Welcome to codemate, where our journey began with a shared passion for technology and a deep
                        belief in the transformative power of education. Founded by a group of dedicated volunteers,
                        codemate is the culmination of our commitment to make a positive impact on the world. Our
                        mission is simple yet profound: to provide accessible and quality tech education to aspiring
                        learners while harnessing the strength of our volunteer community. With years of collective
                        experience in the tech industry, we're driven by the belief that knowledge should be shared, and
                        barriers to learning should be dismantled. Together, we strive to empower individuals with the
                        skills to thrive in an increasingly digital world. Join us on our mission to make technology
                        education accessible to all, one volunteer at a time.</p>

                </div>
            </div>
        </div>
    </div>


    <div class="section sec-features bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-4" data-aos="fade-up">
                    <span class="subheading mb-3">The Team</span>
                    <h2 class="heading">Who We Are</h2>
                </div>

            </div>
        </div>

        <div class="container">

            <div class="features-slider-wrap" data-aos="fade-up" data-aos-delay="100">
                <div class="features-slider" id="features-slider">

                    <div class="item">

                        <div class="feature bg-color-1">
                            <img src="images/team/Sereen.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">

                            <h3 class="mb-0">Sereen Qamhia</h3>
                            <span class="text-black-50 mb-3 d-block">CEO, Co-Founder,Back End</span>
                            <p class="text-black-50">"Dedicated to fostering inclusive tech communities."</p>

                            {{-- <a href="#" class="more d-block">Learn More</a> --}}
                        </div>

                    </div>
                    <div class="item">

                        <div class="feature bg-color-5">
                            <img src="images/team/Ahmad tamimi.png" alt="Image"
                                class="img-fluid w-50 rounded-circle mb-4">

                            <h3 class="mb-0">Ahmad Al-Tamimi</h3>
                            <span class="text-black-50 mb-3 d-block">CEO, Co-Founder,Back End</span>
                            <p class="text-black-50">"Solve problem"</p>

                            {{-- <a href="#" class="more d-block">Learn More</a> --}}
                        </div>

                    </div>
                    <div class="item">

                        <div class="feature bg-color-6">
                            <img src="images/team/Hasan.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">

                            <h3 class="mb-0">Hasan Abu Khalil</h3>
                            <span class="text-black-50 mb-3 d-block">CEO, Co-Founder</span>
                            <p class="text-black-50">"Empowering the future, one line of code at a time."</p>

                            {{-- <a href="#" class="more d-block">Learn More</a> --}}
                        </div>

                    </div>

                    <div class="item">

                        <div class="feature bg-color-2">
                            <img src="images/team/Malek.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">

                            <h3 class="mb-0">Malek Sawalha</h3>
                            <span class="text-black-50 mb-3 d-block">CEO, Co-Founder</span>
                            <p class="text-black-50"> "Driving innovation through education."</p>

                            {{-- <a href="#" class="more d-block">Learn More</a> --}}
                        </div>

                    </div>

                    <div class="item">

                        <div class="feature bg-color-3">
                            <img src="images\team\Sajeda.png" alt="Image" class="img-fluid w-50 rounded-circle mb-4">

                            <h3 class="mb-0">Sajeda</h3>
                            <span class="text-black-50 mb-3 d-block">CEO, Co-Founder</span>
                            <p class="text-black-50">"Passionate about making tech accessible to all."</p>

                            {{-- <a href="#" class="more d-block">Learn More</a> --}}
                        </div>

                    </div>



                    <div class="item">

                        <div class="feature bg-color-4">
                            <img src="images/team/Ahmad.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">

                            <h3 class="mb-0">Ahmad-Alkhatatbeh</h3>
                            <span class="text-black-50 mb-3 d-block">CEO, Co-Founder</span>
                            <p class="text-black-50">"Inspiring the next generation of coders."</p>

                            {{-- <a href="#" class="more d-block">Learn More</a> --}}
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>

    </div>

    <div class="section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                    <div id="features-slider-nav">
                        <button class="btn btn-primary" class="prev" data-controls="prev">Prev</button>
                        <button class="btn btn-primary" class="next" data-controls="next">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="vision">
                        <h2>Our Vision</h2>
                        <p class="mb-4 lead">Our vision is to create a world where technology education knows no
                            boundaries. We aspire to be a beacon of empowerment, where volunteers come together to ignite
                            the passion for coding and digital literacy in every corner of the globe. We envision a future
                            where anyone, regardless of background or circumstance, can access the skills and knowledge
                            needed to excel in an ever-evolving tech-driven world. Together, we are shaping a brighter
                            future.</p>
                        {{-- <p><a href="#" class="link-underline">Learn More</a></p> --}}
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="mission">
                        <h2>Our Mission</h2>
                        <p class="mb-4 lead">At codemate, our mission is to democratize technology education. We are
                            dedicated to fostering a thriving community of volunteers who share their expertise to equip
                            individuals of all backgrounds with the coding skills essential for success in the digital age.
                            Through accessible and engaging courses, we aim to bridge the knowledge gap, empower learners,
                            and pave the way for a more inclusive and innovative world. Together, we strive to make learning
                            to code an enriching journey for all.</p>
                        {{-- <p><a href="#" class="link-underline">Learn More</a></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section sec-instagram pb-0">
        <div class="container mb-5">
            <div class="row align-items-center">
                <div class="col-lg-3" data-aos="fade-up">
                    <span class="subheading mb-3">Partnerships</span>
                    <h2 class="heading">Our Partnerships</h2>
                </div>
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Partnerships fuel our mission at codemate. Together with like-minded organizations, we're
                        expanding access to tech education and building a brighter future through collaborative efforts.
                        Join us in making a global impact.</p>
                </div>
            </div>
        </div>

        <div class="instagram-slider-wrap" data-aos="fade-up" data-aos-delay="200">
            <div class="instagram-slider mb-2" id="instagram-slider">

                <div class="item">
                    <a class="instagram-item ">
                        <span class="icon-instagram"></span>
                        <img src="images/img_v_8-min.jpg" alt="Image" class="img-fluid" style="border-radius: 50% ">
                    </a>
                </div>

                <div class="item">
                    <a class="instagram-item">
                        <span class="icon-instagram"></span>
                        <img src="images/img_v_2-min.jpg" alt="Image" class="img-fluid" style="border-radius: 50%">
                    </a>
                </div>

                <div class="item">
                    <a class="instagram-item">
                        <span class="icon-instagram"></span>
                        <img src="images/partnership4.jpg" alt="Image" class="img-fluid"
                            style="border-radius: 50% ; height :40%">
                    </a>
                </div>

                <div class="item">
                    <a class="instagram-item">
                        <span class="icon-instagram"></span>
                        <img src="images/img_v_4-min.jpg" alt="Image" class="img-fluid" style="border-radius: 50%">
                    </a>
                </div>

                <div class="item">
                    <a class="instagram-item">
                        <span class="icon-instagram"></span>
                        <img src="images/img_v_5-min.jpg" alt="Image" class="img-fluid" style="border-radius: 50%">
                    </a>
                </div>

                <div class="item">
                    <a class="instagram-item">
                        <span class="icon-instagram"></span>
                        <img src="images/partnership5.jpg" alt="Image" class="img-fluid"
                            style="border-radius: 50% ; height :40%">
                    </a>
                </div>


            </div>
        </div>

    </div>

@endsection
