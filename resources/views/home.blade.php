@extends('layouts.app')
<link rel="stylesheet" href="../../assets/css/home.css" type="text/css"/>
<style>
.container-full {
    width: 100vw;
    height: 100vh;
    position: absolute;
    background: white;
    top: 0px;
}
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
