@extends('layouts.app2')
@section('content2')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Post list</h4>

                <table class="table table-striped">
    <thead>
    <tr>
    <th>Image</th>
    <th>Title</th>
    <th>Content</th>
    <th>customer Name</th>
    <th>Customer Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($post as $post)
        <tr>
            <td class="py-1">
           <img src="{{asset('storage/'.$post->image)}}" width="100" height="100"</td>
            <td><a href="/post/{{$post->id}}">{{$post->title}}</a></td>
            <td>{{$post->content}}</td>
            <td>{{$post->customer->name}}</td>
            <td>{{$post->customer->email}}</td>
        </tr>
    @endforeach
    </tbody>

</table>

             </div>
            </div>
        </div>
    </div>
@endsection
