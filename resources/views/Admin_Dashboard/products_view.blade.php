@extends('layouts.adminMaster')

@section('content')

<div class="content " >

<div style="margin: 0% 8% ">
<div style="width: 100%">
<br><br>



    <div class="container">
        <div class="card">
                        <div class="card-body">
                            @if ($products->image)
                            <img src="{{ asset('images/' . $products->image) }}" alt="{{ $products->name }}"
                                width="1000">
                        @endif                           <br><br> <h3 class="card-title"> {{ $products->name }}</h3>
                            <div class="mb-3"> <br>
                              <h5>Brief:</h5>
                                <p class="card-text">{{ $products->breif}}</p>
                            </div>
                            <div class="mb-3">
                              <h5>Description:</h5>
                                <p class="card-text">{{ $products->description2 }}</p>
                            </div>
                            <div class="mb-3">
                                <h5>Details:</h5>
                                <p class="card-text">{{ $products->description3 }}</p>
                            </div>
                            <div class="mb-3">
                              <h5>Period:</h5>
                                <p class="card-text">{{ $products->period }}</p>
                            </div>
                            <div class="mb-3">
                               <h5>Location:</h5>
                                <p class="card-text">{{ $products->location }}</p>
                            </div>
                            <div class="mb-3">
                               <h5>Time:</h5>
                                <p class="card-text">{{ $products->time }}</p>
                            </div>
                            <div class="mb-3">
                               <h5>Total:</h5>
                                <p class="card-text">{{ $products->total }}</p>
                            </div>
                            <!-- Add other product details as needed -->
                        </div>
                    </div>
                </div>

                <!-- Add other product details as needed -->
            </div>
        </div>
    </div>
</div>
</div>
@endsection
