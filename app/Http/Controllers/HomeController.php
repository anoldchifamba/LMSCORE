<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth','verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $this->middleware('auth');
        return view('home');
    }

    public function welcome(){

        if(Auth::check()){
            return redirect()->route('courses.index');
        }
        $categories = Category::all();
        $courses = Course::all();

        return view('welcome')->with('courses',$courses)->with('categories', $categories);
    }
    public function home(){

        if(Auth::check()){
            return redirect()->route('courses.index');
        }
        $categories = Category::all();
        $courses = Course::all();

        return view('index')->with('courses',$courses)->with('categories', $categories);
    }
    public function contact(){

        if(Auth::check()){
            return redirect()->route('courses.index');
        }
        $categories = Category::all();
        $courses = Course::all();

        return view('contact')->with('courses',$courses)->with('categories', $categories);
    }
    public function blog(){

        if(Auth::check()){
            return redirect()->route('courses.index');
        }
        $categories = Category::all();
        $courses = Course::all();

        return view('blog')->with('courses',$courses)->with('categories', $categories);
    }
    public function course(){

        if(Auth::check()){
            return redirect()->route('courses.index');
        }
        $categories = Category::all();
        $courses = Course::all();

        return view('course')->with('courses',$courses)->with('categories', $categories);
    }

    public function about(){

        if(Auth::check()){
            return redirect()->route('courses.index');
        }
        $categories = Category::all();
        $courses = Course::all();

        return view('about')->with('courses',$courses)->with('categories', $categories);
    }

}
