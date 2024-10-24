@extends('layouts.app')

@section('content')
    {{-- Welcome Back --}}
    <div class="border border-1 w-1/2 max-sm:w-full p-4">
        {{-- @if (session('status'))
            <div class="" role="alert">
                {{ session('status') }}
            </div>
        @endif --}}
        @php
            $username = ucfirst(strtolower(Auth::user()->name));
        @endphp
        <h1>Benvenuto <strong>{{ $username }}</strong>!</h1>
        <h2>Cosa vuoi fare?</h2>
    </div>
    <div class="border border-1 w-1/2 max-sm:w-full p-4">
        <p class="text-center">Vediamo quanti messaggi hai ricevuto : <strong>{{ $messages->count() }}</strong>
            {{-- Inserimento dati dinamici dei messaggi ricevuti --}}</p>
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
        <p class="mt-4">Non hai nessun messaggio non letto !</p>
        @endif
        @php
            /* $last_month_msg = 0;
                $curMonth = date('m');
                for($i = 0; $i < $messages->count() - 1; $i++){
                    $formattedMonth = $messages[$i]->created_at->format('m');
                    $curMonth === $formattedMonth ? $last_month_msg++ : continue;
                } */
            /* Versione ottimizzata */
            $current_month = now()->format('m');
            $last_month_msgs = $messages
                ->filter(function ($message) use ($current_month) {
                    return $message->created_at->format('m') === $current_month;
                })
                ->count();
        @endphp
        <p>Nell'ultimo mese ti hanno contatta : {{ $last_month_msgs }} volte!{{-- Inserimento dinamico di messaggi ricevuti nell'ultimo mese Mese Corrente - Inizio Mese per il calcolo --}}</p>
    </div>
    {{-- / Welcome --}}
@endsection
