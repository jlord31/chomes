<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Gallery;
use App\Models\user;
use App\Models\Role;
use App\Models\Category;
use App\Models\Apartment;
use App\Models\Booking;
use App\Models\Favourite;
use Illuminate\Support\Facades\DB;

class redirectController extends Controller
{
    //
    public function index()
    {
        if(Auth::check())
        {
            $adminUser = Auth::user()->hasRole('admin');
            if ($adminUser) {
                $users = User::whereNotIn('id',[1])->count(); 
                $category = Category::all()->count();
                $gallery = Gallery::all()->count();
                $apartment = Apartment::all()->count();
                $booking = Booking::all()->count();
                return view('/admin/dashboard',compact('users','category','gallery','apartment','booking'));
            } else {
                $gallery = Gallery::latest()->limit(6)->get();
                $apartment = Apartment::where('approval','=','Approved')->latest()->limit(6)->get();
                $gallery_footer = Gallery::latest()->limit(6)->get();
                $category_footer = Category::latest()->limit(6)->get();
                // $userId = Auth::user()->id;
                $favourite = Favourite::all();
                // $favourite = Apartment::where('id','=',$fav->apartment_id)->get();
                // $favourite = array();
                // $Notfavourite = array();
                // foreach ($fav as $fa) 
                // {
                //     $arr = Apartment::where('id','=',$fa->apartment_id)->count(); 

                //     // $favourite[] = $arr; 
                // }
                // foreach ($fav as $fa) 
                // { 
                //     $arr2 = Apartment::whereNotIn('id',[3 2 1])->get();
 
                //     $Notfavourite[] = $arr2;
                    
                // }
                // $apartment = DB::table('apartments')->rightjoin('favourites','apartments.id','!=','favourites.apartment_id')->get();
                // dd($Notfavourite);
                // dd($Notfavourite);
                // $Notfavourite = Apartment::whereNotIn('id','=',$fav->apartment_id)->get();
                return view('home',compact('apartment','gallery','gallery_footer','category_footer','favourite'));
            }

        }
        else
        {
            $gallery = Gallery::latest()->limit(6)->get();
                $apartment = Apartment::where('approval','=','Approved')->latest()->limit(6)->get();
            $gallery_footer = Gallery::latest()->limit(6)->get();
            $category_footer = Category::latest()->limit(6)->get();
            $favourite = Favourite::all();
            return view('home',compact('apartment','gallery','gallery_footer','category_footer','favourite'));
        }

    }
}
