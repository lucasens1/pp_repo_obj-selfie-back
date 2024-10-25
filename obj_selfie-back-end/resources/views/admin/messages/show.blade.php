@extends('layouts.app')

@section('content')
    <div class="p-4">
        <div class="flex flex-col gap-4 p-6 border-4 border-orange-400 rounded-xl">
            <h2 class="text-lg font-semibold">Dettaglio messaggio!</h2>
            <p><strong>Nome:</strong> {{ $message->name }}</p>
            <p onclick="copyEmail('{{ $message->email }}')" style="cursor: pointer;"><strong>Email:</strong> {{ $message->email }}</p>
            <p><strong>Telefono:</strong> {{ $message->phone }}</p>
            <p><strong>Oggetto:</strong> {{ $message->subject }}</p>
            <p><strong>Messaggio:</strong> {{ $message->message }}</p>
            <div class="flex gap-4">
                <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white rounded-3xl p-2 block">Cancella Messaggio</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function copyEmail(email) {
            navigator.clipboard.writeText(email)
                .then(() => {
                    alert("Email copiata!");
                })
                .catch(err => {
                    console.error("Errore nella copia: ", err);
                });
        }
    </script>
@endsection
