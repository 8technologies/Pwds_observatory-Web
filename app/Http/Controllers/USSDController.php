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
        "ussdServiceCode":"255",
        "msisdn":"256783204665",
        "transactionTime":"20230906T00:05:48",
        "transactionId":"16939839342592573",
        "response":"true",
        "ussdRequestString":"3"
    }}
    */
    public function index(Request $r)
    {
        $input = $r->all();
        $ussd = new USSD();
        $info['post'] = $_POST;
        $info['get'] = $_GET;
        $ussd->data = json_encode($info);
        $ussd->save();

        $data = "";
        $data .= "1. Register Person with Disability\n";
        $data .= "2. Request for help\n";
        $data .= "3. Gudance and Canceling\n";
        $data .= "4. Events\n";
        $data .= "5. News\n";
        $data .= "6. Jobs\n";
        $data .= "7. Shop\n";
        $data .= "8. Service Providers\n";
        $action = "<USSDAction>end</USSDAction>";

        header('Content-Type: application/xml');
        die('<?xml version="1.0"?>
        <USSDResponse>
        <TransactionId>' . $r->transactionId . '</TransactionId>' .
            $data .
            '</USSDResponseString>' .
            $action .
            '</USSDResponse>');
    }
}
/* 

    <TransactionId>129992310440</TransactionId>
    <TransactionTime>20120123T09:28:15</TransactionTime> 
    <USSDAction>end</USSDAction>
*/