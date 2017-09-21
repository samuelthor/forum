@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Samúel Þór <small>Meðlimur í 3  vikur</small></h2>
    <div class="row">
      INFORMATION
        <div class="col-md-8 col-md-offset-2">

            @foreach ($threadsinfo as $thread)
              <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading"><b><p> {{ $thread->title }} </p></b></div>


                <ul class="list-group">

                  <div class="list-group-item">

                    <p>{{ $thread->message }}</p>

                  </div>
                </ul>
              </div>
              @endforeach
        </div>
    </div>
</div>
@endsection
