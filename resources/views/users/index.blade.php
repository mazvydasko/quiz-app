@extends('layouts.app')

@section('content')
    <div class="d-flex" id="wrapper">
        @include('adminpanel.adminSidebar')
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <h3 class="page-title">All Users</h3>
                    <table class="table table-bordered table-striped datatable">
                        <thead>
                        <tr>
                            <th>User</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>More</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td>
                                    <a href="{{route('users.show', $user->id)}}"
                                       class="btn btn-xs btn-primary">View</a>
                                    <a href="{{route('users.edit', $user->id)}}"
                                       class="btn btn-xs btn-warning">Edit</a>
                                    <form class="inline_block" action="{{route('users.destroy', $user->id)}}"
                                          method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                                    </form>
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