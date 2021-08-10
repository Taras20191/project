@extends('layouts.app')

@section('title-block')
     категории
@endsection
@include('inc.header')
@section('content')
    <h2>список категорий</h2>
    @foreach($categories as $element)
        <div>
            {{$element->name}}
        </div>
    @endforeach
    <h2>список новостей</h2>
    @foreach($news as $element)
        <div>
            {{$element->news_description}}
        </div>
    @endforeach
    <div style="width:110px">{{$news->links()}}</div>
@endsection
