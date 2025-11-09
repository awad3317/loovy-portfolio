@extends('layouts.app')

@section('title', $lofy->name)

@section('navbar')
    @extends('partials.navbar')
@endsection

@section('content')

@livewire('productslofy', ['lofy' => $lofy])

@endsection
