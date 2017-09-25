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
                    <input class="form-control" rows="1" id="comment"></input>

                  <label for="comment">Body</label>
                    <textarea class="form-control" rows="10" id="comment"></textarea>
                    <br>
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </div>
            <ul>
            @foreach ($tasks as $task)

              @if ( ! $task['complete'])
                <li>
                  <a href="{{ $task['anchor'] }}">

                    {{ $task['title']}}

                </li>
              @else
                <li>

                  <a href="{{ $task['anchor'] }}">

                    <s> {{ $task['title'] }} </s>

                </li>
              @endif

            @endforeach
          </ul>
        </div>
    </div>
</div>
@endsection
