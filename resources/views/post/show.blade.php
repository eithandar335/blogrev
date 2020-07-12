@extends('layouts.app2')
@section('content2')
<h1>Post Detail</h1>
Title:{{$post->title}}<p></p>
Content:{{$post->content}}<p></p>
Customer Name:{{$post->customer->name}}<p></p>
Customer Email:{{$post->customer->email}}<p></p>
Image:<img src="{{asset('storage/'.$post->image)}}">
<form action="/post/{{$post->id}}" id="delete-task" method="post">
    @csrf
    @method('delete')
<a href="/post/{{$post->id}}/edit"><button>Update</button></a>
<button type="submit" form="delete-task">Delete</button></a>
</form>
@endsection
