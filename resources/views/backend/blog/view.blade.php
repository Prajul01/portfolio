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
                        <td>{{$data['row']->title}}</td>
                    </tr>
                    <tr>
                        <th>Descriprion</th>
                        <td>{{$data['row']->desctiption}}</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><img src="{{asset('uploads/images/blog/'.$data['row']->image)}}" height="100px" width="100px" alt="">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection

