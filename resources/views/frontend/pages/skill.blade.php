@extends('frontend.layout.master')
@section('contents')

    <!-- Start skills  -->
    <section id="skills">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    <div class="heading">
                        Learning <span>Skills</span>
                    </div>
                    <div class="row skillss">
                        @foreach($data['skill'] as $skills)
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-text">
                                    {{$skills->name}}
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                         role="progressbar" aria-valuenow="{{$skills->percent}}" aria-valuemin="0" aria-valuemax="100"
                                         style="width: {{$skills->percent}}%">{{$skills->percent}}%
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End skills  -->
@endsection
