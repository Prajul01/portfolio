@extends('frontend.layout.master')
@section('contents')
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    <div class="heading">
                         <span>{{$data['blog']->title}}</span>
                    </div>

                    <div class="row describe">
                        <div class="col-lg-4 col-sm-12">
                            <div class="cadrd">
                                <img src="{{asset('uploads/images/blog/'.$data['blog']->image)}}" class="cagrd-img-top" alt="" height="450px" width="450px">
                            </div>
                        </div>

                        <div class="col-lg-8 col-sm-12">
                            <div class="card-body">
                                <p class="card-text">
                                    {{$data['blog']->desctiption}}
                                </p>
                                <br>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
