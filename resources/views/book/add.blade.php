@extends('layouts.app')
@section('content')
<form action="{{url('store/book')}}" method="post" enctype="multipart/form-data">
    @csrf
    <br><br>
    <input type="text" name="name" class="form-control">
    <br><br><br>
    <input type="text" name="desc" class="form-control">
        <br><br><br>
    <input type="file" name="image" class="form-control">
    <br><br><br>
<select name="author_id">
    @foreach($authors as $author)
<option value="{{$author->id}}">{{$author->name}}</option> 
    @endforeach
    </select>
            <br><br><br>

    <input type="submit" class="btn btn-primary" value="ADD AUTHOR">

</form>
@endsection