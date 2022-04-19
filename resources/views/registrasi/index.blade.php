@extends('layouts.main')

@section('container')

<div class="container py-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center">
                <h3>Form {{ $title }}</h3>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                <div class="card p-5">
                    <form action="/registrasi" method="post">
                        @csrf 
    
                        <div class="mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Panggilan" name="name" value="{{ old('name') }}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}">
                            @error('nama_lengkap')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="number" class="form-control @error('stb') is-invalid @enderror" id="stb" placeholder="Stb" name="stb" value="{{ old('stb') }}">
                            @error('stb')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div>
                            <select class="form-select" name="jurusan">
                                <option selected>---Jurusan---</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Manajemen">Manajemen</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                              </select>
                        </div>

                       <div class="mt-3">
                        <select class="form-select" name="angkatan">
                            <option selected>---Angkatan---</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                          </select>
                       </div>

                       <div class="mt-3">
                        <button type="submit" class="btn btn-outline-primary btn-sm">Submit</button> or 
                        <button type="reset" class="btn btn-outline-danger btn-sm">Reset</button>
                       </div>

                       <div class="text-center mt-3">
                           <small>Already have an account?<a href="/login" class="text-decoration-none"> Log In!</a></small>
                       </div>
    
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection