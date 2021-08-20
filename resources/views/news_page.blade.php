@extends('layouts.app')

@section('title-block')

@endsection
@include('inc.header')
@section('content')
    @foreach($news as $element)
        <div>
            <a href="{{ route('news_page') }}">{{$element->news_description}}</a>
        </div>
    @endforeach
@endsection
