<?php
    $offset = 0;
    $str = 'This is the person who is not we real want ,so he is not required in here';
    $find = 'is';
    $strlength = strlen($find);
    
    
    while($strpos = strpos($str,$find,$offset)){
        echo $strpos.'<br>';
        $offset = $strpos + $strlength;
    }


?>