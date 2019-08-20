@extends('layouts.app')

@section('content')
    <div class="container">
        @if($topic)
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <h1>{{$topic->title}}</h1>
                <div class="form-group">
                    <form action="{{route('topics.update', $topic->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <input required type="text" name="title" class="form-control" value="{{$topic->title}}">
                        </div>
                        <input type="submit" name="submit" id="submit" class="btn btn-info" value="Edit Topic">
                    </form>
                </div>
            </div>
            @else
                <h1>No Topic</h1>
            @endif
        </div>
        </div>
    </div>
@endsection