


                                <form action="{{ route('frontvolunteers.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('post')                                     <div class="form-group">
                                        <input  type="hidden" class="form-control" id="user_id"  name="user_id" required>

                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="Address" required>


                                    </div>
                                    <div class="form-group">
                                        <label for="programmingLanguages">Proficient Programming Classes</label>
                                        <select class="form-control" id="programmingLanguages" name="Languages" >
                                            <option value="Choose Language">Choose Class</option>
                                            <option value="FrontEnd">FrontEnd</option>
                                            <option value="BackEnd">BackEnd</option>
                                            <option value="javascript">UX/UI</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="day">I would like to help weekly</label>
                                        <select class="form-control" id="day" name="day" >
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

                                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                                </form>



                                                   <form action="paypal" method="POST" class=" p-5 rounded donation-form" data-aos="fade-up">
                        @csrf
                        <h3 > Donation Form</h3>
                        </div>
                        <div class="field-icon">
                            <span>$</span>
                            <input type="text" placeholder="0.00" id="cont" class="form-control px-4" name="price"
                                value="1.00">
    </div>
                            @if(!Auth::check())

<a href="{{ route('login') }}" class="btn btn-primary w-100" style="color: white ; background-color : #54ac75">Paypal</a>

                            @endif
                            @if(Auth::check())
                            <input type="submit" value="Paypal" class="btn btn-primary w-100" style="color: white ; background-color : #54ac75">


  @endif





                        </form>


                        <form action="stripe/{{$id}}" class="  rounded donation-form" method="post" style="padding: 0px 50px">
                            @csrf
                                                    <h3 for="" style=" margin:0;    font-weight: bold;
                                margin-bottom: 0px;
                                text-transform: uppercase;
                                font-size: 18px;">Or donate by Visa</h3> <br>

 <input type="text" placeholder="0.00" class="form-control px-4" name="price" value="{{ old('price') }}" required>

 @if(!Auth::check())
<a href="{{ route('login') }}" class="btn btn-primary w-100" style="color: white ; background-color : #54ac75">Visa</a>


                            @endif
                            @if(Auth::check())
 <input type="submit" value="visa" class="btn btn-primary w-100" style="color: white ; background-color : #54ac75"  >



  @endif
                                                </form>

                </div>
