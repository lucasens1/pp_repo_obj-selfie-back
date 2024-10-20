@extends('layouts.app')

@section('content')
    Messaggi!
    @foreach ($messages as $item)
        <h1> {{ $item }} </h1>
    @endforeach
@endsection