@extends('layout/layout')

@section('content')
    <h1 class="text-center">SELAMAT DATANG DI</h1>
    <h1 class="text-center">WEB INVENTARIS SMKN 1 CIMAHI</h1>
    <h1 class="text-center text-uppercase">{{ Auth::user()->name }}</h1>
@endsection
