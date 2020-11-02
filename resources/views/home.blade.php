@extends('master')

@section('title', 'Homepage')


@section('content')

    Post a Messages:
    <form action="/create" method="post">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content" placeholder="Content">
        {{ csrf_field() }}
        <button type="submit">Submit</button>
    </form>
    <br>
    Recent Messages:
    <ul>
        @foreach($messages as $message)
        <li>
            <strong>{{ $message->title }}</strong>
            <br>
            {{$message->content}}
            <br>
            {{$message->created_at->diffForHumans()}}
            <br>
            <a href="/message/{{ $message->id }}">view</a>
        </li>
        @endforeach
    </ul>

@endsection