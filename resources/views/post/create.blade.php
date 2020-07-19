@extends('layout.app')

@section('content')
    {{--<form method="post" action="/posts">
        <input type="text" name="title" placeholder="Enter post title">

        <input type="submit" name="submit">
    </form>--}}

    {{--Form with Packages--}}

    {!! Form::open(['route' => 'posts.store', 'method' => 'post']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title',null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
