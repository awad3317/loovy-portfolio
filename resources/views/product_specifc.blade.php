@extends('layouts.app')

@section('title', ' عرض منتج ')

@section('navbar')
    @extends('partials.navbar')
@endsection

@section('content')
@livewire('productspecific', ['type' => $type, 'id' => $id])


@endsection
