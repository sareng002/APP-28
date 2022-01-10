@extends('layouts.gest')
@section('main_login')
    <div class="row align-items-center justify-content-center mt-5">
        <div class="col-md-4">
            <div class="card align-content-center justify-content-center">
                <div class="card-header bg-primary align-items-center justify-content-center">
                    <h2 class="text-center mt-2">
                        <img src="/img/favico_io/apple-touch-icon.png" alt="logo" class="h-25 w-25">
                    </h2>
                    <h2 class="text-center text-white">
                        LOGIN
                    </h2>
                        <a href="/" class="text-white">Kembali ke HOME</a>
                </div>

                <div class="card-body">

                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if(session()->has('loginerror'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginerror') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="/login" method="post">
                        @csrf
                        <div class="form-floating mb-2">
                            <input type="email" class="form-control @error('email')
                            is-invalid
                            @enderror" 
                            name="email"
                            id="email" placeholder="name@example.com"
                            autofocus required>
                            <label for="email">Masukan Alamat email !</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control"
                            name="password" id="password" placeholder="Password" required>
                            <label for="password">Masukan Password !</label>
                            </div>
                            <button type="submit" class="btn btn-outline-primary mt-2">Login..?</button>
                        </div>
                    </form>
                    <div class="card-footer bg-dark ">
                        <a href="/register" class="text-decoration-none text-white">Belum punya Akun register?</a>
                    </div> 
            </div>
        </div>
    </div>
@endsection