<?php

use App\Models\Contact;
use App\Models\User;
use App\Notifications\NewsWasPublished;
use App\Notifications\ParticipantPaidNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use NotificationChannels\NextSms\NextSmsFacade as NextSMS;



Route::get('/', function () {

    $m = 'OK ' .date('c');
    Log::debug($m);
    try {
        NextSMS::singleDestination([
            'to' => '255747991498',
            'text' => 'i love you alpha',
            'from' => 'NEXTSMS',
        ]);
    } catch (\Throwable $th) {
        throw $th;
    }

    return $m;
});




Route::get('/', function () {
    $c = Contact::factory()->make([
        'phone_number' => '255747991498'
    ]);
    $c->notify(new ParticipantPaidNotification());
    return 'ok';
});
