@extends('master.index')
@section('content')
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12"><h1>Chỉnh sửa khách hàng</h1></div>
        <div class="col-12">
            <form method="post" action="{{route('update.users',$user->id)}}">
                @csrf
                <div class="form-group">
                    <label>Tên người dùng</label>
                    <input type="text" class="form-control" name="name" value="{{$user->name}}" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{$user->email}}" required></div>
                <div class="form-group">
                    <label>Quyền hạn</label>
                    <select name="role">
                        <option @if($user->remember_token==1) selected
                                @endif
                            value="{{\App\Http\Controllers\RoleConstant::ADMIN}}">Admin</option>
                        <option @if($user->remember_token==2) selected
                                @endif
                                value="{{\App\Http\Controllers\RoleConstant::USER}}">User</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>
@endsection
