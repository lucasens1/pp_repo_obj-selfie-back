@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-4 p-4">
        <h2>Dettaglio messaggio!</h2>
        <p><strong>Nome:</strong> {{ $message->name }}</p>
        <p><strong>Email:</strong> {{ $message->email }}</p>
        <p><strong>Telefono:</strong> {{ $message->phone }}</p>
        <p><strong>Oggetto:</strong> {{ $message->subject }}</p>
        <p><strong>Messaggio:</strong> {{ $message->message }}</p>
        <div class="flex gap-4">
            <button class="bg-orange-500 rounded-2xl text-white p-2 block">
                {{-- <a
                    target="_blank"
                    href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $message->email }}&su=RE : {{ urlencode($message->subject) }}&body={{ urlencode($message->message) }}">
                    Invia Email
                </a> --}}
            </button>
            <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white rounded-3xl p-2 block">Cancella Messaggio</button>
            </form>
        </div>

    </div>
@endsection
