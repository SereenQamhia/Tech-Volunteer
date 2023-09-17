@include('layouts.nav')



@section('content')



    <link rel="stylesheet" href="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/Python/bootstrap.min.Python') }}">
    <style>
        h1 {
            text-align: center;
            margin-top: 120px;
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

        #submit{
            margin-bottom: 20px;
            margin-left: 37%;
            width: 200px;

        }
        @media (max-width: 425px) {
            #submit{
            margin-left: 14% !important ;
        }
        }
        #formdiv{
            width: 70%;
            margin: auto;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            margin-bottom: 10px;
        }
        label , .check{
            margin-left: 10px;
        }
       
    </style>
    <div class="container mt-5">
        <div id="formdiv">
        <h1>Frontend Training Volunteer Form</h1>
        <br>
        <form action="{{ route('frontvolunteers.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            

            <div class="form-group">
                <input type="hidden" class="form-control" id="user_id" name="user_id" required>

                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="Address" required>


            </div>
            <div class="form-group">
                <label for="programmingLanguages">Proficient Frontend Programming Languages</label><br>
                <input type="checkbox" id="Java" name="Languages[]" value="Java" class="check">
                <label for="Java">Java</label><br>
                <input type="checkbox" id="Python" name="Languages[]" value="Python" class="check">
                <label for="Python">Python</label><br>
                <input type="checkbox" id="Ruby" name="Languages[]" value="Ruby" class="check">
                <label for="Ruby">Ruby</label><br>
                <input type="checkbox" id="Node.js" name="Languages[]" value="Node.js" class="check">
                <label for="Node.js">Node.js</label><br>
                <input type="checkbox" id="PHP" name="Languages[]" value="PHP" class="check">
                <label for="PHP">PHP</label><br>
                <input type="checkbox" id="C#" name="Languages[]" value="C#" class="check">
                <label for="C#">C#</label><br>
                <input type="checkbox" id="Go(Golang)" name="Languages[]" value="Go(Golang)" class="check">
                <label for="Go(Golang)">Go (Golang)</label><br>
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

                </select>
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





    @include('layouts.footer')
