@extends('layout.app')

@section('content')

    <h1>Edit Post</h1>

    {{--<form method="post" action="/posts/{{$post->id}}">
        {{csrf_field()}}

        <input type="hidden" name="_method" value="PUT">

        <input type="text" name="title" placeholder="Enter post title" value="{{$post->title}}">

        <input type="submit" name="submit" value="Update">

    </form>

    <form method="post" action="/posts/{{$post->id}}">
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Delete">
    </form>
--}}

    {!! Form::model($post,['action' => ['PostController@update',$post->id], 'method' => 'PATCH']) !!}

    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title',null, ['class' => 'form-control']) !!}

    {!! Form::submit('Update Post', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

    {!! Form::open(['action' => ['PostController@destroy',$post->id], 'method' => 'DELETE']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection