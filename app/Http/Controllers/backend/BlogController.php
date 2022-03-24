<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['rows']=Blog::all();
       return view('backend.blog.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image_file');
        if ($request->hasFile("image_file")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/blog'), $fileName);
            $request->request->add(['image' => $fileName]);
        }

        $row = Blog::create($request->all());
        if($row){
            $request->session()->flash('success','Blog Added ');
        } else{
            $request->session()->flash('error','Blog Add failed, Try again');

        }
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['row']=Blog::find($id);
        return view('backend.blog.view',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['row']=Blog::find($id);
        if (!$data['row']){
            request()->session()->flash('error','Invalid requests');
            return view('backend.blog.index');
        }
        return view('backend.blog.edit',compact('data'));
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
        $data['row'] = Blog::find($id);

        $file = $request->file('image_file');
        if ($request->hasFile("image_file")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/blog'), $fileName);
            $request->request->add(['image' => $fileName]);
            File::delete(public_path().'/uploads/images/blog/'.$data['row']->image);

        }

        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('blog.index');
        }
        if ($data['row']->update($request->all())) {
            $request->session()->flash('success', 'blog update Successfully');
        } else {
            $request->session()->flash('error', 'blog Update failed');

        }
        return redirect()->route('blog.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['row']=Blog::find($id);
        if ($data['row']) {
            File::delete(public_path().'/uploads/images/blog/'.$data['row']->image);
            if ($data['row']->delete()) {
                request()->session()->flash('success', 'Blog Deleted Successfully');

            } else {
                request()->session()->flash('error', 'Blog Deletion failed');
            }
        } else {
            request()->session()->flash('error', 'Invalid request');
        }
        return redirect()->route('blog.index' );

    }
}
