@extends('master.index')
@section('content')
<div class="container-fluid">
    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item active">Create User</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-table mr-1"></i></div>
        <div class="card-body">
            <form method="post" action="{{route('store.user')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" value="" name="name">
                </div>

                <div class="form-group">
                    <label >Email</label>
                    <input type="email" name="email" value=""  class="form-control">
                </div>

                <div class="form-group">
                    <label >Password</label>
                    <input type="password" name="password" value=""  class="form-control">
                </div>
                <div class="form-group">
                    <label >Role</label>
                    <select name="role">
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="{{ route('users.list') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
