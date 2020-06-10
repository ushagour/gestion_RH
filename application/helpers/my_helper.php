<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('IsLogged')) {

    function IsLogged($cont)
    {
        if(!$cont->session->userdata('logged_in'))
        {redirect(base_url()."login");}
    }
}

if (!function_exists('encIT')) {

    function encIT($cont,$txt)
    {
        $cont->encryption->initialize(
            array(
                'driver' => 'openssl',
                    'cipher' => 'AES-192',
                    'mode' => 'ctr',
                    'key' => 'KaPdSgV'
            )
    );
    return $cont->encryption->encrypt($txt);


    }
}
if (!function_exists('decIT')) {

    function decIT($cont,$txt)
    {
        $cont->encryption->initialize(
            array(
                'driver' => 'openssl',
                    'cipher' => 'AES-192',
                    'mode' => 'ctr',
                    'key' => 'KaPdSgV'
            )
    );
   return  $cont->encryption->decrypt($txt);

    }
}
