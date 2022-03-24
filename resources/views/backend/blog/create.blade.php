@extends('backend.layout.backend')

@section('content')
    <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Enter title" value="">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label for="desctiption">Description</label>
                                <textarea cols="30" rows="10" name="desctiption" id="desctiption" class="form-control"
                                          placeholder="EnterDescription" value="">
                                </textarea>

                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="image_file">Image</label>
                            <input type="file" name="image_file" id="image_file" class="form-control"
                                   placeholder="enter the label of your skill in percentage" value="">
                        </div>
                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

