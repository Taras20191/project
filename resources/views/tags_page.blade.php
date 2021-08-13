@extends('layouts.app')

@section('title-block')
    категории
@endsection
@include('inc.header')
@section('content')
    <h2>список категорий</h2>
    <h2>список новостей</h2>

    @foreach($tag_id as $element)
        <div>{{$element->description}}</div>
    @endforeach
    <div>
        <a href="{{ route('tags_page', ['tag_id' => $element->id]) }}">{{$element->description}}</a>
    </div>
@endsection
