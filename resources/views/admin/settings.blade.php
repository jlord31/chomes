@extends('admin.master')
@section('content')

    <main class="app-content">
      <div class="row user"> 
         
        <div class="col-md-12"> 
          <div class="tile user-settings">
            <h4 class="line-head">Settings</h4>
            <form method="POST" action="/admin/saveSettings" >
                @csrf
              <div class="row mb-4">
                <div class="col-md-4">
                  <label>Full Name</label> 
                  <input class="form-control" id="name" name="name" value="{{ $auth->name }}" type="text">
                </div>
                 
              </div>
              <div class="row">
                <div class="col-md-8 mb-4">
                  <label>Email</label> 
                  <input class="form-control" id="email" name="email" value="{{ $auth->email }}" type="email">
                </div>
                <div class="clearfix"></div>
                <div class="col-md-8 mb-4">
                  <label>Password</label>
                  <input class="form-control" id="password" name="password" type="password">
                  <p>leave empty if you do not wish to update password</p>
                </div> 
              </div>
              <div class="row mb-10">
                <div class="col-md-12">
                  <button class="btn btn-primary" id="save_settings" name="save_settings"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                </div>
              </div>
            </form>
          </div> 
        </div>
      </div>
    </main>

@endsection