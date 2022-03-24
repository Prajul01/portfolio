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
                        <th>Skill Name</th>
                        <th>Category Name</th>
                        <th>Link</th>
                        <th>Image</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($data['rows'] as $i=>$row)
                            <td>{{$i+1}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->category_name}}</td>
                            <td>{{$row->link}}</td>

                            <td>
                                <img src="{{asset('uploads/images/portfolio/'.$row->image)}}" class="image2" alt="" style="height: 100px; width: 100px;" >
                            </td>

                            <td>
                                <a href="{{route('portfolio.show',$row->id)}}" class="btn btn-sm btn-primary ">View</a>
                                <a href="{{route('portfolio.edit',$row->id)}}" class="btn btn-sm btn-warning ">Edit</a>
                                <form class="d-inline" action="{{route('portfolio.destroy',$row->id)}}" method="post">
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


