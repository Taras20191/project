@include('inc.header')
@section('title-block')
    новости
@endsection
<h2>список категорий</h2>
@foreach($categories as $element)
    <div>
        <a href="{{ route('category_page', ['category_id' => $element->id]) }}">{{$element->name}}</a>
    </div>
@endforeach
<h2>список новостей</h2>
@foreach($news as $element)
    <div>
        {{$element->tittle}}
    </div>
@endforeach
