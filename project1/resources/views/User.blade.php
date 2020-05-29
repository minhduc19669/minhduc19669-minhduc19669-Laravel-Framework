@extends('master.index')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">List Users</h1>
        <a href="{{route('create.user')}}">
            <button type="button" class="btn btn-outline-dark" style="margin-bottom: 10px">Create</button>
        </a>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th style="text-align: center">Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        @foreach($users as $key=> $user)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                @if($user->remember_token==1)
                                    <td>{{'Admin'}}</td>
                                @else
                                    <td>{{'User'}}</td>
                                @endif
                                <td><a href="{{route('edit.user',$user->id)}}" class="badge badge-primary">Edit</a>
                                    <a href="" class="badge badge-secondary">Delete</a></td>
                            </tr>
                        @endforeach
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
