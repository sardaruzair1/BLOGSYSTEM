<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('userpage');
    }
    public function userpage(){
        $data = blog::all();
        return view('blog.index',compact('data'));
    }
    public function product(){
        return view('blog.product');
    }
    public function create_blog(){
        return view('blog.create_blog');
    }
    public function upload_blog(Request $request){
        $blog = new blog;
        $blog->title=$request->title;
        $blog->content=$request->content;
        $blog->save();
        if($request->image){
            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time().'.'.$ext;
            $request->image->move(public_path().'/uploads/blog/',$newFileName);
            $blog->image = $newFileName;
            $blog->save();
        }
        return redirect()->route('userpage');

    }
    public function blogdetail($id){
        $blog = blog::findOrFail($id);
        return view('blog.blogdetail',compact('blog'));
    }
}
