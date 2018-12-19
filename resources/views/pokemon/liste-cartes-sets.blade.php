@extends('layouts.app')
@section('pageTitle', 'Liste Carte Pokemon')
@section('content')

@push('css')
    <link href="{{ asset('css/pokemon/liste-carte-sets.css') }}" rel="stylesheet">
@endpush

<div class="block-sets-container">
 @foreach($sets as $set)
 	<a href="{{ url('/pk/li/set/' . $set->getCode()) }}"> {{ $set->getName() }}</a>
 @endforeach
</div>
@endsection
