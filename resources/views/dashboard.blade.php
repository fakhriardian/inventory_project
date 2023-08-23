@extends('layouts.master')

@section('title')
@section('content')
<div class="p-4 lg:ml-64 w-full -translate-y-10">
    @if (Auth()->User()->role === 'superAdmin')
        @include('pages.super.home')
    @elseif (Auth()->User()->role === 'admin')
        @include('pages.admin.home')
    @elseif (Auth()->User()->role === 'konsumen')
        @include('pages.consumer.home')
    @endif
</div>
@endsection