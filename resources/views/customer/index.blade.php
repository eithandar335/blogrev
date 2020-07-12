@extends('layouts.app2')
@section('content2')
<h1>Customer list here</h1>
<table>
    <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    </thead>
    <tbody>
    @foreach($customer as $customer)
    <tr>
        <td><a href="/customerdetail/{{$customer->id}}">{{$customer->id}}</a></td>
        <td>{{$customer->name}}</td>
        <td>{{$customer->email}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
