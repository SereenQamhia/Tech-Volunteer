@extends('layouts.master')
@section('title', 'Home')

<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>






@section('content')


    <div class="hero overlay" style="background-image: url('images/classroom-1.png')">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12 text-center">
                    <span class="subheading-white text-white mb-3" data-aos="fade-up">CODE-MATES</span>
                    <h1 class="heading text-white mb-2" data-aos="fade-up">Empower through Code & Giving
                    </h1>
                    <p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">program to help increase access to
                        education in communities around jordan</p>
                    <p data-aos="fade-up" data-aos-delay="100">
                        <a href="{{ route('traineeForm') }}"
                            class="btn btn-primary me-4 d-inline-flex align-items-center"><span>Be a Trainee </span></a>
                        <a href="https://youtu.be/N7ZmPYaXoic?si=H_yHMLXbd2sQmCSv"
                            class="text-white glightbox d-inline-flex align-items-center"><span
                                class="icon-play me-2"></span><span>Watch the video</span></a>
                    </p>

                </div>


            </div>

            {{-- <div class="col-lg-5" style="margin-top: 49px;">
                <form action="paypal" method="POST" class="bg-white p-5 rounded donation-form" data-aos="fade-up" style="margin-bottom: 0">
                    @csrf
                    <h3>Quick Donation Form</h3>
                    <div class="form-field mb-3">
                        <label for="amount-1" class="amount js-amount" data-value="1.00">
                            <input type="radio" id="amount-1" name="radio-amount" checked="true">
                            <span>$1</span>
                        </label>

                            <label for="amount-2" class="amount js-amount" data-value="5.00">
                                <input type="radio" id="amount-2" name="radio-amount">
                                <span>$5</span>
                            </label>
                            <label for="amount-3" class="amount js-amount" data-value="25.00">
                                <input type="radio" id="amount-3" name="radio-amount">
                                <span>$25</span>
                            </label>
                            <label for="amount-4" class="amount js-amount" data-value="100.00">
                                <input type="radio" id="amount-4" name="radio-amount">
                                <span>$100</span>


							</label>
							<h3>And you can select custom</h3>


                        </div>
                        <div class="field-icon">
                            <span>$</span>
                            <input type="text" placeholder="0.00" class="form-control px-4" name="price"
                                value="1.00">

						</div>
						<div class="form-field mb-3">
							{{-- <input type="text" placeholder="Name" class="form-control px-4"> --}}
            {{-- <input type="email" placeholder="Email" class="form-control px-4"> --}}
            {{-- </div>

						<input type="submit" value="Donate by paypal" class="btn w-100" style="background:url('images/PayPal-Logo.png')">
                </form>




            </div>  --}}

        </div>
    </div>
    </div>

    <div class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="vision">
                        <h2>Our Vision</h2>
                        <p class="mb-4 lead">Our vision is to create a world where technology education knows no boundaries.
                            We aspire to be a beacon of empowerment, where volunteers ignite the passion for coding</p>
                        <p><a href="{{ route('about') }}" class="link-underline">Learn More</a></p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="mission">
                        <h2>Our Mission</h2>
                        <p class="mb-4 lead">At CODE-MATES, our mission is to democratize technology education.
                            We are dedicated to fostering a thriving community of volunteers who share their expertise.</p>
                        <p><a href="{{ route('about') }}" class="link-underline">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="section flip-section" id="donite" style="background-image: url('images/classroom-1.png')">

        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center" data-aos="fade-up">
                    <span class="subheading-white mb-3 text-white">Help Now</span>
                    <h2 class="heading text-white">Ways to Donation</h2>
                </div>
            </div>
            <div class="row">


                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 " data-aos="fade-up" data-aos-delay="100">
                    <div class="card" style="width: 100%; height:400px ;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4); ">
                        <img class="card-img-top mx-auto" src="images/donate.jpg" alt="Card image cap" style="width: 90%; ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Financial Donation</h5>
                            <p class="card-text">Transform lives with your donation. Make a difference today!</p>
                            <a href="#services" class="btn btn-primary"style="text-align:center">Donate Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 " data-aos="fade-up" data-aos-delay="100">
                    <div class="card" style="width: 100%; height: 400px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4); ">
                        <img class="card-img-top mx-auto mt-1" src="images/it.png" alt="Card image cap"
                            style="width: 60%; ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Resources Donation</h5>
                            <p class="card-text">Your resource donation is a catalyst for positive change in our community.
                            </p>
                            <a href="/serviceform" class="btn btn-primary">Give Now</a>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4  col-md-6 col-sm-12 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card" style="width: 100%; height:400px ; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4); ">
                        <img class="card-img-top mx-auto mt-2" src="images/Capture.JPG" alt="Card image cap"
                            style="width: 80%; ">
                        <div class="card-body text-center">
                            <h4 class="card-title">Volunteer with us</h4>
                            <p class="card-text">Train with us and be part of a transformative journey.</p>
                            <a href="#services" class="btn btn-primary">Volunteer Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section cause-section bg-light" id="services">

        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <span class="subheading mb-3">Bootcamps</span>
                    <h2 class="heading">Our Bootcamps</h2>
                    <p>Explore  Our Bootcamps and witness the impact of code and compassion in action.</p>

                    <div id="features-slider-nav" class="mt-5 d-flex justify-content-center">
                        <button class="btn btn-primary prev d-flex align-items-center me-2" data-controls="prev">
                            <span class="icon-chevron-left"></span> <span class="ms-3">Prev</span></button>
                        <button class="btn btn-primary next d-flex align-items-center" data-controls="next"><span
                                class="me-3">Next</span> <span class="icon-chevron-right"></span></button>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mb-5">
            <div class="features-slider-wrap position-relative" data-aos="fade-up" data-aos-delay="200">
                <div class="features-slider" id="features-slider">
                    @foreach ($products as $product)
                        <div class="item">
                            <div class="causes-item bg-white">
                                <a href="#"><img src='{{ $product->image }}' alt="Image"
                                        class="img-fluid mb-4 rounded"></a>
                                <div class="px-4 pb-5 pt-3">

                                    <h3><a href="single/{{ $product->id }}">{{ $product->name }}</a></h3>
                                    <p>{{ $product->breif }}</p>

                                    @php
                                        $totalsproduct = 0;
                                        $percant = 0;
                                    @endphp
                                    @foreach ($volanters as $volanter)
                                        @if ($volanter->product_id == $product->id)
                                            @php
                                                $totalsproduct += $volanter->amount;
                                            @endphp
                                            @php
                                                
                                                $percant = (int) (($totalsproduct / $product->total) * 100);
                                                
                                            @endphp
                                        @endif
                                    @endforeach

                                    <div class="progress mb-2">
                                        @if ($percant > 99)
                                            <div class="progress-bar" role="progressbar"
                                                style="width: <?php echo $percant; ?>%;" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100">
                                                completed</div>
                                    </div>
                    @endif
                    @if ($percant < 99)
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $percant; ?>%;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <?php echo $percant; ?>%</div>
                </div>
                @endif

                <div class="d-flex mb-4 justify-content-between amount">
                    <div>@php
                        echo "$" . $totalsproduct;
                    @endphp</div>

                    <div>${{ $product->total }}</div>
                </div>
                <div>
                    <a href='single/{{ $product->id }}' class="btn btn-primary">Volunteer Now</a>
                </div>
            </div>
        </div>

    </div>
    @endforeach





    </div>
    </div>
    </div>


    </div>





    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center justify-content-between">
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="0">
                    <span class="subheading mb-3">Who we are</span>
                    <h2 class="heading">About Us</h2>
                    <p>Discover CODE-MATES, where coding fuels education and generosity fuels change. Join our community
                        and be part of something bigger</p>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <blockquote>
                        At CODE-MATES, we blend the power of code with the spirit of giving to change lives. Join us in
                        shaping a brighter tech future.
                    </blockquote>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-5 pe-lg-5" data-aos="fade-up" data-aos-delay="200">

                    <ul class="nav nav-pills mb-5 custom-nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-mission-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-mission" type="button" role="tab"
                                aria-controls="pills-mission" aria-selected="true">Our Mission</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-values-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-values" type="button" role="tab"
                                aria-controls="pills-values" aria-selected="false">Our Values</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-history-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-history" type="button" role="tab"
                                aria-controls="pills-history" aria-selected="false">Our History</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-mission" role="tabpanel"
                            aria-labelledby="pills-mission-tab">
                            <h2 class="mb-3 text-primary fw-bold">Our Mission</h2>
                            <p>Our mission at CODE-MATES is to bridge the gap between technology, education,
                                and philanthropy. We aim to empower individuals by providing accessible coding education
                                while fostering a culture of giving. </p>
                            <p>Through our platform, we connect passionate volunteers
                                with those eager to support, creating a community that thrives on the dual principles of
                                knowledge-sharing and generosity. Together, we strive to make a lasting impact in the tech
                                world and beyond.</p>
                            <p class="mt-5">
                                <a href="#services" class="btn btn-primary me-4">Donate Now</a>
                                <a href="{{ route('about') }}" class="link-more">Learn More <span
                                        class="icon-chevron-right"></span></a>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="pills-values" role="tabpanel" aria-labelledby="pills-values-tab">
                            <h2 class="mb-3 text-primary fw-bold">Our Values</h2>
                            <p>Our core values revolve around the twin principles of knowledge-sharing and generosity.
                                We believe in the transformative power of education and its ability to open doors, and
                                we are equally committed to fostering a spirit of giving back.</p>
                            <p> We value inclusivity,
                                collaboration, and the belief that technology should be accessible to all. Our community
                                is built on trust, mutual support, and the idea that by uniting as one, we can make a
                                significant positive impact in the world.</p>
                            <p class="mt-5">
                                <a href="#services" class="btn btn-primary me-4">Be A Volunteer</a>
                                <a href="{{ route('about') }}" class="link-more">Learn More <span
                                        class="icon-chevron-right"></span></a>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="pills-history" role="tabpanel"
                            aria-labelledby="pills-history-tab">

                            <h2 class="mb-3 text-primary fw-bold">Our History</h2>
                            <p>CODE-MATES was born out of a vision to create a platform where technology enthusiasts
                                could come together to make a difference. Founded in 2020, our journey began
                                with a simple idea: to harness the power of coding education and philanthropy to transform
                                lives. </p>
                            <p>Since then, we've grown into a thriving community of volunteers and donors who have
                                collectively impacted countless individuals through coding education and charitable giving.
                                Our history is a testament to the belief that when passion and generosity combine,
                                remarkable
                                things happen. Join us as we continue to shape a brighter future for all.</p>
                            <p class="mt-5">
                                <a href="#services" class="btn btn-primary me-4">Be a Sponsor</a>
                                <a href="{{ route('about') }}" class="link-more">Learn More <span
                                        class="icon-chevron-right"></span></a>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="overlap-imgs">
                        <img src="images/communitie.png" alt="Image" class="img-fluid rounded" data-aos="fade-up"
                            data-aos="100">
                        {{-- <img src="images/img_v_3-min.jpg" alt="Image" class="img-fluid rounded"
                        data-aos="fade-up" data-aos="200"> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="section flip-section secondary-bg" style="background-image: url('images/classroom-1.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <span class="subheading-white mb-3 text-white" data-aos="fade-up">Help Now</span>
                    <h3 class="mb-4 heading text-white" data-aos="fade-up">Join us, volunteer, empower, thrive</h3>
                    <a href="#features-slider-mw" class="btn btn-outline-white me-3" data-aos="fade-up"
                        data-aos-delay="100">Become a Volunteer</a>

                    <a href="#" class="btn btn-outline-white" data-aos="fade-up" data-aos-delay="200">Donate
                        Now</a>
                </div>
            </div>
        </div>
    </div>


    <div class="section bg-light">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5" data-aos="fade-up">
                    <span class="subheading mb-3">Impact</span>
                    <h2 class="heading mb-4">Explore Volunteer work and Impact in 2023</h2>
                    <p>Discover the heart of our community as we invite you to explore volunteer opportunities that
                        have left an indelible mark in 2023. At CODE-MATES, we believe in the transformative
                        power of giving back, and this year has been no exception. </p>
                    <p>Our volunteers have dedicated
                        their time and expertise to empower individuals through coding education, leaving a
                        lasting impact on countless lives. Join us in celebrating their dedication and achievements,
                        and consider becoming a part of our volunteer network to continue the journey of making a
                        meaningful difference through code.</p>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="row section-counter">
                        <div class="col-lg-6">
                            <div class="counter">
                                <i class="flaticon-social-services d-block text-secondary"></i>

                                <span class="number countup">3</span>
                                <span class="d-block">New Causes</span>
                            </div>

                            <div class="counter">
                                <i class="flaticon-charity-money d-block text-secondary"></i>
                                @php
                                    $totals = 0;
                                @endphp
                                @foreach ($volanters as $volanter)
                                    @php
                                        $totals += $volanter->amount;
                                    @endphp
                                @endforeach
                                {{-- <span class="number countup">{{  $volanter->amount }} --}}
                                {{-- </span> --}}
                                <span class="number">$<span class="countup"><?php echo $totals; ?></span>k</span>
                                <span class="d-block">Fund Raised</span>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="counter mt-5">
                                <i class="flaticon-money-donation d-block text-secondary"></i>
                                <span class="number countup">2</span>
                                <span class="d-block">Donors</span>
                            </div>

                            <div class="counter">
                                <i class="flaticon-organs-donation d-block text-secondary"></i>
                                <span class="number countup">{{ count($volanters) }}</span>
                                <span class="d-block">Volunteers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section bg-light pt-0">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-5 mb-5" data-aos="fade-up">
                    <span class="subheading mb-1">News Update</span>
                    <h2 class="heading mb-1">Our News</h2>
                    <p>Stay updated with the latest happenings at CodeHeroes! Our news page is your
                        source for inspiring stories, course updates, and valuable insights in the world of tech education.
                    </p>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="causes-item bg-white">
                        <a href="{{ route('news') }}"><img src="{{ url('images/tech.jpg') }}" alt="Image"
                                class="img-fluid mb-4 rounded"></a>
                        <div class="px-4 pb-3 pt-3">
                            <span class="date">Sep 3, 2023</span>

                            <h3><a href="#">Upcoming Webinar: "Unlocking the World of AI"</a></h3>
                            <p> We're dedicated to providing valuable learning opportunities to our community, and we're
                                excited to announce our upcoming webinar.</p>

                            <p><a href="{{ route('news') }}" class="d-flex align-items-center more2"><span>Read
                                        More</span> <span class="icon-chevron-right"></span></a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="causes-item bg-white">
                        <a href="{{ route('news') }}"><img src="{{ url('images/kids.jpg') }}" alt="Image"
                                class="img-fluid mb-4 rounded"></a>
                        <div class="px-4 pb-3 pt-3">
                            <span class="date">jul 29, 2023</span>
                            <h3><a href="#">Making Learning Fun: Creative Ways to Teach Kids Coding</a></h3>
                            <p>In today's digital age, coding has become a crucial skill for children to learn. But teaching
                                kids to code doesn't have to be dull and intimidating.</p>

                            <p><a href="{{ route('news') }}" class="d-flex align-items-center more2"><span>Read
                                        More</span> <span class="icon-chevron-right"></span></a></p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="causes-item bg-white">
                        <a href="{{ route('news') }}"><img src="{{ url('images/communitie.png') }}" alt="Image"
                                class="img-fluid mb-4 rounded"></a>
                        <div class="px-4 pb-3 pt-3">
                            <span class="date">Aug 18, 2023</span>
                            <h3><a href="#">Empowering Communities</a></h3>
                            <p>Many of our learners come to CodeHeroes seeking new career opportunities. Through our coding
                                courses and mentorship programs, we equip them with valuable tech skills that are in high
                                demand.</p>
                            <p><a href="{{ route('news') }}" class="d-flex align-items-center more2"><span>Read
                                        More</span> <span class="icon-chevron-right"></span></a></p>

                        </div>
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
                        Partnerships fuel our mission at CodeHeroes. Together with like-minded organizations, we're
                        expanding access to tech education and building a brighter future through collaborative efforts.
                        Join us in making a global impact.</p>
                </div>
            </div>
        </div>

        <div class="instagram-slider-wrap" data-aos="fade-up" data-aos-delay="200">
            <div class="instagram-slider mb-2" id="instagram-slider">

                <div class="item">
                    <a class="instagram-item">
                        <span class="icon-instagram"></span>
                        <img src="{{ url('images/partnership4.jpg') }}" alt="Image" class="img-fluid"
                            style="border-radius: 50% ; height :40%">
                    </a>
                </div>

                <div class="item">
                    <a class="instagram-item">
                        <span class="icon-instagram"></span>
                        <img src="{{ url('images/img_v_8-min.jpg') }}" alt="Image" class="img-fluid"
                            style="border-radius: 50%">
                    </a>
                </div>


                <div class="item">
                    <a class="instagram-item">
                        <span class="icon-instagram"></span>
                        <img src="{{ url('images/partnership4.jpg') }}" alt="Image" class="img-fluid"
                            style="border-radius: 50% ; height :40%">
                    </a>
                </div>

                <div class="item">
                    <a class="instagram-item">
                        <span class="icon-instagram"></span>
                        <img src="{{ url('images/img_v_4-min.jpg') }}" alt="Image" class="img-fluid"
                            style="border-radius: 50%">
                    </a>
                </div>

                <div class="item">
                    <a class="instagram-item">
                        <span class="icon-instagram"></span>
                        <img src="{{ url('images/img_v_5-min.jpg') }}" alt="Image" class="img-fluid"
                            style="border-radius: 50%">
                    </a>
                </div>

                <div class="item">
                    <a class="instagram-item">
                        <span class="icon-instagram"></span>
                        <img src="{{ url('images/partnership5.jpg') }}" alt="Image" class="img-fluid"
                            style="border-radius: 50% ; height :40%">
                    </a>
                </div>


            </div>
        </div>
        <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js') }}"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </div>
@endsection
