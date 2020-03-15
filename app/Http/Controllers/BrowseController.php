<?php

namespace App\Http\Controllers;

use App\ProfessionalReview;
use App\Review;
use Illuminate\Http\Request;
use App\Movie;
use App\User;
//use App\ProfessionalReview;
use Illuminate\Support\Facades\DB;

class BrowseController extends Controller
{
   public function index(){
   	$movies=Movie::all();
   	$movies=Movie::orderBy('id','desc')->paginate(9);
   	return view('browse')->with('movies', $movies);
   		// dd($movies)->with('movie', $movie);

   }

   public function show($id){
       $movies=Movie::find($id);
//       $test=ProfessionalReview::all();
//       dd($test);

       return view('details')->with('movies',$movies);
   }



   public function search(Request $request){
        $search= $request->get('search');
        $result=DB::table('movies')->where('name', 'like', '%'.$search.'%')->paginate(5);
        return view('browse',['movies'=>$result]);


   }


//$movies=Movie::all()->paginate(6)

   

}
