@extends('admin.master')
@section('content')

    <main class="app-content">
        <div class="app-title">
        <div>
            <h1><i class="fa fa-image"></i> Galleries Page</h1> 
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="fa fa-home fa-lg"></i></a></li> 
            <li class="breadcrumb-item">Galleries page</li>
        </ul>
        </div> 

        <div class="row">
        <div class="col-md-6">
            <div class="tile">
            <h3 class="tile-title">Add Gallery Form</h3>
            <div class="tile-body">
                <form method="POST" action="uploadGallery" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                    <label class="control-label"> Upload Image </label>
                    <input class="form-control" name="image" type="file">
                </div>

            </div>
            <div class="tile-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>upload</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-secondary" type="reset"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</button>
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
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($gallery as $gallery)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img style="width: 70px; height:70px" src="/uploads/{{$gallery->name}}" alt="Menu Image"></td>
                                <td>
                                    <a class="badge badge-danger mdi mdi-wrench" href="/admin/deleteGallery/{{$gallery->id}}"><i class="fa fa-trash"></i> Delete </a>
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

