@extends('layouts.app')

@section('title', $calmy->name)

@section('navbar')
    @extends('partials.navbar')
@endsection

@section('content')

@livewire('productscalmy', ['calmy' => $calmy])
@endsection
