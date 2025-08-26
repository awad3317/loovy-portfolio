@extends('layouts.app')

@section('title', 'كل المنتجات')

@section('navbar')
    @extends('partials.navbar')
@endsection
@section('content')

@livewire('productshome', ['types' => ['calmy_baby','lofy_baby']])
@endsection






