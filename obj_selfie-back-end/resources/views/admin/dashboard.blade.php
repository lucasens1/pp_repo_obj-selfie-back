@extends('layouts.app')

@section('content')
    {{-- Welcome Back --}}
    
                    @if (session('status'))
                        <div class="" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 class="letter-spacing">
                        @php
                            $username = ucfirst(strtolower(Auth::user()->name));
                        @endphp
                        {{ __('Benvenuto') }} {{ $username }} {{ __('!') }}<br>
                        {{ __('Ecco il tuo pannello di controllo:') }}
                    </h1>
    {{-- / Welcome --}}
@endsection
