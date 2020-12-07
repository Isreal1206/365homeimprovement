<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    //protected $redirectTo = '/';
    protected function redirectTo()
    {
        Session()->flash('verify', 'Thank You! your account is now active.');
        //return redirect()->route('contractor.dashboard');
        switch (Auth::user()->role_id) {
            case '1':
                    return '/contractor/dashboard';
                break;
            case '2':
                    return '/homeowner/dashboard';
                break; 
            case '3':
                    return '/marketer/dashboard';
                break; 
            default:
                    return '/trainer/dashboard'; 
                break;
        }
        //return '/trainer/dashboard';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    /*$to_name = ‘RECEIVER_NAME’;
    $to_email = ‘RECEIVER_EMAIL_ADDRESS’;
    $data = array(‘name’=>”Ogbonna Vitalis(sender_name)”, “body” => “A test mail”);
    Mail::send(‘emails.mail’, $data, function($message) use ($to_name, $to_email) {
    $message->to($to_email, $to_name)
    ->subject(Laravel Test Mail’);
    $message->from(‘SENDER_EMAIL_ADDRESS’,’Test Mail’);

    Under views\emails\mail.blade.php
    Hello <strong>{{ $name }}</strong>,
    <p>{{body}}</p>*/
}
