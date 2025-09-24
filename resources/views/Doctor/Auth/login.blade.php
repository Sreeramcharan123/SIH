@section('title','login')
@extends('Doctor.layout.auth.Doctor')
@section('content')

<div class="card">
    <div class="card-header">login</div>
    <div class="card-body">
        <form action="{{ route('Doctor.login.save') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary">LOGIN</button>
            <a href="{{ route('Doctor.registration') }}">Create A New Account</a>

        </form>

    </div>
</div>
@endsection