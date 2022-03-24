<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $data['user']=User::find(1);
        $data['skill']=Skill::orderBy('id')->take(4)->get();
        $data['portfolio']=Portfolio::orderBy('id')->take(4)->get();
        $data['blog']=Blog::orderBy('id')->take(4)->get();

        return view('frontend.layout.frontend',compact('data'));
    }

    public function about(){
        $data['user']=User::find(1);
        return view('frontend.pages.aboutme',compact('data'));

    }
    public function skill(){
        $data['skill']=Skill::orderBy('id')->get();
        return view('frontend.pages.skill',compact('data'));

    }
    public function portfolio(){
        $data['portfolio']=Portfolio::orderBy('id')->get();
        return view('frontend.pages.portfolio',compact('data'));

    }
    public function blog(){
        $data['blog']=Blog::orderBy('id','desc')->get();
        return view('frontend.pages.blog',compact('data'));

    }
    public function showblog($id){
        $data['blog']=Blog::find($id);
        return view('frontend.pages.showblog',compact('data'));

    }
    public function contact(){
        return view('frontend.pages.contact');

    }
}
