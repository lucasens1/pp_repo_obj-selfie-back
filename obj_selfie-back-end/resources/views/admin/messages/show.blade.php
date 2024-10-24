@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <h2>Dettaglio messaggio!</h2>
        <p><strong>Nome:</strong> {{ $message->name }}</p>
        <p><strong>Email:</strong> {{ $message->email }}</p>
        <p><strong>Telefono:</strong> {{ $message->phone }}</p>
        <p><strong>Oggetto:</strong> {{ $message->subject }}</p>
        <p><strong>Messaggio:</strong> {{ $message->message }}</p>

        <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Cancella Messaggio</button>
        </form>
    </div>
@endsection
