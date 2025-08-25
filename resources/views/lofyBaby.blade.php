@extends('layouts.app')

@section('title', $data['title'])

@section('navbar')
    @extends('partials.navbar')
@endsection

@section('content')

@livewire('productslofy', ['type' => 'lofy_baby'])

@endsection
