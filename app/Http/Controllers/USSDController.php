<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\USSD;
use Illuminate\Http\Request;

class USSDController extends Controller
{
    public function index(Request $r)
    {
        $input = $r->all();
        $ussd = new USSD();
        $ussd->data = json_encode($input);
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
        $data .= "<USSDAction></USSDAction>";

        header('Content-Type: application/xml');
        die('<?xml version="1.0"?><USSDResponse>' . $data . '</USSDResponse>');
    }
}
