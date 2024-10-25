@extends('layouts.app')

@section('content')
    <div class="w-full text-center">
        <h1 class="text-2xl mb-12 font-semibold">Messaggi!</h1>
        @if (session('success'))
            <div class="border-1 border-green-500 text-green-600 my-6 p-2">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-4">
            <select name="tovisual" id="tovisual" onchange="filter()">
                <option default value="all">Tutti</option>
                <option value="toread">Da Leggere</option>
                <option value="read">Letti</option>
            </select>
        </div>

        <div class="flex max-sm:w-full flex-wrap justify-center gap-4 " id="messageContainer">
            @foreach ($messages as $message)
                {{-- Aggiungo data-status per controllare lo status del messaggio e nasconderlo all'occorrenza --}}
                <div class="max-w-sm rounded-2xl overflow-hidden shadow-2xl h-full p-4 {{ $message->read ? 'bg-slate-700 text-white' : '' }}"
                    data-status="{{ $message->read ? 'read' : 'toread' }}">
                    <div class="px-3">
                        <div class="font-bold text-xl mb-2">{{ $message->subject }}</div>
                        <p class="text-md">
                            {{ $message->message }}
                        </p>
                    </div>
                    <div class="p-2">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-md font-semibold text-gray-700 mr-2 mb-2">{{ $message->name }}</span>
                    </div>
                    <div class="p-2">
                        <button class="bg-orange-400 px-3 py-4 text-sm text-white rounded-3xl hover:bg-orange-600"><a
                                href="{{ route('admin.messages.show', $message->id) }}">Dettagli Messaggio</a></button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        function filter() {
            const selectedFilter = document.getElementById('tovisual').value; /* Prendo valore selezionato da User */
            const messages = document.querySelectorAll(
            '#messageContainer > div'); /* Prendo il div contenuto nel container di Tutti i Msgs */
            messages.forEach(elem => {
                if (selectedFilter === 'all' || elem.getAttribute('data-status') === selectedFilter) {
                    elem.style.display = 'block';
                } else {
                    elem.style.display = 'none';
                }
            });
        }
    </script>
@endsection
