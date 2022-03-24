@extends('backend.layout.backend')
@section('content')

    <form action="{{route('portfolio.update',$data['row']->id)}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div>
                    <a href="{{ URL::previous() }}" class="btn btn-dark">Go Back</a>
                </div>
                <div class="col-md-5 border-right">

                    <div class="p-3 py-5">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label for="name">Name</label>
                                <input type="text"  name="name" id="name" class="form-control" placeholder="Enter Name" value="{{$data['row']->name}}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label for="category_name">Category Name</label>
                                <input type="text"  name="category_name" id="category_name" class="form-control" placeholder="Enter category_name" value="{{$data['row']->category_name}}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label for="link">Link</label>
                                <input type="text"  name="link" id="link" class="form-control" placeholder="Enter Name" value="{{$data['row']->link}}">
                            </div>
                        </div>
                        <div>
                            <label for="image_file">Old-Image</label>
                            <img src="{{asset('uploads/images/portfolio/'.$data['row']->image)}}" height="100" width="100" alt="">
                            <input type="file" name="image_file" id="image_file" class="form-control" placeholder="enter the label of your skill in percentage" value="">
{{--                            <input type="file" class="form-control" id="image_file" name="image_file" placeholder="">--}}


                            @error('image')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                    </div>

                </div>
            </div>
        </div>
    </form>

@endsection

