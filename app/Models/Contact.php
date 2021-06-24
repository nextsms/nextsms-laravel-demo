<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use HasFactory;
    use Notifiable;

    public function routeNotificationForNextSms($notification)
    {
        return $this->phone_number;
        // return '255747991498';
    }
}
