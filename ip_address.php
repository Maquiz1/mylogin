<?php
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $ip_list = array('127.0.0.1'.'100.100.100.100');
    if($ip_address = '127.0.0.1'){
        print_r('Your Blocked Sir');
        die();
    }


?>


<h1>WELCOME <?php print_r($ip_address); ?></h1>