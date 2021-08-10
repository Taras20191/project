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
    <div style="width:110px">{{$categories->links()}}</div>

@endsection
