<?php
    $offset = 0;
    $str = 'This is the person who is not we real want ,so he is not required in here';
    $strlength = strlen($str);
    $find = 'is';
    
    while($strpos = strpos($str,$find,$offset)){
        echo $strpos;
        $offset = $strpos + $strlength;
    }


?>