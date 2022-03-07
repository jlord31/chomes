@extends('admin.master')
@section('content')

    <main class="app-content">
        <div class="app-title">
        <div>
            <h1><i class="fa fa-home"></i> Apartment Page</h1> 
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="fa fa-home fa-lg"></i></a></li> 
            <li class="breadcrumb-item">Apartment page</li>
        </ul>
        </div> 


        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-head">
                    <h4> All Apartments </h4>
                </div>
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr> 
                                <th> Apartment Id </th>
                                <th> Image </th> 
                                <th> User Id  </th>
                                <th> Title  </th>
                                <th>Location</th>
                                <th> Bedroom </th>
                                <th> Bathroom </th>
                                <th> Price </th> 
                                <th> Deposit </th>
                                <th> Type </th>
                                <th> Details </th> 
                                <th> Approval </th>
                                <th> Status </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody> 
                            @foreach ($apartment as $app)
                                <tr id="tid{{$app->id}}"> 
                                    <td> {{$app->id}} </td>
                                    <td><img style="width: 70px; height:70px" src="/uploads/{{$app->image}}" alt="Menu Image"></td>  
                                    <td> {{$app->user_id}} </td>
                                    <td> {{$app->title}} </td>
                                    <td> {{$app->location}} </td> 
                                    <td> {{$app->bedroom}} </td>
                                    <td> {{$app->bathroom}} </td>
                                    <td> {{$app->price}} </td>  
                                    <td> {{$app->deposit}} </td> 
                                    <td> {{$app->type}} </td>
                                    <td> {{$app->details}} </td>
                                    <td> 
                                        @switch($app->approval)
                                            @case('Unapproved')
                                                <span class="badge badge-danger">{{$app->approval}}</span>
                                                @break
                                            @case('Approved')
                                                <span class="badge badge-success">{{$app->approval}}</span>
                                                @break 

                                            @default
                                            <span class="badge badge-warning">Undefined</span>
                                        @endswitch    
                                    </td> 
                                    <td>  
                                        @switch($app->status)
                                            @case('Avaliable')
                                                <span class="badge badge-secondary">{{$app->status}}</span>
                                                @break
                                            @case('Rented')
                                                <span class="badge badge-success">{{$app->status}}</span>
                                                @break
                                            @case('Sold')
                                                <span class="badge badge-info">{{$app->status}}</span>
                                                @break

                                            @default
                                            <span class="badge badge-warning">Undefined</span>
                                        @endswitch   
                                    </td> 
                                        
                                    <td class="justify-content-between">
                                        <a class="btn btn-info btn-sm" onclick="updateApproval({{$app->id}})" data-toggle="modal" data-target="#modal-approval" >
                                            <i class="fa fa-thumbs-o-up">
                                            </i>
                                        </a>
                                        {{-- <br /> --}}
                                        <a class="btn btn-success btn-sm" onclick="updateStatus({{$app->id}})" data-toggle="modal" data-target="#modal-status" >
                                            <i class="fa fa-pencil-square-o">
                                            </i>
                                        </a> 
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

    {{-- modal approval start --}}
    <div class="bs-example">
        <div id="modal-approval" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content"> 
                    <div class="modal-body">
                        <div class="dropdown center-content"> 

                            <p class="text-center modal-title">Update Apartment Approval</p>
                            <form id="modalForm">
                                @csrf
                                <input type="hidden" name="aid" id="aid">
                                <select class="form-control" name="aapt" id="aapt">
                                    <option default disabled="true">Select</option>
                                    <option >Approved</option>
                                    <option >Unapproved</option> 
                                </select>
                            </form> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" onclick="saveApproval()" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- modal approval end --}}


    {{-- modal status start --}}
    <div class="bs-example">
        <div id="modal-status" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content"> 
                    <div class="modal-body">
                        <div class="dropdown center-content"> 

                            <p class="text-center modal-title">Update Apartment Status</p>
                            <form id="modalForm2">
                                @csrf
                                <input type="hidden" name="sid" id="sid">
                                <select class="form-control" name="sapt" id="sapt">
                                    <option default disabled="true">Select</option>
                                    <option >Avaliable</option>
                                    <option >Sold</option> 
                                    <option >Rented</option> 
                                </select>
                            </form> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" onclick="saveStatus()" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- modal status end --}}


    <script>
        function updateApproval(id)
        {
            $('#aid').val(id);
        }

        function updateStatus(id)
        {
            $('#sid').val(id);
        }

        function saveApproval() 
        {
            let aid = $("#aid").val();
            let aapt = $("#aapt").val();
            let _token = $("input[name=_token]").val();
 

            $.ajax({
                url:"{{route('apartment.approve')}}",
                type:"POST",
                data:{
                        aid:aid,
                        aapt:aapt,
                        _token:_token
                },
                success:function(response) {
 
                    $('#tid' + response.id +' td:nth-child(1)').text(response.id);
                    $('#tid' + response.id +' td:nth-child(3)').text(response.user_id);
                    $('#tid' + response.id +' td:nth-child(4)').text(response.title);
                    $('#tid' + response.id +' td:nth-child(5)').text(response.location);
                    $('#tid' + response.id +' td:nth-child(6)').text(response.bedroom);
                    $('#tid' + response.id +' td:nth-child(7)').text(response.bathroom);
                    $('#tid' + response.id +' td:nth-child(8)').text(response.price); 
                    $('#tid' + response.id +' td:nth-child(9)').text(response.deposit);
                    $('#tid' + response.id +' td:nth-child(10)').text(response.type);
                    $('#tid' + response.id +' td:nth-child(11)').text(response.details);
  
                    switch (response.approval) 
                    {
                         
                        case 'Unapproved':
                            $('#tid' + response.id +' td:nth-child(12) span').text(response.approval).addClass('badge badge-danger'); 
                        break; 

                        case 'Approved':
                            $('#tid' + response.id +' td:nth-child(12) span').text(response.approval).addClass('badge badge-success'); 
                        break;  

                        default:
                            $('#tid' + response.id +' td:nth-child(12) span').text('Undefined').addClass('badge badge-warning'); 
                        break;
                    }
 
                    switch (response.status) {
 
                        case 'Avaliable':
                            $('#tid' + response.id +' td:nth-child(13) span').text(response.status).addClass('badge badge-secondary'); 
                        break;

                        case 'Sold':
                            $('#tid' + response.id +' td:nth-child(13) span').text(response.status).addClass('badge badge-info'); 
                        break;

                        case 'Rented':
                            $('#tid' + response.id +' td:nth-child(13) span').text(response.status).addClass('badge bg-success'); 
                        break;

                        default:
                            $('#tid' + response.id +' td:nth-child(13) span').text('Undefined').addClass('badge badge-warning'); 
                        break;
                    }
 

                    $("#modal-approval").modal('hide');
                    $("#modalForm")[0].reset();
                }
            });
        }

        function saveStatus() 
        {
            let sid = $("#sid").val();
            let sapt = $("#sapt").val();
            let _token = $("input[name=_token]").val();
 

            $.ajax({
                url:"{{route('apartment.status')}}",
                type:"POST",
                data:{
                        sid:sid,
                        sapt:sapt,
                        _token:_token
                },
                success:function(response) {
 
                    $('#tid' + response.id +' td:nth-child(1)').text(response.id);
                    $('#tid' + response.id +' td:nth-child(3)').text(response.user_id);
                    $('#tid' + response.id +' td:nth-child(4)').text(response.title);
                    $('#tid' + response.id +' td:nth-child(5)').text(response.location);
                    $('#tid' + response.id +' td:nth-child(6)').text(response.bedroom);
                    $('#tid' + response.id +' td:nth-child(7)').text(response.bathroom);
                    $('#tid' + response.id +' td:nth-child(8)').text(response.price); 
                    $('#tid' + response.id +' td:nth-child(9)').text(response.deposit);
                    $('#tid' + response.id +' td:nth-child(10)').text(response.type);
                    $('#tid' + response.id +' td:nth-child(11)').text(response.details);

                    switch (response.approval) {
                         
                        case 'Unapproved':
                            $('#tid' + response.id +' td:nth-child(12) span').text(response.approval).addClass('badge badge-danger'); 
                        break; 

                        case 'Approved':
                            $('#tid' + response.id +' td:nth-child(12) span').text(response.approval).addClass('badge badge-success'); 
                        break;  

                        default:
                            $('#tid' + response.id +' td:nth-child(12) span').text('Undefined').addClass('badge badge-warning'); 
                        break;
                    }
 
                    switch (response.status) {
 
                        case 'Avaliable':
                            $('#tid' + response.id +' td:nth-child(13) span').addClass('badge badge-secondary').text(response.status); 
                        break;

                        case 'Sold':
                            $('#tid' + response.id +' td:nth-child(13) span').addClass('badge badge-info').text(response.status); 
                        break;

                        case 'Rented':
                            $('#tid' + response.id +' td:nth-child(13) span').addClass('badge badge-success').text(response.status); 
                        break;

                        default:
                            $('#tid' + response.id +' td:nth-child(13) span').addClass('badge badge-warning').text('Undefined'); 
                        break;
                    }
 

                    $("#modal-status").modal('hide');
                    $("#modalForm2")[0].reset();
                }
            });
        }

    </script>

@endsection