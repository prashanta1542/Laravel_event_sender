<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Sendmailed;
use App\Events\PodcastProcessed;
class MyController extends Controller
{
    public function demomail()
    {
        $info = [
            [
                'name' => 'Prashanta Chowdhury',
                'email' => 'prashantachowdhury967@gmail.com'
            ]
        ];

        // Debugging is commented out now that we know $info is correct
        // dd($info);

        if (!empty($info) && is_array($info)) {
            Mail::to('proshantochowdhury123@gmail.com')->send(new Sendmailed($info));
            dd("Successfully sent mail");
        } else {
            dd("Error: $info is not properly formatted.");
        }
    }
    public function testevent(){
        $info = [
            [
                'name' => 'Prashanta Chowdhury',
                'email' => 'prashantachowdhury967@gmail.com'
            ]
        ];

        PodcastProcessed::dispatch($info);
        dd("successfully mail send");
    }
}
