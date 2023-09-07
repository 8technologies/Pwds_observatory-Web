<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\USSD;
use Illuminate\Http\Request;

class USSDController extends Controller
{
    /* 
    {"post":[],
    "get":{
        "":"255",
        "":"256783204665",
        "":"20230906T00:05:48",
        "":"16939839342592573",
        "response":"true",
        "":"3"
    }}
    */
    public function index(Request $r)
    {

        $info['post'] = $_POST;
        $info['get'] = $_GET;
        $info['getallheaders'] = getallheaders();
        $transactionId = "";
        $ussdServiceCode = "";
        $transactionId = "";
        $msisdn = "";
        $transactionTime = "";
        $ussdRequestString = "";
        if (isset($_GET['transactionId'])) {
            $transactionId = $_GET['transactionId'];
        }
        if (isset($_GET['ussdServiceCode'])) {
            $ussdServiceCode = $_GET['ussdServiceCode'];
        }
        if (isset($_GET['msisdn'])) {
            $msisdn = $_GET['msisdn'];
        }
        if (isset($_GET['transactionTime'])) {
            $transactionTime = $_GET['transactionTime'];
        }
        if (isset($_GET['ussdRequestString'])) {
            $ussdRequestString = $_GET['ussdRequestString'];
        }


        $ussd = null;
        if (strlen($transactionId) > 3) {
            $ussd = USSD::where('session_id', $transactionId)->first();
            if ($ussd == null) {
                $ussd = new USSD();
                $ussd->session_id = $transactionId;
                $ussd->data = 'home';
                $ussd->session_id = $r->transactionId;
                $ussd->service_code = $r->transactionTime;
                $ussd->phone_number = $r->msisdn;
                $ussd->save();
            }
        }

        $data = "";
        $home = "";
        $home .= "1. Register Person with Disability\n";
        $home .= "2. Request for help\n";
        $home .= "3. Gudance and Canceling\n";
        $home .= "4. Events\n";
        $home .= "5. News\n";
        $home .= "6. Jobs\n";
        $home .= "7. Shop\n";
        $home .= "8. Service Providers\n";
        $home .= "9. About Us\n";
        $data = $home;

        if (strlen($ussdRequestString) > 0) {
            if ($ussd->data == 'home') {
                if ($ussdRequestString == '1') {
                    $ussd->data = 'register-first-name';
                    $ussd->save();
                    $data = "Enter First Name";
                } else if ($ussdRequestString == '2') {
                    $ussd->data = 'request';
                    $ussd->save();
                } else if ($ussdRequestString == '3') {
                    $ussd->data = 'gudance';
                    $ussd->save();
                } else if ($ussdRequestString == '4') {
                    $ussd->data = 'events';
                    $ussd->save();
                } else if ($ussdRequestString == '5') {
                    $ussd->data = 'news';
                    $ussd->save();
                } else if ($ussdRequestString == '6') {
                    $ussd->data = 'jobs';
                    $ussd->save();
                } else if ($ussdRequestString == '7') {
                    $ussd->data = 'shop';
                    $ussd->save();
                } else if ($ussdRequestString == '8') {
                    $ussd->data = 'service_providers';
                    $ussd->save();
                }
            } else if ($ussd->data == 'register') {
                $ussd->data = 'register_name';
                $ussd->save();
            } else if ($ussd->data == 'register_name') {
            }
        }







        $action = "end";
        $action = "request";

        if (strlen($transactionId) < 1) {
            $transactionId = "";
        } else {
            $transactionId = '<TransactionId>' . $transactionId . '</TransactionId>';
        }
        if (strlen($transactionTime) < 1) {
            $transactionTime = "";
        } else {
            $transactionTime =             '<TransactionTime>' . $transactionTime . '</TransactionTime>';
        }

        header('Content-Type: application/xml');
        $myResp = '<?xml version="1.0"?>
        <USSDResponse>' .
            $transactionId .
            $transactionTime .
            '<USSDResponseString>NUDIPU USSD Service\n' . $data . '</USSDResponseString>' .
            '<USSDAction>' . $action . '</USSDAction>' .
            '</USSDResponse>';
        die($myResp);
    }
}
