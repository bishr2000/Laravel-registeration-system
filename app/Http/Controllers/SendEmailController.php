<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApproveMail;
class SendEmailController extends Controller
{
    public function index()
    {

      Mail::to('bushur2000@gmail.com')->send(new ApproveMail());

      if (Mail::failures()) {
        return 'Great! Successfully send in your mail';
      }else{
        return 'Sorry! Please try again latter';

         }
    }
}
