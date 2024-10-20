@extends('layouts.app')

@section('content')
    {{-- Welcome Back --}}
    <div class="border border-1 w-1/2">
        @if (session('status'))
            <div class="" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <h1>
            @php
                $username = ucfirst(strtolower(Auth::user()->name));
            @endphp
            Benvenuto {{ $username }}!
        </h1>
        <h2> Cosa vuoi fare? </h2>
    </div>
    <div class="border border-1 w-1/2">
        <ul>
            <li>Vediamo quanti messaggi hai ricevuto : {{-- Inserimento dati dinamici dei messaggi ricevuti --}}</li>
            <li>Qui puoi vedere quanti ti hanno contattato nell'ultimo mese : {{-- Inserimento dinamico di messaggi ricevuti nell'ultimo mese Mese Corrente - Inizio Mese per il calcolo --}}</li>
            <li>Hai <i>N</i> {{-- Numero di messaggi con isRead a false --}}Messaggi non letti ! </li>
        </ul>
    </div>
    {{-- / Welcome --}}
@endsection
