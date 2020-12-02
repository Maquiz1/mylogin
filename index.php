<?php
    include 'connect.inc.php';
    include 'core.inc.php';
    
    
    if(loggedin()){
        //$firstname = getUserField('firstname');
        //$surname = getUserField('surname');
        echo 'your Logged in ' .$firstname. '  '.$surname .' <a href="logout.php">Log out</a>';
        
    }else{
        include 'loginform.inc.php';
    }   
?>

