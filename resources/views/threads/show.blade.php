@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> {{ $thread[0]->title }} </div>

                <div class="panel-body">
                    {{ $thread[0]->message }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
