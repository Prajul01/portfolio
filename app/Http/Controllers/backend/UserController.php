<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
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
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['us']=User::find(1);

        return view('backend.user.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//       dd($request->all());

        $file = $request->file('image');
        if ($request->hasFile("image")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/user'), $fileName);
            $request->request->add(['image' => $fileName]);
        }
        $row = User::create($request->all());
        if($row){
            $request->session()->flash('success',' Blog Added ');
        } else{
            $request->session()->flash('error','Blog Deletion Failed, Try Again');

        }
        return redirect()->route('user.create');
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
        $data['row'] = User::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('/home');
        }
        return view('backend.user.edit', compact('data'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        dd($request->all());
        $data['us']=User::find(1);
        $data['row'] = User::find($id);
        $file = $request->file('image_file');
        if ($request->hasFile("image_file")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/user'), $fileName);
            $request->request->add(['image' => $fileName]);
            File::delete(public_path() . '/uploads/images/user/' . $data['row']->image);
        }
        $file = $request->file('files');
        if ($request->hasFile("files")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/files/'), $fileName);
            $request->request->add(['file' => $fileName]);
            File::delete(public_path() . '/uploads/files/' . $data['row']->image);
        }
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('user.create');
        }
        if ($data['row']->update($request->all())) {
            $request->session()->flash('success', 'blog update Successfully');
        } else {
            $request->session()->flash('error', 'blog Update failed');

        }
        return redirect()->route('user.create',compact('data'));


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
}
