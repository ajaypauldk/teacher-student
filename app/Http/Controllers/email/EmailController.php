<?php

namespace App\Http\Controllers\email;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    public function send()
    {
        dd("Test mail sent");
    }
}
