@extends('backend.layout.backend')
@section('content')
    <form action="{{route('skill.store')}}" method="post">
        @csrf
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">

                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                          <div class="row mt-2">
                            <div class="col-md-12">
                                <label for="name">Name</label>
                                <input type="text"  name="name" id="name" class="form-control" placeholder="Enter Name" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="percent">Label</label>
                            <input type="number" name="percent" id="percent" class="form-control" placeholder="enter the label of your skill in percentage" value="">
                        </div>
                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    </div>

                </div>
            </div>
         </div>
           </form>
@endsection

