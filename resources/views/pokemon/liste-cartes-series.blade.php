@extends('layouts.app')
@section('pageTitle', 'Liste Carte Pokemon')
@section('content')

@push('css')
    <link href="{{ asset('css/pokemon/liste-carte-series.css') }}" rel="stylesheet">
@endpush

<div class="block-series-container">
 @foreach($blocks as $block)
 	<a href="{{ url('/pk/li/block/' . $block->id) }}"> {{ $block->name }}</a>
 @endforeach
</div>
@endsection
