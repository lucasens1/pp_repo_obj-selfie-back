@extends('layouts.app')

@section('content')
    {{-- Welcome Back --}}
    <div class="border border-1 w-1/2 max-sm:w-full">
        {{-- @if (session('status'))
            <div class="" role="alert">
                {{ session('status') }}
            </div>
        @endif --}}
        @php
            $username = ucfirst(strtolower(Auth::user()->name));
        @endphp
        <h1>Benvenuto {{ $username }}!</h1>
        <h2>Cosa vuoi fare?</h2>
    </div>
    <div class="border border-1 w-1/2 max-sm:w-full">
        <ul>
            <li>Vediamo quanti messaggi hai ricevuto : {{-- Inserimento dati dinamici dei messaggi ricevuti --}}</li>
            <li>Qui puoi vedere quanti ti hanno contattato nell'ultimo mese : {{-- Inserimento dinamico di messaggi ricevuti nell'ultimo mese Mese Corrente - Inizio Mese per il calcolo --}}</li>
            <li>Hai <i>N</i> {{-- Numero di messaggi con isRead a false --}}Messaggi non letti ! </li>
        </ul>
    </div>
    {{-- / Welcome --}}
@endsection
