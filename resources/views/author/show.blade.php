@extends('layouts.app')
@section('content')
@foreach($authors as $author)
<h1>{{$author->name}}</h1>
<h3>{{$author->bio}}</h3>
<img src="{{asset('asset/images/authors/'.$author->image)}}" class="img-fluid">
<br>
@foreach($author->books as $book)
<h3>{{$book->name}}</h3>
@endforeach

@endforeach
@endsection
