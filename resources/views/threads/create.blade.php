@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a new thread</div>


                <div class="panel-body">

                  <label for="comment">Title</label>
                    <input class="form-control" rows="1" id="comment"></input>

                  <label for="comment">Body</label>
                    <textarea class="form-control" rows="10" id="comment"></textarea>
                    <br>
                    <button type="button" class="btn btn-primary">Publish</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
