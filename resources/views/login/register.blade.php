@extends('layouts.gest')
@section('main_login')
    <div class="container">
        <div class="row min-vh-100 align-items-center justify-content-center">
            <div class="col-md-5">
                <div class="card border-success">
                    <div class="card-header">
                        <div class="mt-3 text-center">
                            <img src="img/favico_io/favicon.ico" alt="logo">
                            <h4 class="text-uppercase mt-2">Register</h4>
                        </div>
                    <div class="card-body text-success">
                        <form action="/register" method="POST">
                            @csrf
                            </div>
                                <div class="form-floating mb-2">
                                <input type="text" class="form-control text-uppercase @error('name')is-invalid @enderror" name="name" id="name" placeholder="name" value="{{ old('name') }}" required >
                                <label for="name">Nama</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="email" class="form-control text-lowercase @error ('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('name') }}" required >
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control @error('password')is-invalid @enderror" name="password" id="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                            <button type="submit" class="btn btn-outline-success mb-3">Register</button>
                            <div class="mx-2 mb-2">
                                <a href="/login">suda punya akun silakan login ...?</a>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


   
@endsection