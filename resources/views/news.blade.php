@include('inc.header')
@section('title-block')
    новости
@endsection
<h2>Список категорий</h2>
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
