<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">

    <title> Admin  </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('resource/css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	{{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> --}}

    <link rel="stylesheet" type="text/css" href="{{ asset('resource/toastr/toastr.min.css') }}">
  </head>
  <body class="app sidebar-mini">

    <header class="app-header"><a class="app-header__logo" href="/admin/dashboard">Admin</a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">

            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="{{ url('/admin/settings') }}"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                <li><a class="dropdown-item" href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
            </ul>
            </li>
        </ul>
    </header>
    @include('admin.nav')
    @yield('content')

    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('resource/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('resource/js/popper.min.js') }}"></script>
    <script src="{{ asset('resource/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('resource/js/main.js') }}"></script>

    <script src="{{ asset('resource/toastr/toastr.min.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('resource/js/plugins/pace.min.js') }}"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{ asset('resource/js/plugins/chart.js') }}"></script>

    <!-- Data table plugin-->
    <script type="text/javascript" src="{{ asset('resource/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resource/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script type="text/javascript">$('#BookingTable').DataTable();</script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}
    {{--  --}} 
     @if(Session::has('success'))
        <script>
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            toastr.success("{!! Session::get('success') !!}");
        </script>
    @endif

    {{-- @if(Session::has('error'))
        <script>
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            @foreach ($errors->all() as $error)
                toastr.error("{!! Session::get('error') !!}");
            @endforeach

        </script>
    @endif --}}


    @if (count($errors) > 0)
        <script>

            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach

        </script>
    @endif



</body>
</html>
