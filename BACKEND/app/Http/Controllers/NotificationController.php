<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendSmsNotification()
    {
        $basic  = new \Vonage\Client\Credentials\Basic("f3a1f673", "14dYfIOffydUOMoo");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("639072479844", 'BRAND_NAME', 'A text message sent using the Nexmo SMS API')
        );
        
        $message = $response->current();
        
        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }
}
