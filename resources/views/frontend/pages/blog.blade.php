@extends('frontend.layout.master')
@section('contents')
    <!-- Start Blog  -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    <div class="card heading">
                       Blog(s)
                    </div>
                    <div class="row blog">
                        @foreach($data['blog'] as $blog)
                            <div class="col-lg-6 col-sm-12">
                                <div class="card">
                                    <img src="{{asset('uploads/images/blog/'.$blog->image)}}" class="card-img-top"
                                         alt="assets/img/bg.jpg">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$blog->title}}</h5>
                                        <p class="card-text">
                                            {{Str::limit($blog->desctiption,200)}}


                                        </p>
                                    </div>
                                    <div class="button">
                                        <a class="btn btn-primary" href="{{route('showblog',$blog->id)}}" role="button">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
{{--                    <div class="button">--}}
{{--                        <a class="btn btn-primary" href="{{route('showblog')}}" role="button">Load More Articles</a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog  -->

@endsection
