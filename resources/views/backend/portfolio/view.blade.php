@extends('backend.layout.backend')
@section('content')
    <style>
        /*.image2{*/
        /*height: 300px; !important;*/
        /*width: 300px; !important;*/
        /*}*/

        table th img, .table td img {
            width: 300px;
            height: 300px;
            border-radius: 0; !important;
        }
    </style>


    <div class="col-lg-12 grid-margin stretch-card">

        <div class="card">
            <div>
                <a href="{{ URL::previous() }}" class="btn btn-dark">Go Back</a>
            </div>
            <div class="card-body">

                <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <td>{{$data['row']->name}}</td>
                    </tr>
                    <tr>
                        <th>Category Name</th>
                        <td>{{$data['row']->category_name}}</td>
                    </tr>
                    <tr>
                        <th>Link</th>
                        <td>{{$data['row']->link}}</td>
                    </tr>

                    <tr>
                        <th>Image</th>
                        <td>                            <img src="{{asset('uploads/images/portfolio/'.$data['row']->image)}}" height="100px" width="100px" alt="">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection

