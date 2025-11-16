@extends('layouts.main')

@section('title', 'Produto')

@section('content')

    @if ($id != null)
        <p>Exebindo produto id: {{ $id }}</p>
    @endif

@endsection
