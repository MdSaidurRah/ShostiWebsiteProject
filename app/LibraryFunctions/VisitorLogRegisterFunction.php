<?php

namespace App\LibraryFunctions;
use Illuminate\Http\Request;
use Carbon;

use Illuminate\Support\Facades\DB;
use Log;
use Illuminate\Support\Facades\Http;

class VisitorLogRegisterFunction
{

    public function registerVisitoreAccess(Request $request)
    {
        $visitorIP= $this->getClientIPaddress($request);
        $mytime = Carbon\Carbon::now();
        $hitTime =  $mytime->toTimeString();
        $hitDate =  $mytime->toDateString();
        $hitpath = $request->path();
        $hiturl  = $request->url();
        $hitmethod  = $request->method();
        $site = "EduInnTech Site";

        $statement= "insert into visitor_access_log(siteName,visitorIP, hitTime, hitDate, hitUrl, hitPath, hitMethod)values ( '$site','$visitorIP','$hitTime','$hitDate','$hitpath','$hiturl','$hitmethod')";
        $query = DB::select($statement);

        return TRUE;
    }


    public function getClientIPaddress(Request $request) {

        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP)){
            $clientIp = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP)){
            $clientIp = $forward;
        }
        else{
            $clientIp = $remote;
        }

        return $clientIp;
    }



}
