@extends('layouts.main')

@section('container')

<div class="container py-3">

    <div class="row py-3">
        <div class="col-lg-4 offset-lg-4">
           @if(session()->has('success'))
           <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
           @endif
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <strong><h2 class="text-white">Welcome, {{ auth()->user()->nama_lengkap }}</h2></strong>
        </div>
    </div>

</div>



@endsection