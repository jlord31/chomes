<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Apartment;
use App\Models\ApartmentExtra;
use App\Models\Gallery;
use App\Models\Booking;
use App\Models\Favourite;
use Illuminate\Support\Facades\DB;

class maincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * @
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function about()
    {
        //
        $gallery_footer = Gallery::latest()->limit(6)->get();
        $category_footer = Category::latest()->limit(6)->get();
        return view("about",compact( 'gallery_footer','category_footer'));
    }

    public function contact()
    {
        //
        $gallery_footer = Gallery::latest()->limit(6)->get();
        $category_footer = Category::latest()->limit(6)->get();
        return view("contact",compact( 'gallery_footer','category_footer'));
    }

    public function book()
    {
        $apartment = Apartment::all();
        $category = Category::all();
        $gallery_footer = Gallery::latest()->limit(6)->get();
        $category_footer = Category::latest()->limit(6)->get();
        $newest  = Apartment::orderBy('created_at','DESC')->get();
        $oldest  = Apartment::orderBy('created_at','ASC')->get();
        $expensive  = Apartment::orderBy('price','DESC')->get();
        $cheapest  = Apartment::orderBy('price','ASC')->get();
        return view("booking",compact('apartment','category','gallery_footer','category_footer','newest','oldest','expensive','cheapest'));
    }

    public function categoryBooking($name)
    {
        // $catBook = Apartment::where('category',$name)->get();

        $apartment = Apartment::where('category',$name)->get();
        $category = Category::all();
        $gallery_footer = Gallery::latest()->limit(6)->get();
        $category_footer = Category::latest()->limit(6)->get();
        $newest  = Apartment::where('category',$name)->orderBy('created_at','DESC')->get();
        $oldest  = Apartment::where('category',$name)->orderBy('created_at','ASC')->get();
        $expensive  = Apartment::where('category',$name)->orderBy('price','DESC')->get();
        $cheapest  = Apartment::where('category',$name)->orderBy('price','ASC')->get();
        return view("booking",compact('apartment','category','gallery_footer','category_footer','newest','oldest','expensive','cheapest' ));
    }

    //
    public function addHome()
    {
        $category = Category::all();
        $gallery_footer = Gallery::latest()->limit(6)->get();
        $category_footer = Category::latest()->limit(6)->get();
        return view("addHome",compact('category','gallery_footer','category_footer'));
    }

    //
    public function addApartment(Request $request)
    {
        $request->validate([
            'title' => 'required|min:4',
            'bedroom' => 'required|integer|min:1',
            'bathroom' => 'required|integer|min:1',
            'price' => 'required',
            'location' => 'required',
            'deposit' => 'required|integer|min:1',
            'type' => 'required',
            'details' => 'required',
            'image' => 'required',
        ]);

        $user = Auth::user()->id;

        $img = $request->file('image');

        $imgName = time().'.'.$img->getClientOriginalExtension();
        $request->image->move("uploads",$imgName);

        $apartment = new Apartment;
        $apartment->user_id = $user;
        $apartment->title = $request->title;
        $apartment->location = $request->location;
        $apartment->bedroom = $request->bedroom;
        $apartment->bathroom = $request->bathroom;
        $apartment->price = $request->price;
        $apartment->deposit = $request->deposit;
        $apartment->category = $request->category;
        $apartment->type = $request->type;
        $apartment->details = $request->details;
        $apartment->image = $imgName;
        $apartment->save();


        if ($request->hasfile('image2')) {

            $files = $request->file('image2');
            $fileCollection = collect([]);
            foreach ($files as $file)  {
                // $path = $request->file->store('uploads');

                // $apartment_id = $apartment->id;

                // $img = $request->file($value);

                $fileName = $file->getClientOriginalName();
                $file->move("uploads",$fileName);

                $fileCollection->push($fileName);

                // $files [] = $fileName;



            }

            // $apartment_id = DB::getPdo()->lastInsertId();
            $fileCollection->each(function ($path)
            {
                ApartmentExtra::create([

                    'apartment_id' => Apartment::latest('id')->first()->id,
                    'image' => $path,
                ]);
            });
            // $fmage = implode(',',$files);



            // $apartmentExtra = new ApartmentExtra;
            //     $apartmentExtra->apartment_id =  $apartment_id;
            //     $apartmentExtra->image = $fileName;
            //     $apartmentExtra->save();

        }


        return redirect('/addHome')->with('success','Thank you for listing an apartment....Your response has been Submitted for admin review');
    }

    // gallery
    public function gallery()
    {
        $gallery = Gallery::all();
        $gallery_footer = Gallery::latest()->limit(6)->get();
        $category_footer = Category::latest()->limit(6)->get();
        return view("gallery",compact('gallery','gallery_footer','category_footer'));
    }

    //  apartment-details
    public function Details($id)
    {
        $gallery_footer = Gallery::latest()->limit(6)->get();
        $category_footer = Category::latest()->limit(6)->get();

        $details = ApartmentExtra::where('apartment_id','=',$id)->get();

        $apartment = Apartment::where('id','=',$id)->first();
        $cat = $apartment->category;

        $apartmentCategory = Apartment::where('category','LIKE',$cat)->where('id','!=',$id)->get();
        // dd($apartment->id);

        return view("apartment-details",compact('gallery_footer','category_footer','details','apartment','apartmentCategory'));
    }

    // allShortlist
    public function allShortlist()
    {
        $gallery_footer = Gallery::latest()->limit(6)->get();
        $category_footer = Category::latest()->limit(6)->get(); 
        $User = Auth::user()->id;
        $apartment = Apartment::where('user_id','=',$User)->get();
  
        return view("shortlist",compact('gallery_footer','category_footer','apartment'));
    }

    public function SaveBook(Request $request)
    {
        // $request->input->all();;
        $request->validate([
            'fullname' => 'required|min:4',
            'contact' => 'required',
            'occupant' => 'required|min:1',
            'email' => 'required', 
        ]);

        $user = Auth::user()->id;

        $book = New Booking;
        $book->apartment_id = $request->apartment_id;
        $book->user_id = $user;
        $book->fullname = $request->fullname;
        $book->email = $request->email;
        $book->occupant = $request->occupant;
        $book->contact = $request->contact;
        $book->message = $request->message;
        $book->save();

        return redirect()->back()->with('success','Thank you for completing Booking....we would contact you soon');
    }

    public function addFavourite($id)
    {
        if (Auth::user()) 
        {  
            $userId = Auth::user()->id;

            $fav = Favourite::where('apartment_id','=',$id)->where('user_id','=',$userId)->first();

            if ($fav === null) 
            {
                $favourite = New Favourite;
                $favourite->user_id = $userId;
                $favourite->apartment_id = $id;
                $favourite->save();
    
                return redirect()->back()->with('success','Apartment Succesfully Added to Favourite');
            } 
            else 
            {
                return redirect()->back()->withErrors('Apartment already added to Favourite');
            }
            

            

        } 
        else 
        {
            return redirect()->back()->withErrors('Login to Add Favourites');
        }
         
    }
    
   public function myFavourite( )
   {
        $userId = Auth::user()->id;

        $gallery_footer = Gallery::latest()->limit(6)->get();
        $category_footer = Category::latest()->limit(6)->get();

        $apartment = DB::table('apartments')->rightjoin('favourites','apartments.id','=','favourites.apartment_id')->get();
 
      return view('/myFavourite',compact('apartment','gallery_footer','category_footer'));
   }
   
   public function removeFavourite($id)
   {
        Favourite::destroy($id);

        return redirect('/myFavourite')->with('success','Apartment removed from favourite');
   }
}
