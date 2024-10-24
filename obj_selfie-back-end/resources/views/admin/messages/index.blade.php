@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center w-full text-center">
        <h1>Messaggi!</h1>
        @if (session('success'))
            <div class="border-1 border-green-500 text-green-600">
                {{ session('success')}}
            </div>
        @endif
        <table class="border-2">
            <thead>
                <tr>
                    {{-- <th>ID</th> --}}
                    {{-- <th>Nome</th> --}}
                    <th>Email</th>
                    {{-- <th>Telefono</th> --}}
                    <th>Oggetto</th>
                    {{-- <th>Messaggio</th> --}}
                    <th>Letto?</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($messages as $item)
                    <tr>
                        {{-- <td> {{ $item->id }}</td> --}}
                        {{-- <td> {{ $item->name }}</td> --}}
                        <td> {{ $item->email }}</td>
                        {{-- <td> {{ $item->phone}} </td> --}}
                        <td> {{ $item->subject}}</td>
                        {{-- <td> {{ $item->message }}</td> --}}
                        <td> {{ $item->read ? '✔' : '✘'}} </td>
                        <td> <a href="{{route('admin.messages.show', $item->id)}}" class="bg-transparent hover:bg-blue-500 text-black font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent hover:transition rounded-xl transition">Dettagli</a></td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
