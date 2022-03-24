@extends('backend.layout.backend')
@section('content')

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
                        <th>Label</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($data['rows'] as $i=>$row)
                        <td>{{$i+1}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->percent}}%</td>

                            <td>
                                <a href="{{route('skill.show',$row->id)}}" class="btn btn-sm btn-primary ">View</a>
                                <a href="{{route('skill.edit',$row->id)}}" class="btn btn-sm btn-warning ">Edit</a>
                                <form class="d-inline" action="{{route('skill.destroy',$row->id)}}" method="post">
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

