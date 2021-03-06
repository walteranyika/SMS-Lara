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
            <a href="{{route('all_users')}}">Add User</a>
            <div class="panel panel-default">
                <div class="panel-heading">System Users</div>

                <div class="panel-body">
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Names</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Date Added</th>
                                <th>Admin</th>
                                <th>Super Admin</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($users as $user)
                               <tr>
                                   <td></td>
                                   <td>{{$user->name}}</td>
                                   <td>{{$user->email}}</td>
                                   <td>{{$user->role->name}}</td>
                                   <td>{{$user->created_at->format('d-m-Y')}}</td>
                                   <td><a class="btn btn-block btn-primary" href="adminify/{{$user->id}}">Make Admin</a></td>
                                   <td><a class="btn btn-block btn-primary" href="sadminify/{{$user->id}}">Make Super Admin</a></td>
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
            "order": [[ 1, 'asc' ]],
            "language": { "emptyTable": "No data available is currently available for reports"}
        } );

        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
    } );
</script>
@endsection
