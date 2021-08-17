@extends('layouts.app')

@section('title-block')
    категории
@endsection
@include('inc.header')
@section('content')
    <h2>список категорий</h2>
    @foreach($categories as $element)
        <div>
            <a href="{{ route('category_page', ['category_id' => $element->id]) }}">{{$element->name}}</a>
        </div>
    @endforeach
    <h2>список новостей</h2>
    @foreach($news as $element)
        <div>
            {{$element->news_description}}
        </div>
    @endforeach
    @foreach($tag_id as $element)
        <div>
            <a href="{{ route('tags_page', ['tag_id' => $element->id]) }}">{{$element->name}}</a>
        </div>
    @endforeach
@endsection
