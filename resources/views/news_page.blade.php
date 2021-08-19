@extends('layouts.app')

@section('title-block')

@endsection
@include('inc.header')
@section('content')

    @foreach($categories as $element)
        <div>
            <a href="{{ route('category_page', ['category_id' => $element->id]) }}">{{$element->name}}</a>
        </div>
    @endforeach
    <div>
        {{$news_info->tittle}}
    </div>
    <textarea>{{$news_info->news_description}}</textarea>
@endsection
