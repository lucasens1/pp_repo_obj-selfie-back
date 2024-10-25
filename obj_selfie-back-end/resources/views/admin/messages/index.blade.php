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

        {{-- Loader --}}
        <div id="loader" class="hidden flex justify-center items-center">
            <div class="loader"></div>
        </div>

        {{-- Container Messaggi --}}
        <div class="flex max-sm:w-full flex-wrap justify-center gap-4" id="messageContainer">
            @foreach ($messages as $message)
                <div class="max-w-sm rounded-2xl overflow-hidden shadow-2xl ms_card_size p-4 {{ $message->read ? 'bg-slate-700 text-white' : '' }}"
                    data-status="{{ $message->read ? 'read' : 'toread' }}">
                    <div class="px-3">
                        <div class="font-bold text-xl mb-2">{{ $message->subject }}</div>
                        <p class="text-md">
                            {{ $message->message }}
                        </p>
                    </div>
                    <div class="mt-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-md font-semibold text-gray-700 mr-2 mb-2">{{ $message->name }}</span>
                    </div>
                    <div>
                        <button class="bg-orange-400 px-3 py-4 text-sm text-white rounded-3xl hover:bg-orange-600">
                            <a href="{{ route('admin.messages.show', $message->id) }}">Dettagli Messaggio</a>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        function filter() {
            const loader = document.getElementById('loader');
            const messageContainer = document.getElementById('messageContainer');
            /* Imposto hidden, così che il Loader viene visualizzato e i messaggi Nascosti */
            loader.classList.remove('hidden');
            messageContainer.classList.add('hidden');

            setTimeout(() => {
                const selectedFilter = document.getElementById('tovisual').value;
                const messages = document.querySelectorAll('#messageContainer > div');

                messages.forEach(elem => {
                    if (selectedFilter === 'all' || elem.getAttribute('data-status') === selectedFilter) {
                        elem.style.display = 'block';
                    } else {
                        elem.style.display = 'none';
                    }
                });

                loader.classList.add('hidden');
                messageContainer.classList.remove('hidden');
            }, 500); 
        }
    </script>

    <style>
        .ms_card_size {
            max-width: 300px;
            max-height: 280px;
            min-width: 300px;
            min-height: 180px;
        }

        /* Stile per il loader */
        #loader {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 50;
        }

        .loader {
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-left-color: #4A5568;
            border-radius: 50%;
            width: 42px;
            height: 42px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
@endsection
