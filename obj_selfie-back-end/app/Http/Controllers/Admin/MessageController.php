<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::all();
        return view('admin.messages.index', compact('messages'));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'string|max:15',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);
    
        $message = Message::create($validatedData);
    
        return response()->json(['message' => 'Messaggio creato con successo', 'data' => $message], 201);
    }

    public function show($id){
        $message = Message::findOrFail($id);
        /* Segno che è stato letto */
        $message->markAsRead();
        return view('admin.messages.show', compact('message'));
    }

    // DELETE: Cancella un messaggio
    public function destroy($id)
    {
        // Trova il messaggio da cancellare
        $message = Message::findOrFail($id);

        // Cancella il messaggio
        $message->delete();

        return redirect()->route('admin.messages.index')->with('success', 'Messaggio cancellato con successo!');

    }
}
