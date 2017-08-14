@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">New Project</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('save-project') }}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="adm">Your Admission Number</label>
                            <input type="text" class="form-control" id="adm" name="adm" placeholder="Your Admission Number" required>
                        </div>

                        <div class="form-group">
                            <label for="lecturer">Select Your Lecturer</label>
                            <select class="form-control" id="lecturer" name="lecturer">
                                <option value="Mr. Walter">Mr. Walter</option>
                                <option value="Mr. Mbuvi">Mr. Mbuvi</option>
                                <option value="Mr. Joseph">Mr. Joseph</option>
                                <option value="Mr. Ephraim">Mr. Ephraim</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Project Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title For Your Project" required>
                        </div>
                        <div class="form-group">
                            <label for="program">Select Program</label>
                            <select class="form-control" id="program" name="program">
                                <option value="MIT">MIT</option>
                                <option value="Android">Android</option>
                                <option value="Python">Python</option>
                                <option value="USSD">USSD</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="desc">Describe What Your Project Does</label>
                            <textarea class="form-control" rows="5" id="desc" name="desc"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="img_1">First Image</label>
                            <input type="file" class="form-control" id="img_1" name="img_1" placeholder="First Screen grab" required>
                        </div>

                        <div class="form-group">
                            <label for="img_2">Second Image</label>
                            <input type="file" class="form-control" id="img_2" name="img_2" placeholder="Second Screen grab" required>
                        </div>

                        <div class="form-group">
                            <label for="img_3">Third Image</label>
                            <input type="file" class="form-control" id="img_3" name="img_3" placeholder="Third Screen grab" required>
                        </div>

                        <div class="form-group">
                            <label for="img_4">Fourth Image</label>
                            <input type="file" class="form-control" id="img_4" name="img_4" placeholder="Fourth Screen grab" required>
                        </div>

                        <button class="btn btn-block btn-primary" type="submit">Save Project</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
