@extends('admin.master')
@section('content')

    <main class="app-content">
        <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> Category Page</h1> 
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="fa fa-home fa-lg"></i></a></li> 
            <li class="breadcrumb-item">Category page</li>
        </ul>
        </div> 

        <div class="row">
        <div class="col-md-6">
            <div class="tile">
            <h3 class="tile-title">Add category Form</h3>
            <div class="tile-body">
                <form method="POST" action="addCategory">
                    @csrf
                <div class="form-group">
                    <label class="control-label"> category name </label>
                    <input class="form-control" name="name" required type="text" placeholder="Enter category name">
                </div>

            </div>
            <div class="tile-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-secondary" type="reset"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</button>
            </div>
            </form>
            </div>
        </div>
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
                          <th>Category Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($category as $cat)
                            <tr>
                                <td>{{$loop->iteration}}</td> 
                                <td> {{$cat->name}} </td>
                                <td>
                                    <a class="badge badge-danger mdi mdi-wrench" href="/admin/deleteCategory/{{$cat->id}}"><i class="fa fa-trash"></i> Delete </a>
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

