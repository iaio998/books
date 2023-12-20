@extends('layouts.app')

@section('title', $book -> title)


@section('content')
<main>
    <h1>{{$book -> title}}</h1>



</main>
@endsection