<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => 'index', 'show']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $movies=Movie::all();
        $movies=Movie::orderBy('id','desc')->paginate(count($movies));
//        $user = DB::table('movies')->where('genre', 'like', 'comedy');
//        dd($user);
        return view('welcome')->with('movie', $movies);
//        //dd($movies)->with('movie', $movie);

    }
    public function show($id){
       $movies=Movie::find($id);
       return view('details')->with('movie',$movies);
   }

}
