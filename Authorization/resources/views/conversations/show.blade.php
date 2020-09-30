@extends('layouts.app')

@section('content')
<div class="container">
    <p>
        <a href="/conversations">Back</a>
    </p>
    <h1>{{$conversation->title}}</h1>
    <p class="text-muted">Posted by {{$conversation->user->name}}</p>
    <div>
        {{$conversation->body}}
    </div>

    <hr>
    @include('conversations.replies')
</div>
@endsection