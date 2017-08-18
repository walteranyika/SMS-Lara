@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                <div class="panel-heading">Edit My Official Names</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('save-profile') }}">
                        {{csrf_field()}}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Edit your names as you would like it to appear on the graduation certificate</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $errors->has('name') ? old('name') : $user->name }}" placeholder="Your Official Names" required>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <button class="btn btn-block btn-primary" type="submit">Save Official Names</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
