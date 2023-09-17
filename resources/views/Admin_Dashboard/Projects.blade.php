@extends('layouts.adminMaster')

@section('content')
<div class="content " >
<div style="margin: 0% 6% ">
    <div style="width: 100%" > 
<br><br>
        <h1 class="mx-auto"> Manage Your Project </h1>  <a href="Project_Create"><button class="btn btn-success" type="submit" style="position:absolute ; right :5%"> + Add Project</button>
        </a> <br><br>
      
        <table class="table table-hover">
          <thead style="background-color: rgba(117, 192, 157, 0.489) ">
             <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Breif</th>
                        <th>Description</th>
                        <th>Details</th>
                        <th>Location</th>
                        <th>Time</th>
                        <th>Period</th>
                        <th>Total</th>
                        <th>Image</th>
                        <th style="text-align: center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr class="custom-element">
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['name'] }}</td>
                        {{-- <td>{{ $product['breif'] }}</td> --}}
                        <td>
                          {!! Illuminate\Support\Str::limit($product['breif'], 20) !!}
                          @if (str_word_count($product['breif']) > 20)
                              <a href="{{ url()->current() . '?page=more' }}"></a>
                          @endif
                      </td>
                        <td>
                          {!! Illuminate\Support\Str::limit($product['description2'], 20) !!}
                          @if (str_word_count($product['description2']) > 20)
                              <a href="{{ url()->current() . '?page=more' }}"></a>
                          @endif
                      </td>
                      <td>
                        {!! Illuminate\Support\Str::limit($product['description3'], 20) !!}
                        @if (str_word_count($product['description3']) > 20)
                            <a href="{{ url()->current() . '?page=more' }}"></a>
                        @endif
                    </td>
                        {{-- <td>{{ $product['description3'] }}</td> --}}
                        <td>{{ $product['location'] }}</td>
                        <td>{{ $product['time'] }}</td>
                        {{-- <td>{{ $product['period'] }}</td> --}}
                        <td>
                          {!! Illuminate\Support\Str::limit($product['period'], 10) !!}
                          @if (str_word_count($product['period']) > 10)
                              <a href="{{ url()->current() . '?page=more' }}"></a>
                          @endif
                      </td>
                        <td>{{ $product['total'] }}</td>
                        <td>
                          {{-- <img src="{{ $product->image }}" class="card-img" style="width: 100px" alt="{{ $product->name }}"> --}}
                          
                          <div >
                            @if ($product->image)
                                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}"
                                    width="80" height="80">
                            @endif
                        </div>
                        </td>  
                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                    <form action="productdelete/{{$product['id'] }}" method="POST" style="margin-bottom: 2px">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn fa fa-trash text-danger fa-lg show_confirm"  type="submit" value="DELETE" ></button>
                                    </form >                   
                                </div>
                                
                                <div class="col-md-4">
                                    <form action="productedit/{{ $product['id'] }}" method="" style="margin-bottom: 2px">
                                        @csrf
                                        <button class="btn fa-regular fa-pen-to-square text-warning fa-lg" type="submit" value="Update" ></button>
                                    </form>  
                                </div>
                                
                                <div class="col-md-4">
                                    <form action="productview/{{ $product['id'] }}" method="" style="margin-bottom: 2px">
                                        @csrf
                                        <button class="btn  far fa-eye text-primary fa-lg" type="submit" value="Update" ></button>
                                    </form> 
                                </div>
                            </div>
                                            
                            
                     
                  


                    </td>
                     @endforeach   
                </tbody>
            </table>
        </div>
        </div>
        </div>
 @endsection

 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
        var deleteButtons = document.querySelectorAll('.show_confirm');

        deleteButtons.forEach(function (button) {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                var form = button.closest("form");

                swal({
                    title: "Are you sure you want to delete this record?",
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then(function (willDelete) {
                    if (willDelete) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>
