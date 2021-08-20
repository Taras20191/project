@extends('layouts.app')

@section('title-block')
    категории
@endsection
@include('inc.header')
@section('content')
    <h2>Список категорий</h2>
    @foreach($categories as $element)
        <div>
            <a href="{{route('category_page', ['category_id' => $element->id]) }}">{{$element->name}}</a>
        </div>
    @endforeach
    <h2>Список новостей по категории</h2>
    @foreach($news as $element)
        <div>
            <a href="{{ route('news_page',['news_id' => $element->id]) }}">{{$element->tittle}}</a>
        </div>
    @endforeach
    <div style="width:50px">{{$categories->links()}}</div>
@endsection
