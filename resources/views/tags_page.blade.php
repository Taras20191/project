@extends('layouts.app')

@section('title-block')
    категории
@endsection
@include('inc.header')
@section('content')
    @foreach($tag_info as $element)
        <div>
            {{$element->description}}
        </div>
    @endforeach
@endsection
