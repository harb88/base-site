@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    You are logged in!! <br/>
                    Currently operating in {{config("app.env")}} mode.<br/>
                    Connected to {{config("lawmaster.service")}}. <br/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
