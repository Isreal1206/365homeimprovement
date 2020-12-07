<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\Payment;
use App\Contractor;
use Session;
use Auth;

class PaymentController extends Controller
{
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        //$paymentDetails = Paystack::getAllTransactions();

        /*foreach ($paymentDetails as $key => $document) {
            $docs[] = $document;
        }*/

        $payment = new Payment();

        $payment->payment_id    = $paymentDetails['data']['id'];
        $payment->status        = $paymentDetails['data']['status'];
        $payment->email         = $paymentDetails['data']['customer']['email'];
        $payment->currency      = $paymentDetails['data']['currency'];
        $payment->amount        = $paymentDetails['data']['amount']/100;
        $payment->fees          = $paymentDetails['data']['fees']/100;
        $payment->channel       = $paymentDetails['data']['channel'];
        $payment->message       = $paymentDetails['data']['message'];
        $payment->paid_at       = $paymentDetails['data']['paid_at'];
        //dd($payment);
        
        $payment->save();

        $payment = Payment::where('payment_id', $paymentDetails['data']['id'])->first();
        if($payment->amount == "85000") {
            $payment->plan    = "Premium";
        }
        if($payment->amount == "75000") {
            $payment->plan    = "Enterprise";
        }
        if($payment->amount == "60000") {
            $payment->plan    = "Classic";
        }

        $payment->save();

        $contractor = Contractor::where('email', $payment->email)->first();
        $contractor->plan = $payment->plan;
        $contractor->save();

        //echo "<pre>";
        //print_r($docs[0]);
        //print_r($paymentDetails);

        //dd($paymentDetails);

        //return $paymentDetails;

        Session::flash('payment', 'Congratulations, Your payment is succesful.');
        return view('user.contractors.payment-details')->with('payment', $payment);
        //return view('user.contractors.payment-details')->with('payment', $payment);
        
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}

/**
 *  This fluent method does all the dirty work of sending a POST request with the form data
 *  to Paystack Api, then it gets the authorization Url and redirects the user to Paystack
 *  Payment Page. I abstracted all of it, so you don't have to worry about that.
 *  Just eat your cookies while coding!
 */
//Paystack::getAuthorizationUrl()->redirectNow();

/**
 * This fluent method does all the dirty work of verifying that the just concluded transaction was actually valid,
 * It verifies the transaction reference with Paystack Api and then grabs the data returned from Paystack.
 * In that data, we have a lot of good stuff, especially the `authorization_code` that you can save in your db
 * to allow for easy recurrent subscription.
 */
//Paystack::getPaymentData();

/**
 * This method gets all the customers that have performed transactions on your platform with Paystack
 * @returns array
 */
//Paystack::getAllCustomers();

/**
 * This method gets all the plans that you have registered on Paystack
 * @returns array
 */
//Paystack::getAllPlans();

/**
 * This method gets all the transactions that have occurred
 * @returns array
 */
//Paystack::getAllTransactions();

/**
 * This method generates a unique super secure cryptograhical hash token to use as transaction reference
 * @returns string
 */
//Paystack::genTranxRef();

/**
* This method creates a subaccount to be used for split payments 
* @return array
*/
//Paystack::createSubAccount();


/**
* This method fetches the details of a subaccount  
* @return array
*/
//Paystack::fetchSubAccount();


/**
* This method lists the subaccounts associated with your paystack account 
* @return array
*/
//Paystack::listSubAccounts();

/**
* This method Updates a subaccount to be used for split payments 
* @return array
*/
//Paystack::updateSubAccount();