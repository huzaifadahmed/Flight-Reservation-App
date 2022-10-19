<?php
namespace App\MailAction;
use App\Mail\ReserveSeat;
use Illuminate\Support\Facades\Mail;


class MailAction
{
    public static function SendMail($validated, $flight)
    {
        Mail::to($validated['email'])->send(new ReserveSeat($validated, $flight));

    }
}