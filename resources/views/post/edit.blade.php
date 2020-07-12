@extends('layouts.app')
@section('content')
<h1>Post Update</h1>

<form action="/post/{{$post->id}}" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    @include('post.form')
    <input type="submit" value="submit">
</form>
@endsection
