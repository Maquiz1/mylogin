<?php
    //Fille writing line by line Manually
    // $file = fopen("sms.txt","w");
    // fwrite($file,'Maquiz1'."\n");
    // fwrite($file,'Maquiz2'."\n");
    // fwrite($file,'Maquiz3'."\n");

    // fclose($file);

    // echo 'File Written Successful';


    //file appending line by line
    // if(isset($_POST['name'])){
    //     $name = $_POST['name'];

    //     if(!empty($_POST['name'])){
    //         $file = fopen('sms.txt','a');
    //         fwrite($file,$name."\n");
    //         fclose($file);

    //         echo "Name Entered";

    //     }else{
    //         echo "Please enter a Name first";
    //     }
    // }
    
    //file Reading line by line
    if(isset($_POST['name'])){
        $name = $_POST['name'];

        if(!empty($_POST['name'])){
            $file = fopen('sms.txt','a');
            fwrite($file,$name."\n");
            fclose($file);

            echo "Names Entered are:";
            $fread = file('sms.txt');
            $count = 1;
            $count_read = count($fread);
            foreach($fread as $names){
                echo trim($names);              //Remove white space at the end and beginning of an array/output with TRIM METHOD.
                if($count < $count_read){
                    echo ', ';
                } else{
                    echo '.';
                }
                
                $count++;
            }
           

        }else{
            echo "Please enter a Name first";
        }
    }
      
    
    
    
?>

<form action="file.php" method="POST">
    <input type="text" name="name"> <br><br>
    <input type="submit" name="submit" value="Submit">
</form>