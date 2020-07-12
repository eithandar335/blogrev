@extends('layouts.app2')
@section('content2')
<form action="/customerupdate" method="post" value="{{$customer->id}}" >
    @csrf

    <input type="hidden" name="id" id="id" value="{{$customer->id}}"><p></p>
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$customer->name}}"><p></p>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{$customer->email}}"><p></p>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" value="{{$customer->password}}"><p></p>
    <input type="submit" value="Update">
</form>
@endsection
