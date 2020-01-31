@extends('layouts.app')

@section('content')
@guest
<p>Go sign up</p>
@else
 <p>Welcome {{Auth::user()->name}}</p>


@foreach ($tweets as $tweet)
<p> {{$tweet->content}}</p>
<p><strong>{{$tweet->author}}</strong></p>

@if(Auth::user()->name) {
    <a href='/edit'> Edit </a>
<a href='/delete/{{$tweet->id}}' > Delete </a>
}
@endif
@endforeach



 <form action="/create" method="post">
     @csrf
     <input type="text" name="author" value="author">
     <br>
     <input type="text" name="content" value="tweet">
     <br>
     <input type="submit" name="add post" value="create tweet">
 </form>
 @endguest
 @endsection
