@extends('layouts.app')
@section('pageTitle', 'Liste Carte Pokemon')
@section('content')

@push('css')
    <link href="{{ asset('css/pokemon/liste-carte.css') }}" rel="stylesheet">
@endpush


<div class="block-cards-container">
 @foreach($cards as $card)
 	<a href="{{ url('/pk/li/card/' . $card->getid()) }}"> {{ $card->getName() }}</a>
 @endforeach
</div>
@endsection
