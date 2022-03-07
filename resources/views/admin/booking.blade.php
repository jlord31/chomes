@extends('admin.master')
@section('content')

    <main class="app-content">
        <div class="app-title">
        <div>
            <h1><i class="fa fa-book"></i> Booking Page</h1> 
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="fa fa-home fa-lg"></i></a></li> 
            <li class="breadcrumb-item">Booking page</li>
        </ul>
        </div> 


        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="BookingTable">
                        <thead>
                            <tr>
                            <th>Sr</th>
                            <th>Date time </th>
                            <th> Apartment Id </th>
                            <th> User Id  </th>
                            <th> Full Name </th>
                            <th>Email</th>
                            <th> Contact </th>
                            <th> Occupant </th>
                            <th> Message </th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($booking as $book)
                                <td>{{$loop->iteration}}</td>
                                <td> {{$book->created_at}} </td>
                                <td> {{$book->apartment_id}} </td>
                                <td> {{$book->user_id}} </td>
                                <td> {{$book->fullname}} </td>
                                <td> {{$book->email}} </td> 
                                <td> {{$book->contact}} </td>
                                <td> {{$book->occupant}} </td>
                                <td> {{$book->message}} </td> 
                            @endforeach
                             

                        </tbody>

                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>

    </main>

    

@endsection