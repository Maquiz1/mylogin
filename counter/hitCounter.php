<?php
    //File counter NON UNIQUE

    // function hitCounter(){
    //     $file = 'counter.txt';
    //     $fileOpen = fopen($file,'r');
    //     $fileread = fread($fileOpen,filesize($file));
                
    //     if($fileread){
    //         $read = true;
    //         echo $fileread;
                        
    //     }else{
    //         $read = false;
            
    //     }

    //     fclose($fileOpen);     


    // if($read){
    //     $newRead = $fileread + 1;
    //     $fileOpen = fopen($file,'w');
    //     $filewrite = fwrite($fileOpen,$newRead);
               

    // }else{
    //     echo 'file error';
    // }

    // fclose($fileOpen);
    
        
    // }

    
    //UNIQUE COUNTER WITH IP ADDRESS
  
    function ipHitCounter(){
        $myIp = $_SERVER['REMOTE_ADDR'];
        $ip = 'ipList.txt';
        $readIpList = file($ip);     //Thid return ana array
        foreach($readIpList as $ip){
            $ipSingle = trim($ip);          //TRIM IS NECESSARY TO GET IP ADRESS WITHOUT SPACE
            
            if($ipSingle == $myIp){
                $ipFound = true;
            break;
            }else{
                $ipFound = false;
            }

        }
        
        if(!$ipFound){
           //Read what is in the counter and return the number ip found
            $ipCount = 'count.txt';
            $fileSize = filesize($ipCount);
            $countOpen = fopen($ipCount,'r');
            $countRead = fread($countOpen,$fileSize);
            fclose($countOpen);

            //Increment the current number of ip by 1
            $newCount =  $CountRead + 1;

            //Overwrite/Update the ncurrent with the new one
            $countOpen = fopen($ipCount,'w');
            $countAdd = fwrite($countOpen,$newCount);
            fclose($countOpen);



            //Finally Add the Ip to the Iplists
            $ipOpen = fopen($ip,'a');
            $ipAdd = fwrite($ipOpen,$myIp."\n");
            if($ipAdd){
                
                echo 'ip Added to the List';
                
            }else{
                echo 'error adding ip address';
            }
            fclose($ipOpen);
            
            

        }else{
            echo 'Your ip is already in the list';
        }
        
    }
    
?>