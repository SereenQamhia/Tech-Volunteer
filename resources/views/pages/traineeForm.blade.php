@extends('layouts.ahmadmaster')


@section('title', 'trainee form')

@section('content')

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
                    <h1 class="heading text-white mb-2" data-aos="fade-up"> Training </h1>
                    <p data-aos="fade-up" class=" mb-5 text-white lead text-white-40">Home / Training </p>


                </div>


            </div>
        </div>
    </div>

    <link rel="stylesheet" href="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}">
    <style>
        h1 {
            text-align: center;
            padding: 20px 0 0 0 ;
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
            margin-top: 30px

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

        label {
            margin-left: 10px;
        }
    </style>
    <div class="container mt-5">
        <div id="formdiv">
            <h1>Trainee Form</h1>
            <br>
            <form action="{{ route('trainees.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')


                <div class="form-group">
                    <input type="hidden" class="form-control" id="user_id" name="user_id" required>

                    <label for="personal_details">1- Tell us about yourself</label>
                    <textarea class="form-control" id="personal_details" name="personal_details" rows="3" required></textarea>


                </div>

                <div class="form-group">
                    <label for="about_codemates">2- What do you know about CodeMates ?</label>
                    <textarea class="form-control" id="about_codemates" name="about_codemates" rows="3" required></textarea>

                </div>
                <div class="form-group">
                    <label for="interested_codemates">3- Why are you interested in joining CodeMates ?</label>
                    <textarea class="form-control" id="interested_codemates" name="interested_codemates" rows="3" required></textarea>

                </div>

                <div class="form-group">
                    <label for="Languages_learned">4- Have you ever learned any programming Languages before ?</label>
                    <textarea class="form-control" id="iLanguages_learned" name="Languages_learned" rows="3" required></textarea>

                </div>
                <div class="form-group">
                    <label for="hope">5- What do you hope to get out of this training ?</label>
                    <textarea class="form-control" id="hope" name="hope" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="years_answer">6- Where do you see yourself in 5 years ?</label>
                    <textarea class="form-control" id="years_answer" name="years_answer" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="About">7- How did you hear about us ?</label><br>
                    <input type="checkbox" id="facebook" name="About[]" value="facebook" class="check">
                    <label for="facebook">Facebook</label><br>
                    <input type="checkbox" id="instagram" name="About[]" value="instagram" class="check">
                    <label for="instagram">Instagram</label><br>
                    <input type="checkbox" id="twitter" name="About[]" value="twitter" class="check">
                    <label for="twitter">Twitter</label><br>
                    <input type="checkbox" id="linkedIn" name="About[]" value="linkedIn" class="check">
                    <label for="linkedIn">LinkedIn</label><br>
                    <input type="checkbox" id="friend" name="About[]" value="friend" class="check">
                    <label for="friend">Friend</label><br>
                </div>
                <div class="form-group">
                    <label for="warning">Clarification on Training Eligibility</label><br>
                    <label for="warning"><small>While we are truly grateful for your eagerness to contribute, it's
                            important to note that this specific training program is designed exclusively for individuals
                            facing financial hardships. As such, we kindly ask that those who do not meet this criterion
                            refrain from applying at this time.</small></label>
                </div>
                <div class="form-group">
                    <label for="document">If you have any verification document indicating your need for this training,
                        kindly upload it here. </label>
                    <input type="file" class="form-control-file" id="document" name="document" required>
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

