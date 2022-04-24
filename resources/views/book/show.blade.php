@extends('layouts.app')
@section('content')

@foreach($books as $book)
<h1>{{$book->name}}</h1>
<h3>{{$book->author->name}}</h3>

<h3>{{$book->desc}}</h3>
<img src="{{asset('asset/images/books/'.$book->image)}}" class="img-fluid">

@endforeach


@endsection