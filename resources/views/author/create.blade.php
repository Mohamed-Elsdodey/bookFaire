@extends('layouts.app')
@section('content')
<form action="{{url('add/author')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" class="form-control">
    <br><br><br>
    <input type="text" name="bio" class="form-control">
        <br><br><br>
    <input type="file" name="image" class="form-control">
    <br><br><br>
    <input type="submit" class="btn btn-success" value="ADD AUTHOR">

</form>
@endsection