@extends('layouts.app')

@section('title-block')
    домашняя страница
@endsection
@include('inc.header')
@section('content')
    <h1>Список категорий</h1>
    @foreach($categories as $element)
        <div>
            {{$element->name}}
        </div>
    @endforeach

    @include('news', $news)
@endsection
