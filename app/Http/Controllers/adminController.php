<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Gallery;
use App\Models\user;
use App\Models\Role;
use App\Models\Category;
use App\Models\Apartment;
use App\Models\Booking;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $users = User::whereNotIn('id',[1])->count(); 
        $category = Category::all()->count();
        $gallery = Gallery::all()->count();
        $apartment = Apartment::all()->count();
        $booking = Booking::all()->count();
        return view('/admin/dashboard',compact('users','category','gallery','apartment','booking'));
    } 

    public function getUsers()
    {
        $users = User::whereNotIn('id',[1])->get(); 
        return view('/admin/users',compact('users'));
    }

    //  
    public function deleteUser($id)
    {
        User::destroy($id);

        return redirect('/admin/users')->with('success','User Data sucessfully Deleted');
    }

    // 
    public function getCategory()
    {
        $category = Category::all();
        return view('/admin/category',compact('category'));
    }

    // 
    public function addCategory(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|min:4'
        ]); 

        $catName = $request->name;
        $cat = Category::where('name','=',$catName)->first();
        if ($cat === null) 
        {
            $category = new Category;
            $category->name = $request->name;
            $category->save();

            return redirect('/admin/category')->with('success','Category sucessfully created');
        } 
        else 
        {
            return redirect('/admin/category')->withErrors('Category already exsist');
        }
        

        
    }

    // deleteCategory
    public function deleteCategory($id)
    {
        Category::destroy($id);

        return redirect('/admin/category')->with('success','Category sucessfully Deleted');
    }

    public function gall()
    {
        $gallery = Gallery::all();
        return view('/admin/gallery',compact('gallery'));
    }

    public function uploadGallery(Request $request)
    {
        //
        $request->validate([
            'image' => 'required'
        ]);
        $img = $request->file('image');

        $imgName = time().'.'.$img->getClientOriginalExtension();
        $request->image->move("uploads",$imgName);

        $gallery = new Gallery;
        $gallery->name = $imgName;
        $gallery->save();

        return redirect('/admin/gallery')->with('success','Image sucessfully uploaded');
    }
    //
    public function deleteGallery($id)
    {
        Gallery::destroy($id);

        return redirect('/admin/gallery')->with('success','Image sucessfully Deleted');
    }

    //  
    public function getBooking()
    {  
        $booking = Booking::all();

        return view('/admin/booking',compact('booking'));
    }

    //
    public function getApartment()
    {  
        $apartment = Apartment::all(); 

        return view('/admin/apartment',compact('apartment'));
    }
    // 
    function updateApproval(Request $request)
    { 
        $apartment = Apartment::find($request->aid);
        $apartment->approval = $request->aapt;
        $apartment->save();

        return response()->json([
            "id"=>$apartment->id,
            "user_id"=>$apartment->user_id,
            "title"=>$apartment->title,
            "location"=>$apartment->location,
            "bedroom"=>$apartment->bedroom,
            "bathroom"=>$apartment->bathroom,
            "price"=>$apartment->price,
            "deposit"=>$apartment->deposit,
            "type"=>$apartment->type, 
            "details"=>$apartment->details,
            "approval"=>$apartment->approval,
            "status"=>$apartment->status,

        ]); 
    }

    function updateStatus(Request $request)
    {
        $apartment = Apartment::find($request->sid);
        $apartment->status = $request->sapt;
        $apartment->save();

        return response()->json([
            "id"=>$apartment->id,
            "user_id"=>$apartment->user_id,
            "title"=>$apartment->title,
            "location"=>$apartment->location,
            "bedroom"=>$apartment->bedroom,
            "bathroom"=>$apartment->bathroom,
            "price"=>$apartment->price,
            "deposit"=>$apartment->deposit,
            "type"=>$apartment->type, 
            "details"=>$apartment->details,
            "approval"=>$apartment->approval,
            "status"=>$apartment->status,

        ]); 
    }

    // 
    public function Settings()
    {
        //
        if (Auth::user()) 
        {
            $userId = Auth::user()->id;

            $auth = User::where('id','=',$userId)->first();

            return view("/admin/settings",compact('auth'));
        } 
        else 
        {
            return view("/home");
        }
        
        
    }

    // 
    public function saveSettings(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255', 
        ]);

        $userId = Auth::user()->id;
        $user = User::find($userId);
        $user->name = $request->name;
        $user->email = $request->email;
        
        if ($request->has('password')) 
        {
            $user->password = Hash::make($request->password);
        } 
        $user->save();
         

        // $user->update($request->has('password') ? array_merge($request->except('password'), ['password' => Hash::make($request->password)]) : $request->except('password'));

        return redirect('/admin/settings')->with('success','Settings successfully updated');
    } 
 
   
}
