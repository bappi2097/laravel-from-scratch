@extends('layouts.app')
@section('content')
<div class="container">
    <ul>
        @forelse ($notifications as $notification)
        @if ($notification->type == "App\Notifications\PaymentReceived")
        <li>We have received payment of {{$notification->data['amount']}} from you</li>
        @endif
        @empty
        <li>No Unread Notifications</li>
        @endforelse
    </ul>
</div>
@endsection