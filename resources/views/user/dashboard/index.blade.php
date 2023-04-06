@extends('user.master')
@section('title')
    User
@endsection
@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title text-center text-success">Welcome to {{Session::get('name')}}</h4>
                    <h1 class="card-title-desc text-success text-center">{{Session::get('message')}}</h1>

                </div>
            </div>
        </div>
    </div>
@endsection
