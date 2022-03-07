@extends('admin.master')
@section('content')

    <main class="app-content">
        <div class="app-title">
        <div>
            <h1><i class="fa fa-users"></i> User's Page</h1> 
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="fa fa-home fa-lg"></i></a></li> 
            <li class="breadcrumb-item">User's page</li>
        </ul>
        </div> 


        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                      <thead>
                        <tr>
                          <th>Sr</th>
                          <th>User Id</th>
                          <th> Name </th>
                          <th> Email </th>
                          <th> User Type </th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($users as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td> 
                                <td>{{$user->id}}</td> 
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td> 
                                <td>
                                    @switch($user->role_id)
                                        @case('agent')
                                            <span class="badge bg-info">{{$user->role_id}}</span>
                                            @break
                                        @case('user')
                                            <span class="badge bg-success">{{$user->role_id}}</span>
                                            @break 

                                        @default
                                        <span class="badge bg-danger">Undefined</span>
                                    @endswitch

                                </td>
                                <td>
                                    <a class="badge badge-danger mdi mdi-wrench" href="/admin/deleteUser/{{$user->id}}"><i class="fa fa-trash"></i> Delete </a>
                                </td>
                            </tr>
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