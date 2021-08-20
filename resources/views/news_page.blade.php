@extends('layouts.app')

@section('title-block')

@endsection
@include('inc.header')
@section('content')
    <h2>Список категорий</h2>
    @foreach($categories as $element)
        <div>
            <a href="{{ route('category_page', ['category_id' => $element->id]) }}">{{$element->name}}</a>
        </div>
    @endforeach
    @foreach($news_info as $element)
        <div>
            <a href="{{ route('news_page', ['news_info' => $element->id]) }}">{{$element->name}}</a>
        </div>
    @endforeach
    <h2 style="text-align: center;">Новость</h2>
    <div style="word-break: break-all; font-size: 18px;">{{ $news_info->news_description }}</div>
@endsection
