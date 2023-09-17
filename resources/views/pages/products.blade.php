@extends('layouts.master')


@section('title', 'products')





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
                    <h1 class="heading text-white mb-2" data-aos="fade-up">Bootcamps</h1>
                    <p data-aos="fade-up" class=" mb-5 text-white lead text-white-40">Home / Bootcamps</p>

                    <p data-aos="fade-up" class=" mb-5 text-white lead text-white-40">Teaching is the noble art of fostering growth through knowledge, curiosity, and empowerment.</p>

                </div>


            </div>
        </div>
    </div>


   



<div class="section cause-section bg-light" id="services">

        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <span class="subheading mb-3">Bootcamps</span>
                    <h2 class="heading">Bootcamps</h2>
                    <p>Explore our Bootcamps and witness the impact of code and compassion in action.</p>

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







@endsection
