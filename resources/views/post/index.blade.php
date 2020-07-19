@extends('layout.app')

@section('content')
    <ul>
        @foreach($posts as $post)
            <li><a href="{{route('posts.show',$post)}}">{{$post->title}}</a></li>
        @endforeach
    </ul>
@endsection
