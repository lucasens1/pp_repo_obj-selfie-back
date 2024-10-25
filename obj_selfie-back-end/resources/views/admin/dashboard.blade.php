@extends('layouts.app')

@section('content')
    {{-- Welcome Back --}}
    <div class="w-1/2 max-sm:w-full p-4 text-center text-xl">
        {{-- @if (session('status'))
            <div class="" role="alert">
                {{ session('status') }}
            </div>
        @endif --}}
        @php
            $username = ucfirst(strtolower(Auth::user()->name));
        @endphp
        <h1>Benvenuto <strong class="text-2xl">{{ $username }}  {{ $username === 'Flaminus' ? '🦅' : ''}} </strong>!</h1>
    </div>
    <div class="w-1/2 max-sm:w-full p-6 rounded-lg text-center bg-slate-700 text-white">
        @php
            $to_read_count = 0;
            foreach ($messages as $item) {
                if ($item->read === 0) {
                    $to_read_count++;
                }
            }
        @endphp
        @if ($to_read_count !== 0)
            <p class="mt-4">Hai <i> {{ $to_read_count }} </i> {{-- Numero di messaggi con isRead a false --}}Messaggi non @if ($to_read_count > 1)
                    letti ! </p>
        @else
            letto!
        @endif
    @else
        <p class="mt-4 text-lg mb-4">Non hai nessun messaggio non letto !</p>
        @endif
        @php
            $current_month = now()->format('m');
            $last_month_msgs = $messages
                ->filter(function ($message) use ($current_month) {
                    return $message->created_at->format('m') === $current_month;
                })
                ->count();
        @endphp
        <p>Nell'ultimo mese ti hanno contattato : {{ $last_month_msgs }} volte!{{-- Inserimento dinamico di messaggi ricevuti nell'ultimo mese Mese Corrente - Inizio Mese per il calcolo --}}</p>
    </div>
    {{-- / Welcome --}}
@endsection
