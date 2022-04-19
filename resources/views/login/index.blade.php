@extends('layouts.main')

@section('container')

<div class="container py-3">

    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="text-center">
                <h3 class="text-white"> Please {{ $title }}</h3>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-4 offset-lg-4">
            @if(session()->has('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                    <strong> {{ session('success') }}</strong>
                </div>
              </div>
            @endif
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-10 offset-1">
            <div class="card p-5">
            <form action="/login" method="post">
                @csrf 

                <div class="form-floating mb-1">
                    <input type="email" class="form-control @error('email') is-invalid @enderror " id="email" placeholder="email" name="email" value="{{ old('email') }}">
                    <label for="email">Email...</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-1">
                    <input type="password" class="form-control @error('password') is-invalid @enderror " id="password" placeholder="password" name="password">
                    <label for="password">Password...</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="btn btn-outline-primary w-100 btn-lg mt-3">{{ $title }}</button>
                </div>

                <div class="mt-3 text-center">
                    <small>Don't have an account?<a href="/registrasi" class="text-decoration-none"> Registration!</a></small>
                </div>

            </form>
            </div>
        </div>
    </div>

</div>

@endsection