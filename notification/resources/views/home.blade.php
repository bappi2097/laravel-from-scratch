@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('store')}}" method="post">
        @csrf
        <button class="btn btn-primary" type="submit">Payment</button>
    </form>
</div>
@endsection