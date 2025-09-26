@extends('layouts.app')

@section('title', 'Event Kami')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/event.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/eventcard.css')}}">
@endpush

@section('title-hero', 'Event Kami')

@section('content')

<div class="event-container">
    @for ($i = 1; $i <= 9; $i++)
        <x-event-card />
    @endfor
</div>

@endsection