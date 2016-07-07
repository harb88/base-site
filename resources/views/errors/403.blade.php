@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Error</div>
                    <div class="panel-body">
                        Error 403: You do not have permission to view this page!
                        @if(!Auth::check())
                        <br/><br/>You may not be logged in, please <a href="{{ url('/login') }}">click here</a> to login.
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection