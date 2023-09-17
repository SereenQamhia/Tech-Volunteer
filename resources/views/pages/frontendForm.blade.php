@extends('layouts.master')


@section('title', 'front-form')


<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

@section('content')



    <link rel="stylesheet" href="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}">
    <style>
        h1 {
            text-align: center;
            padding: 20px 0;
        }

        .form-group{
          width: 80%;
          margin: auto;
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

        @media (max-width: 425px) {
            #submit {
                margin-left: 14% !important;
            }
        }

        #formdiv {
            width: 70%;
            margin: auto;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
        }

        label,
        .check {
            margin-left: 10px;
        }
    </style>

    <div class="heros overlays" style="background-image: url('images/about.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1 class="heading text-white mb-2" data-aos="fade-up">  Volunteer </h1>
                    <p data-aos="fade-up" class=" mb-5 text-white lead text-white-40">{{$language->name}} / Volunteer </p>


                </div>


            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div id="formdiv">
        <h1> Training Volunteer Form</h1>
        <br>
        <form action='form/{{Auth::user()->id}}' method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            

            <div class="form-group">
                <input type="hidden" class="form-control" id="user_id" name="user_id" required>

                <label for="address">Address :</label>
                <input type="text" class="form-control" id="address" name="Address" required>




            </div>
            <div class="form-group">
               <label for="address">Bootcamp : </label>
               <p> {{$language->name}}</p>
                <input type="text" class="form-control" value="{{$language->name}}" id="address" name="Languages" required hidden>
            </div>
            
            <div class="form-group">
                <label for="day">I would like to help weekly</label>
                <select class="form-control" id="day" name="day">
                    <option value="Choose Day">Choose Day</option>
                    <option value="saturday">Saturday</option>
                    <option value="sunday">Sunday</option>
                    <option value="monday">Monday</option>
                    <option value="tuesday">Tuesday</option>
                    <option value="wednesday">Wednesday</option>
                    <option value="thursday">Thursday</option>

                </div>
                
                
                <div class="form-group">
                    <label for="experience">Experience</label>
                    <textarea class="form-control" id="experience" name="Experience" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="cv">CV</label>
                    <input type="file" class="form-control-file" id="cv" name="CV" required>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <button id="submit" type="submit" class="btn btn-primary  " value="submit">Submit</button>
            </form>
        </div>
    </div>





    @endsection
