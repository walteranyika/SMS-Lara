@extends('layouts.admin')

@section('content')
<div class="container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="row">

            <div class="panel panel-default">
                <div class="panel-heading">Approve Student's Project Presentation</div>

                <div class="panel-body">
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Student Names</th>
                                <th>Project Title</th>
                                <th>Program</th>
                                <th>Lecturer</th>
                                <th>Can Present?</th>
                                <th>Approve Project</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($projects as $project)
                               <tr>
                                   <td></td>
                                   <td>{{$project->user->name}}</td>
                                   <td>{{$project->title}}</td>
                                   <td>{{$project->program}}</td>
                                   <td>{{$project->lecturer}}</td>
                                   <td><p>{{$project->can_present}}</p></td>
                                   <td><a class="btn btn-block btn-primary" href="presented/{{$project->id}}">Approve Presentation</a></td>
                               </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var t = $('#example').DataTable( {
            "columnDefs": [ {
                "searchable": false,
                "orderable": false,
                "targets": 0
            } ],
            "order": [[ 1, 'asc' ]]
        } );

        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
    } );
</script>
@endsection
