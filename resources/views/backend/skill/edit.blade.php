@extends('backend.layout.backend')
@section('content')

    <form action="{{route('skill.update',$data['row']->id)}}" method="post">

        <input type="hidden" name="_method" value="PUT">

        @csrf
        <div class="container rounded bg-white mt-5 mb-5">
            <div>
                <a href="{{ URL::previous() }}" class="btn btn-dark">Go Back</a>
            </div>
            <div class="row">

                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label for="name">Name</label>
                                <input type="text"  name="name" id="name" class="form-control" placeholder="Enter Name" value="{{$data['row']->name}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="percent">Label</label>
                            <input type="number" name="percent" id="percent" class="form-control" placeholder="enter the label of your skill in percentage" value="{{$data['row']->percent}}">
                        </div>
                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    </div>

                </div>
            </div>
        </div>
    </form>

@endsection

