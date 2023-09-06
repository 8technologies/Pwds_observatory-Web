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

        $ussd = new USSD();
        $info['post'] = $_POST;
        $info['get'] = $_GET;
        $info['getallheaders'] = getallheaders();
        $ussd->data = json_encode($info);
        $ussd->session_id = $r->transactionId;
        $ussd->service_code = $r->transactionTime;
        $ussd->phone_number = $r->msisdn;
        $ussd->save();

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


        $data = "=>" . $transactionId . "\n";
        $data .= "1. Register Person with Disability\n";
        $data .= "2. Request for help\n";
        $data .= "3. Gudance and Canceling\n";
        $data .= "4. Events\n";
        $data .= "5. News\n";
        $data .= "6. Jobs\n";
        $data .= "7. Shop\n";
        $data .= "8. Service Providers\n";
        $action = "end";
        $action = "request";
        if (strlen($transactionId) < 1) {
            $transactionId = "";
        } else {
            $transactionId = "<TransactionId>' . $transactionId . '</TransactionId>";
        }
        if (strlen($transactionTime) < 1) {
            $transactionTime = "";
        } else {
            $transactionTime =             '<TransactionTime>' . $transactionTime . '</TransactionTime>';
        }

        header('Content-Type: application/xml');
        die('<?xml version="1.0"?>
        <USSDResponse>' .
            $transactionId .
            $transactionTime .
            '<USSDResponseString>' . $data . '</USSDResponseString>' .
            '<USSDAction>' . $action . '</USSDAction>' .
            '</USSDResponse>');
    }
}
