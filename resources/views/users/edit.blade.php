@extends('layouts.app')

@section('content')
    <div class="d-flex" id="wrapper">
        @include('adminpanel.adminSidebar')
        <div class="container">
            @if($user)
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{route('users.update', $user->id)}}">
                @csrf
                @method('put')
                <div class="panel panel-default">
                    <h2 align="center">Edit User</h2>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="name">User name</label>
                                <input type="text" class="form-control" name="name" value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email">User email</label>
                                <input type="text" class="form-control" name="email" value="{{$user->email}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="role">User role</label>
                                <select name="role" class="form-control">
                                        <option {{($user->role == 'user') ? 'selected' : ''}} value="user">User</option>
                                        <option {{($user->role == 'admin') ? 'selected' : ''}} value="admin">Admin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <input class="btn btn-primary" type="submit" value="Update">
            </form>
                @else
                    <h1>No User</h1>
                @endif
        </div>
        </div>
    </div>
@endsection