<?php
    $option['title'] = 'Wiki Loves Monuments USA'; //Website Title/Name
    $option['debug'] = 'TRUE';//Set to TRUE for debug (Options: TRUE, FALSE)
    
    $publickey = '6LcridISAAAAAP8GA8k7rBSPgMekyZujK7eG5Dbk'; //Used for reCAPTCHA
    $privatekey = '6LcridISAAAAANR0HMWNtZq2NDKLwIp_Bw1NUGzO'; //Used for reCAPTCHA
    
    if(session_id() == ""){
    	session_start();
    }
?>