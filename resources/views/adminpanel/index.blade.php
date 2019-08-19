@extends('layouts.app')

@section('content')
    <div class="d-flex" id="wrapper">
        @include('adminpanel.adminSidebar')

        <div class="container-fluid">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row mt-4">
                            <div class="col-md-3 text-center">
                                <h1>{{$questionsCount}}</h1>
                                questions in our database
                            </div>
                            <div class="col-md-3 text-center">
                                <h1>{{$usersCount}}</h1>
                                users registered
                            </div>
                            <div class="col-md-3 text-center">
                                <h1>{{$resultCount}}</h1>
                                quizzes taken
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
@endsection