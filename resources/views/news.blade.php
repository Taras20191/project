@section('title-block')
    новости
@endsection

<h1>Список новостей</h1>
@foreach($news as $element)
    <div>
        {{$element->news_description}}
    </div>
@endforeach
<h2>Список категорий</h2>
@foreach($categories as $element)
    <div>
        {{$element->name}}
    </div>
@endforeach
<div style="width:110px">{{ $news->links() }}</div>
