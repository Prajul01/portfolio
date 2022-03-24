@extends('backend.layout.backend')
@section('css')


@endsection
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
            <div class="card-body">
                <table class="table table-striped">
                    @if(Session::has('success'))
                        <p class="alert alert-success">{{Session::get('success')}}</p>
                    @endif
                    @if(Session::has('error'))
                        <p class="alert alert-danger">{{Session::get('danger')}}</p>
                    @endif
                    <thead>
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($data['rows'] as $i=>$row)
                            <td>{{$i+1}}</td>
                            <td>{{$row->title}}</td>
                            <td>
                                {{Str::limit($row->desctiption,75)}}

                            </td>
                            <td>
                                <img src="{{asset('uploads/images/blog/'.$row->image)}}" class="image2" alt="" style="height: 100px; width: 100px;" >
                            </td>

                            <td>
                                <a href="{{route('blog.show',$row->id)}}" class="btn btn-sm btn-primary ">View</a>
                                <a href="{{route('blog.edit',$row->id)}}" class="btn btn-sm btn-warning ">Edit</a>
                                <form class="d-inline" action="{{route('blog.destroy',$row->id)}}" method="post">
                                    <input type="hidden" name="_method" value="delete"/>
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger ">Delete</button>

                                </form>
                            </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection


