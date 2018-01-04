<?php
namespace App\Lib;
use App\Lib\Base64;


class SSR{

    static  public function decode($ssr_link)
    {
//        $ssr_link = "ZnJlZS5uYW1laXAuY2x1Yjo0MTE0NDphdXRoX2FlczEyOF9tZDU6Y2hhY2hhMjAtaWV0Zjp0bHMxLjJfdGlja2V0X2F1dGg6TkRFeE5EUTVPVGs1SlEvP29iZnNwYXJhbT1ZMnh2ZFdSbWJHRnlaUzVqYjIwJnJlbWFya3M9Um5KbFpWTlRVZyZncm91cD1SbkpsWlZOVFVn";
//        $ssr_link = "ssr://dHRjYzk5OTkuZGRucy5uZXQ6NjU1MzA6YXV0aF9jaGFpbl9hOm5vbmU6aHR0cF9zaW1wbGU6ZEhSall6ZzJPRGcvP29iZnNwYXJhbT0mcHJvdG9wYXJhbT0mcmVtYXJrcz01WS13NXJtLTZhdVk2WUNmNklxQzU0SzUmZ3JvdXA9";

        $ssr_link = substr($ssr_link,6);


        $ssr_link = Base64::urlsafe_b64decode($ssr_link);
        $h = explode('/?',$ssr_link);
        list($host, $port, $protocol,$method,$obfs,$pwd) = explode(':',$h[0]);
        $pwd = Base64::urlsafe_b64decode($pwd);
        $protoparam = "";
        $obfsparam  = "";
        $remarks    = "";

        $arr = array();
        parse_str($h[1],$arr);

        if(isset($arr['protoparam'])){
            $protoparam = Base64::urlsafe_b64decode($arr['protoparam']);
        }
        if(isset($arr['obfsparam'])){
            $obfsparam = Base64::urlsafe_b64decode($arr['obfsparam']);
        }
        if(isset($arr['remarks'])){
            $remarks = Base64::urlsafe_b64decode($arr['remarks']);
        }
        return array(
            'host' => $host,
            'port' => $port,
            'protocol' => $protocol,
            'method' => $method,
            'obfs' => $obfs,
            'pwd' => $pwd,
            'protoparam' => $protoparam,
            'obfsparam' => $obfsparam,
            'remarks' => $remarks,
        );
    }
}