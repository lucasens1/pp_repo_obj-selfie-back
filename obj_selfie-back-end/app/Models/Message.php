<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'subject',
        'message',
        'read'
    ];
    
    /* Istanza del messaggio corrente -> T | F */
    public function markAsRead(){
        $this->read = true;
        $this->save();
    }

    public function markAsUnread(){
        $this->read = false;
        $this->save();
    }
    /* Fine */
}
