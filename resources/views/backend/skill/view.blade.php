@extends('backend.layout.backend')
@section('content')


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
                        <th>Label</th>
                        <td>{{$data['row']->percent}}%</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection

