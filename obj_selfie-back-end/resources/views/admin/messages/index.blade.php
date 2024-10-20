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
                        <td> {{ $item->message }}</td>
                        <td> {{ $item->read ? 'si' : 'no'}} </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
