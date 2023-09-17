@extends('layouts.master')



@section('title', 'donation')


@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        h1 {
            text-align: center;
            padding: 20px 0 0 0
        }

        .form-group{
          width: 80%;
          margin: auto
        }

        .form-group label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-primary:focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
        }

        #submit {
            margin-bottom: 20px;
            margin-left: 37%;
            width: 200px;
            margin-top: 20px;


        }

        label {
            margin-left: 10px;
        }

        #formdiv {
            width: 70%;
            margin: auto;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
        }
    </style>
    </head>

    <body>

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close">
                    <span class="icofont-close js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <div class="heros overlays" style="background-image: url('images/about.jpg')">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h1 class="heading text-white mb-2" data-aos="fade-up">Donation</h1>
                        <p data-aos="fade-up" class=" mb-5 text-white lead text-white-40">Home / Donation</p>


                    </div>


                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div id="formdiv">
                <h1>Donation Form</h1>
                <br>
                <form action="{{ route('donors.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        {{-- <div>
                    <label for="firstName">Name : </label>
                    <label for="firstName">{{Auth::user()->name}}</label>
                </div>

                <div>
                    <label for="email">Email : </label>
                    <label for="email">{{Auth::user()->email}}</label>
                </div>




                <div>
                    <label for="phoneNumber">Phone Number</label>
                    <label for="phoneNumber">{{Auth::user()->phone}}</label>
                </div> --}}
                        <div class="form-group ">
                            <input type="hidden" class="form-control" id="user_id" name="user_id" required>

                            <label for="service">Service</label>
                            <input type="text" class="form-control" id="service" name="service">



                        </div>
                        <div class="form-group ">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Leave us a message</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>

                    <button id="submit" type="submit" class="btn btn-primary" value="submit">Submit</button>
                </form>
            </div>
        </div>

        @endsection

