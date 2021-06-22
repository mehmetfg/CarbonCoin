<?php
/**
 * Created by PhpStorm.
 * User: Mehmet F. GCGN
 * Date: 10.04.2021
 * Time: 17:00
 */
function set_site_data(){



    $data=\App\Models\User::where("web", request()->getHost())->first();



    if($data)
    {

        return  session(["info" =>$data]);
    }else
    {
        $data=DB::table("users")->first();

        return session(["info" => $data  ]);


    }



}
function get_user_dealer_ids(){


    if(auth_user()->isDealer() || auth_user()->isPartner() ){
        return  [auth_user()->id, auth_user()->dealer_id];
    }
    return [auth_user()->dealer_id, optional(auth_user()->dealer)->dealer_id];
}
function get_user_dealer_id(){

    if(auth_user()->isDealer() || auth_user()->isPartner() ){
        return  auth_user()->id;
    }
    return auth_user()->dealer_id;
}
function auth_user(){

    return auth("api")->user()?auth("api")->user():auth()->user();
}
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
