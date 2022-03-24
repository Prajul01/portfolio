<div id="main">
    <!-- Start Hero Section  -->
    <section id="hero">
        <div class="container">
            <div class="row">
                <!-- <canvas id="gameCanvas" width="400" height="300"></canvas> -->

                <div class="card govindsah bio">
                    <div class="name">

                        Hi! I'm <span>{{$data['user']->name}}</span>
                    </div>

                    <p class="about">
                        {{$data['user']->short_description}}
                    </p>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section  -->

    <!-- Start About Me  -->
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
                                <img src="{{asset('uploads/images/user/'. $data['user']->image)}}" class="card-img-top" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12">
                            <div class="card-body">
                                <p class="card-text">
                                    {{$data['user']->description}}
                                </p>
                            </div>
                            <div class="button">
                                <a class="btn btn-primary" href="{{route('about')}}" role="button">Know Me More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start About Me  -->

    <!-- Start skills  -->
    <section id="skills">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    <div class="heading">
                        Learning <span>Skills</span>
                    </div>
                    <div class="row skillss">
                        @foreach($data['skill'] as $skill)
                            <div class="col-lg-6 col-sm-12">
                                <div class="card">
                                    <div class="card-text">
                                        {{$skill->name}}
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                             role="progressbar" aria-valuenow="{{$skill->percent}}" aria-valuemin="0" aria-valuemax="100"
                                             style="width: {{$skill->percent}}%">
                                            {{$skill->percent}}%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="button">
                        <a class="btn btn-primary" href="{{route('skill')}}" role="button">View More Skills</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End skills  -->

    <!-- Start Portfolio  -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    <div class="heading">
                        Port<span>folio</span>
                    </div>
                    <div class="row portfolio">
                        @foreach($data['portfolio'] as $port)
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card bg-dark text-white">
                                    <a href="{{$port->link}}" target="_blank">
                                        <img src="{{asset('uploads/images/portfolio/'.$port->image)}}" class="card-img"
                                             alt="assets/img/website.png" href="www.new.com" data-bs-target="_blank">
                                    </a>
                                    <div class="card-img-top">
                                        <h5 class="card-title">{{$port->name}}</h5>
                                        <p class="card-text">Category: <span>{{$port->category_name}}</span></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="button">
                        <a class="btn btn-primary" href="{{route('portfolio')}}" role="button">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio  -->

    <!-- Start Blog  -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    <div class="card heading">
                        Blog
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
                    <div class="button">
                        <a class="btn btn-primary" href="{{route('blog')}}" role="button">View More Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog  -->

    <!-- Start Ping Me  -->
    <!-- <section id="ping">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    <div class="heading">
                        About <span>Myself</span>
                    </div>
                    <div class="row ping">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="assets/img/ping.png" class="card-img-top" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <div class="card">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputUsername" class="form-label">Enter Your Name</label>
                                        <input type="text" class="form-control"  name="name" placeholder="YOUR NAME" autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email:- np.govindsah@gmail.com " aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Ping Me  -->
</div>
