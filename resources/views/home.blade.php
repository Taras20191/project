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
    <h2>Список новостей</h2>
    @foreach($news as $element)
        <div>
            {{$element->news_description}}
        </div>
    @endforeach
    <div style="width:110px">{{$news->links()}}</div>
@endsection
