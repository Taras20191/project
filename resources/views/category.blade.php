@extends('layouts.app')

@section('title-block')
    Все категории
@endsection
@include('inc.header')
@section('content')
    <h1>Список категорий</h1>
    @foreach($categories as $category)
        <div>
            {{$category->name}}
        </div>
    @endforeach
    <h2>Список новостей</h2>
    @foreach($news as $element)
        <div>
            {{$element->news_description}}
        </div>
    @endforeach
    <div style="width:110px">{{$categories->links()}}</div>
@endsection
