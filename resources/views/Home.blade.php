@extends('layouts.app')

@section('title-block')
    Home
@endsection
@include('inc.header')
@section('content')
    <h1>Все категории</h1>
    @foreach($category as $el)
    <div class="alert alert-info">
        <h2>{{$el->name}}</h2>
        <p>{{$el->description}}</p>
    </div>
    @endforeach
@endsection
