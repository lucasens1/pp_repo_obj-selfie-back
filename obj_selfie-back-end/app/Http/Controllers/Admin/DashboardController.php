<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $messages = Message::all();
        return view('admin.dashboard', compact('messages'));
    }
}
