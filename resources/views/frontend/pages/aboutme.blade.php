@extends('frontend.layout.master')
@section('contents')
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    <div class="heading">
                        About <span>Myself</span>
                    </div>

                    <div class="row describe">
                        <div class="col-lg-4 col-sm-12">
                            <div class="card">
                                <img src="{{asset('uploads/images/user/'.$data['user']->image)}}" class="card-img-top" alt="">
                            </div>
                        </div>

                            <div class="col-lg-8 col-sm-12">
                                <div class="card-body">
                                    <p class="card-text">
                                        {{$data['user']->description}}
                                    </p>
                                    <br>
                                    <div class="row text-nowrap">
                                        <div
                                            class="d-flex col-12 col-sm-6 personal-list-container personal-list-container-1">
                                            <ul class="list-unstyled personal-info w-100">
                                                <li>
                                                    <p>
                                                        <i class="fas fa-birthday-cake"></i>&nbsp;<span>Birthdate : </span>{{$data['user']->birthday}} </p>
                                                </li>
                                                <li>
                                                    <p><i class="fas fa-flag"></i>&nbsp;<span>Nationality : </span>{{$data['user']->nationality}}
                                                    </p>
                                                </li>
                                                <li>
                                                    <p><i class="fas fa-cogs"></i>&nbsp;<span>Experience : </span>{{$data['user']->experience}}
                                                        years</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div
                                            class="d-flex col-12 col-sm-6 personal-list-container personal-list-container-2">
                                            <ul class="list-unstyled personal-info w-100">
                                                <li>
                                                    <p>
                                                        <i class="fas fa-phone-square-alt"></i>&nbsp;<span>Phone : </span>{{$data['user']->phone}}</p>
                                                </li>
                                                <li>
                                                    <p><i class="fas fa-street-view"></i>&nbsp;<span>Address : </span>{{$data['user']->address}}</p>
                                                </li>
                                                <li>
                                                    <p><i class="fas fa-envelope"></i>&nbsp;<span>Email : </span>{{$data['user']->email}}
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="button">
                                            <a class="btn btn-primary" href="{{asset('uploads/files/'.$data['user']->file)}}" role="button" target="_blank">DOWNLOAD MY C.V.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
