@section('title-block')
    новости
@endsection

<h1>Список новостей</h1>
@foreach($news as $element)
    <div>
        {{$element->news_description}}
    </div>
@endforeach
{{ $news->links() }}
