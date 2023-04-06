@extends('admin.master')
@section('title')
    Admin
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title text-center">All User Information</h4>
                    <h1 class="card-title-desc text-success text-center">{{Session::get('message')}}</h1>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr class="text-center">
                            <th>SL NO</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach($users as $user)
                            <tr >
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->status == 1 ? 'Approved' : 'Disapproved'}}</td>
                                <td>
                                    <a href="{{route('user.status-up', ['id' => $user->id])}}" class="btn btn-success">
                                        Approved
                                    </a>
                                    <a href="{{route('user.status-down', ['id' => $user->id])}}" class="btn btn-primary">
                                        Disapproved
                                    </a>
                                    <a href="{{route('user.decline', ['id' => $user->id])}}" class="btn btn-danger" >
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


