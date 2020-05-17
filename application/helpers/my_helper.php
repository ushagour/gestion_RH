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
