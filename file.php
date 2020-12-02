<?php
    $file = fopen("names.txt","w");
    if($file){
        echo 'okey';
    }else{
        die('NOT ABLE TO CREATE A FILE'.mysqli_error($file));
    }
    
    

?>