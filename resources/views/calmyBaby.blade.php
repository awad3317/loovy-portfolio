@extends('layouts.app')

@section('title', $data['title'])

@section('navbar')
    @extends('partials.navbar')
@endsection

@section('content')

@livewire('productscalmy', ['type' => 'calmy_baby'])
@endsection
