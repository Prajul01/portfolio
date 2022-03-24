@extends('backend.layout.backend')

@section('csss')
    <style>

        #parent
        {
                   white-space: nowrap;
        }
        #child
        {
                    display: inline-block;
        }

    </style>
@endsection


@section('content')

    <form action="{{route('user.update',\Illuminate\Support\Facades\Auth::id())}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        @csrf
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img src="{{asset('uploads/images/user/'.\Illuminate\Support\Facades\Auth::user()->image)}}" height="100" width="100" alt="">

                    <span class="font-weight-bold">{{auth()->user()->name}}</span><span class="text-black-50">{{auth()->user()->email}}</span><span> </span></div>
            </div>
                      <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label for="name">Name</label>
                            <input type="text"  name="name" id="name" class="form-control" placeholder="Enter Name" value="{{auth()->user()->name}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="birthday">Date-Of-Birth</label>
                        <input type="date" name="birthday" id="birthday" class="form-control" placeholder="enter address line 2" value="{{auth()->user()->birthday}}">
                    </div>
                    <div class="col-md-12">
                        <label for="email">Email ID</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="enter email id" value="{{auth()->user()->email}}">
                    </div>
                    <div class="col-md-12" hidden>
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="enter email id" value="{{auth()->user()->password}}">
                    </div>
                    <div class="col-md-12">
                            <label for="phone">Mobile Number</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="enter phone number" value="{{auth()->user()->phone}}">
                    </div>
                    <div class="col-md-12">
                        <label for="experience">Experience</label>
                        <input type="text"  name="experience" id="experience" class="form-control" placeholder="enter experience " value="{{auth()->user()->experience}}">
                    </div>
                    <div class="col-md-12">
                            <label for="nationality">Nationality</label>
                            <input type="text" name="nationality" id="nationality" class="form-control" placeholder="enter you nationality here" value="{{auth()->user()->nationality}}">
                    </div>
                    <div class="col-md-30">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" placeholder="enter address line 2" value="{{auth()->user()->description}}">{{auth()->user()->description}}</textarea>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <label for="short_description">Short-Description</label>
                            <input type="text" name="short_description" id="short_description" class="form-control" placeholder="enter address line 2" value="{{auth()->user()->short_description}}">
                        </div>
                    </div>
                        <div class="col-md-12">
                            <label for="image_file">Change-Image</label>
                            <input type="file" class="form-control" id="image_file" name="image_file" >
                        </div>
                    <div class="col-md-12" >
                        <label for="files">CV</label>
                        <div id="parent">
                        <input type="file" class="form-control" id="child" name="files" accept="application/pdf,application/vnd.ms-excel" >
                        <a class="btn btn-gradient-primary me-2" id="child" href="{{asset('uploads/files/'.auth()->user()->file)}}" role="button" target="_blank">View C.V.</a>
                        </div>
                        </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </form>
@endsection


