@extends('layouts.adminMaster')

@section('content')

<div class="content " >
    <div style="margin: 0% 8%">
      <div style="width: 100%" > 
    <br><br>
            <h1 class="mx-auto"> Donations Data </h1>
            <br>
            <table class="table table-hover">
                <thead style="background-color: rgba(117, 192, 157, 0.489)">
                    <tr>
                        <th>Payment ID</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Transaction Amount</th>
                        <th>Payment status</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($paypals as $paypal)
                        <tr>
                            <td>{{ $paypal['id'] }}</td>
                            <td>{{ $paypal['user_name'] }}</td>
                            <td>{{ $paypal['user_email'] }}</td>
                            <td>{{ $paypal['amount'] }}</td>
                            <td>{{ $paypal['payment_status'] }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection