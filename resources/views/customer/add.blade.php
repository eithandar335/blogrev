@extends('layouts.app2')
@section('content2')
    <h1>User Add</h1>
<form action="/customeradd" method="post">
    @csrf
    <label for="name">Customer Name</label>
    <input type="name" name="name" id="name"><p></p>
    <label for="email"> Customer Email</label>
    <input type="email" name="email" id="email"><p></p>
    <label for="password">Password</label>
    <input type="password" name="password" id="password"><p></p>
    <input type="submit" value="Submit">
</form>
    <div class="row">
        <div class="col-md-6 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Default form</h4>
                            <p class="card-description"> Basic form layout </p>
                            <form class="forms-sample" action="/customeradd" method="post">
                                <div class="form-group">
                                    <label for="name">Customer Name</label>
                                    <input type="text" class="name" id="name" placeholder="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
@endsection
