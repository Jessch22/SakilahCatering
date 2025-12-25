@extends('layouts.app')

@section('title', 'Event Kami')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/event.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/eventcard.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/pagination.css')}}">
@endpush

@section('title-hero', 'Event Kami')

@section('content')

<div class="event-container">
    @forelse ($events as $item)
        <x-event-card :item="$item" />
    @empty
        <p>Belum ada event yang ditampilkan.</p>
    @endforelse
</div>

<div class="pagination-wrapper">
    {{ $events->links('components.pagination') }} 
</div>
@endsection