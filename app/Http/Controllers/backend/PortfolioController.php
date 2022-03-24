<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['rows']=Portfolio::all();
       return view('backend.portfolio.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.portfolio.create');
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
            $file->move(public_path('uploads/images/portfolio'), $fileName);
            $request->request->add(['image' => $fileName]);
        }

        $row = Portfolio::create($request->all());
        if($row){
            $request->session()->flash('success','Portfolio Added ');
        } else{
            $request->session()->flash('error','Portfolio Add failed, Try again');

        }
        return redirect()->route('portfolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['row']=Portfolio::find($id);
        return view('backend.portfolio.view',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['row']=Portfolio::find($id);
        if (!$data['row']){
            request()->session()->flash('error','Invalid requests');
            return view('backend.portfolio.index');
        }
        return view('backend.portfolio.edit',compact('data'));
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
        $data['row'] = Portfolio::find($id);

        $file = $request->file('image_file');
        if ($request->hasFile("image_file")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/portfolio'), $fileName);
            $request->request->add(['image' => $fileName]);
            File::delete(public_path().'/uploads/images/portfolio/'.$data['row']->image);

        }

        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('portfolio.index');
        }
        if ($data['row']->update($request->all())) {
            $request->session()->flash('success', 'portfolio update Successfully');
        } else {
            $request->session()->flash('error', 'portfolio Update failed');

        }
        return redirect()->route('portfolio.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['row']=Portfolio::find($id);
        if ($data['row']) {
            File::delete(public_path().'/uploads/images/portfolio/'.$data['row']->image);
            if ($data['row']->delete()) {
                request()->session()->flash('success', 'Portfolio Deleted Successfully');

            } else {
                request()->session()->flash('error', 'Portfolio Deletion failed');
            }
        } else {
            request()->session()->flash('error', 'Invalid request');
        }
        return redirect()->route('portfolio.index' );

    }
}
