<?php

namespace App\Http\Controllers;

use App\Mail\AttachmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function email(){
        Mail::to('ashaduzzaman5698@gmail.com')->send(new AttachmentMail());
//        return new AttachmentMail();
    }
}
