@extends('layouts.app')

@section('title', 'الرئيسية')

@section('navbar')
     @extends('partials.navbar_hero')
@endsection

@section('content')
@livewire('home')
@endsection
