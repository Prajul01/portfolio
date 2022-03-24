@extends('frontend.layout.master')
@section('contents')

    <!-- Start Portfolio  -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    <div class="heading">
                        Port<span>folio</span>
                    </div>
                    <div class="row portfolio">
                        @foreach($data['portfolio'] as $portf)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card bg-dark text-white">
                                <a href="{{$portf->link}}" target="_blank">
                                    <img src="{{asset('uploads/images/portfolio/'.$portf->image)}}" class="card-img"
                                         alt="assets/img/website.png" href="www.new.com" data-bs-target="_blank">
                                </a>
                                <div class="card-img-top">
                                    <h5 class="card-title">{{$portf->name}}</h5>
                                    <p class="card-text">Category: <span>{{$portf->category_name}}</span></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
{{--                    <div class="button">--}}
{{--                        <a class="btn btn-primary" href="#" role="button">Load More Demo</a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio  -->

@endsection
