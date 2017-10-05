@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a new thread</div>


                <div class="panel-body">
                  <form method="POST" action="/threads">
                    {{ csrf_field() }}
                  <label for="comment">Title</label>
                    <input class="form-control" name="title" rows="1" id="comment"></input>

                  <label for="comment">Message</label>
                    <textarea class="form-control" name="message" rows="10" id="comment"></textarea>
                    <br>
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
