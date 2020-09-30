@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($conversations as $conversation)
    <h2><a href="/conversations/{{$conversation->id}}">{{$conversation->title}}</a></h2>
    @continue($loop->last)
    <hr>
    @endforeach
</div>
@endsection