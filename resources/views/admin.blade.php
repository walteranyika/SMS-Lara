@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">

            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Student Names</th>
                            <th>Project Title</th>
                            <th>Program</th>
                            <th>Email</th>
                            <th>Presented?</th>
                            <th>Date Created</th>
                            <th>Lecturer</th>
                            <th>Details</th>
                        </tr>
                        </thead>
                        <tbody>
                           @foreach($projects as $project)
                               <tr>
                                   <td>{{$project->user->name}}</td>
                                   <td>{{$project->title}}</td>
                                   <td>{{$project->program}}</td>
                                   <td>{{$project->user->email}}</td>
                                   <td>{{$project->presented}}</td>
                                   <td>{{$project->created_at->diffForhumans()}}</td>
                                   <td>{{$project->lecturer}}</td>
                                   <td><a class="btn btn-block btn-primary" href="details/{{$project->id}}">Details</a></td>
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
        $('#example').DataTable();
    } );
</script>
@endsection
