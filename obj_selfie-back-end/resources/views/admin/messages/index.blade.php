@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center w-full text-center">
        <h1>Messaggi!</h1>

        <table class="border-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Oggetto</th>
                    <th>Messaggio</th>
                    <th>Letto?</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($messages as $item)
                    <tr>
                        <td> {{ $item->id }}</td>
                        <td> {{ $item->name }}</td>
                        <td> {{ $item->email }}</td>
                        <td> telefono </td>
                        <td> {{ $item->message }}</td>
                        <td> Oggetto Messaggio</td>
                        <td> {{ $item->read ? 'si' : 'no'}} </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
