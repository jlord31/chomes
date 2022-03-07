
@php

   function activeMenu($uri = ''){
        $active = '';
        if (Request::is(Request::segment(1) .'/'. $uri . '/*') || Request::is(Request::segment(1) . '/' . $uri) || Request::is($uri)) {
            $active = 'active';
        }
        return $active;
    }

@endphp

<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <ul class="app-menu">
    <li><a class="app-menu__item {{ activeMenu('dashboard') }} {{ activeMenu('home') }}" href="/admin/dashboard"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
    <li><a class="app-menu__item {{ activeMenu('users') }}" href="/admin/users"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Users</span></a></li>
    <li><a class="app-menu__item {{ activeMenu('booking') }}" href="/admin/booking" ><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Bookings</span> </a> </li>
    <li><a class="app-menu__item {{ activeMenu('category') }}" href="/admin/category"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Categories</span> </a>  </li>
    <li><a class="app-menu__item {{ activeMenu('gallery') }}" href="/admin/gallery"><i class="app-menu__icon fa fa-image"></i><span class="app-menu__label">Gallery</span> </a> </li>
    <li><a class="app-menu__item {{ activeMenu('apartment') }}" href="/admin/apartment"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Apartment</span></a></li>
  </ul>
</aside>
