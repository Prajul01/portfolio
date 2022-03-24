@extends('frontend.layout.master')
@section('contents')

    <!-- Start Ping Me  -->
    <section id="ping">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    <div class="heading">
                        Inbox <span>Me</span>
                    </div>
                    <div class="row ping">
                        <div class="col-lg-2 col-md-2 col-sm-0">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="card">
                                <form>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="name" placeholder="YOUR NAME"
                                               autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               placeholder="Email:- np.govindsah@gmail.com "
                                               aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="3"></textarea>
                                    </div>
                                    <div class="button">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Ping Me  -->

@endsection
