@extends('layouts.app')

@section('title', 'الرئيسية')

@section('navbar')
     @extends('partials.navbar_hero')
@endsection

@section('content')
@livewire('home',['type' => ['calmy_baby','lofy_baby']])
@endsection
