<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\USSD;
use Illuminate\Http\Request;
use SimpleXMLElement;

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

        header('Content-Type: application/xml');
        $raw = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : file_get_contents('php://input');
        $info['raw'] = $raw;
        $post = null;
        $ussd = new USSD();
        $TransactionId = "";
        $USSDServiceCode = "";
        $TransactionId = "";
        $MSISDN = "";
        $TransactionTime = "";
        $USSDRequestString = "";
        $ussdDailedCode = "";
        try {
            $post = new SimpleXMLElement($raw);
            if (isset($post->TransactionId)) {
                $TransactionId = $post->TransactionId;
            }
            if (isset($post->TransactionTime)) {
                $TransactionTime = $post->TransactionTime;
            }
            if (isset($post->MSISDN)) {
                $MSISDN = $post->MSISDN;
            }
            if (isset($post->USSDServiceCode)) {
                $USSDServiceCode = $post->USSDServiceCode;
            }
            if (isset($post->USSDRequestString)) {
                $USSDRequestString = $post->USSDRequestString;
            }
            if (isset($post->ussdDailedCode)) {
                $ussdDailedCode = $post->ussdDailedCode;
            }
        } catch (\Throwable $th) {
            $post = null;
        }


        if ($TransactionId == null) {
            $TransactionId = "";
        }

        if ($TransactionTime == null) {
            $TransactionTime = "";
        }

        $ussd = null;
        if ((strlen($TransactionId) > 1) && (strlen($TransactionTime) > 1)) {
            $ussd = USSD::where(['session_id' => $TransactionId])
                ->orderBy('id', 'desc')
                ->first();
            if ($ussd == null) {
                $ussd = new USSD();
                $ussd->session_id = $TransactionId;
                $ussd->data = 'home';
                $ussd->service_code = $USSDServiceCode;
                $ussd->TransactionTime = $TransactionTime;
                $ussd->phone_number = $MSISDN;
                $ussd->USSDServiceCode = $USSDServiceCode;
                $ussd->USSDRequestString = $USSDRequestString;
                $ussd->save();
            }
        }

        $data = "";
        $home = "";
        $home .= "NUDIPU USSD\n";
        $home .= "1. Register Person with Disability\n";
        $home .= "2. Request for help\n";
        $home .= "3. Gudance and Canceling\n";
        $home .= "4. Events\n";
        $home .= "5. News\n";
        $home .= "6. Jobs\n";
        $home .= "7. Shop\n";
        $home .= "8. Service Providers\n";
        $data = $home;
        $action = "request";

        if ($ussd != null) {
            if (strlen($USSDRequestString) > 0) {
                if ($ussd->data == 'home') {
                    if ($USSDRequestString == '1') {
                        $ussd->data = 'register-first-name';
                        $ussd->save();
                        $data = "Enter First Name";
                    } else if ($USSDRequestString == '2') {
                        $ussd->data = 'request';
                        $ussd->save();
                    } else if ($USSDRequestString == '3') {
                        $ussd->data = 'gudance';
                        $ussd->save();
                    } else if ($USSDRequestString == '4') {
                        $ussd->data = 'events';
                        $ussd->save();
                    } else if ($USSDRequestString == '5') {
                        $ussd->data = 'news';
                        $ussd->save();
                    } else if ($USSDRequestString == '6') {
                        $ussd->data = 'jobs';
                        $ussd->save();
                    } else if ($USSDRequestString == '7') {
                        $ussd->data = 'shop';
                        $ussd->save();
                    } else if ($USSDRequestString == '8') {
                        $ussd->data = 'service_providers';
                        $ussd->save();
                    }
                } else if ($ussd->data == 'register-first-name') {
                    $ussd->data = 'register-last-name';
                    $ussd->save();
                    $data = "Enter Last Name";
                } else if ($ussd->data == 'register-last-name') {
                    $ussd->data = 'register-sex';
                    $ussd->save();
                    $data = "Select Gender\n";
                    $data .= "1. Male\n";
                    $data .= "2. Female\n";
                } else if ($ussd->data == 'register-sex') {
                    $ussd->data = 'register-disability';
                    $ussd->save();
                    $data = "Select Disability\n";
                    $data .= "1. Autism\n";
                    $data .= "2. Bind\n";
                    $data .= "3. Deaf\n";
                    $data .= "4. Physical disability\n";
                    $data .= "5. Mental health conditions\n";
                    $data .= "6. Albinism\n";
                } else if ($ussd->data == 'register-disability') {
                    $ussd->data = 'register-district-letters';
                    $ussd->save();
                    $data = "Enter at least 3 leters of your district\n";
                } else if ($ussd->data == 'register-district-letters') {
                    $ussd->data = 'register-district-select';
                    $ussd->save();
                    $data = "Select District\n";
                    $data .= "1. Kasese\n";
                    $data .= "2. Kampala\n";
                    $data .= "3. Mbarara\n";
                    $data .= "4. Jinja\n";
                } else if ($ussd->data == 'register-district-select') {
                    $ussd->data = 'register-education';
                    $ussd->save();
                    $data = "Education Level\n";
                    $data .= "1. Primary\n";
                    $data .= "2. Secondary\n";
                    $data .= "3. A-Level\n";
                    $data .= "4. Bachelors\n";
                    $data .= "5. P.h.D\n";
                    $data .= "6. None\n";
                } else if ($ussd->data == 'register-education') {
                    $ussd->data = 'register-education';
                    $ussd->save();
                    $data = "You have successfully registered a person with disability.\n";
                    $data .= "THANK YOU!";
                    $action = "end";
                }
            }
        }


        $myResp = '<?xml version="1.0"?>
        <USSDResponse>' .
            $TransactionId .
            $TransactionTime .
            '<USSDResponseString>' .
            "" . $data . '</USSDResponseString>' .
            '<USSDAction>' . $action . '</USSDAction>' .
            '</USSDResponse>';
        die($myResp);
    }
}
