<?php
    //Fille writing line by line Manually
    /*
    $file = fopen("sms.txt","w");
    fwrite($file,'Maquiz1'."\n");
    fwrite($file,'Maquiz2'."\n");
    fwrite($file,'Maquiz3'."\n");

    fclose($file);

    echo 'File Written Successful';
    */


    //file appending line by line
    /*
    if(isset($_POST['name'])){
        $name = $_POST['name'];

        if(!empty($_POST['name'])){
            $file = fopen('sms.txt','a');
            fwrite($file,$name."\n");
            fclose($file);

            echo "Name Entered";

        }else{
            echo "Please enter a Name first";
        }
    }
    */
    
    //file Reading line by line with FWRITE METHOD AND FILE() METHOD
    
    //     if(isset($_POST['name'])){
    //     $name = $_POST['name'];

    //     if(!empty($_POST['name'])){
    //         $file = fopen('sms.txt','a');
    //         fwrite($file,$name."\n");
    //         fclose($file);

    //         echo "Names Entered are:";
    //         $fread = file('sms.txt');
    //         $count = 1;
    //         $count_read = count($fread);         //count function determine size of an aaray returned by file() method
    //         foreach($fread as $names){
    //             echo trim($names);              //Remove white space at the end and beginning of an array/output with TRIM METHOD.
    //             if($count < $count_read){
    //                 echo ', ';
    //             } else{
    //                 echo '.';
    //             }
                
    //             $count++;
    //         }
           

    //     }else{
    //         echo "Please enter a Name first";
    //     }
    // }
    

    //  //file Reading with FREAD METHOD and EXPLODE AND IMPLODE.
    //  $fileName = 'sms.txt';
    //  $fileSize = filesize($fileName);
    //  $file = fopen($fileName,'r'); 
    //  $fread = fread($file,$fileSize);
    //  $fileArray = explode(' ',$fread);
    //  $fileArray = implode(' ',$fread);
    //  print_r($fileArray);
    //  fclose($file);

        
    //Listing Files in a directories
    // $directory = 'files';
    // if($openDir = opendir($directory)){
    //     echo 'The List inside the '.' '.'<strong>'.$directory.'</strong>'. ' '.'are ';
    //     while($readDir = readdir($openDir)){
    //         if($readDir != '..'){
    //             echo '<a href="'.$directory.'/'.$readDir.'">'.$readDir.'</a><br>';
    //         }
           
    //     }
                
    // }else{
    //     echo 'There is an error Opening Directory/Listing your Files';
    // }    
    

    //  Check if file exists.
    //  $fileName = 'delete.txt';
    //  $fileExists = file_exists($fileName);
    //  if($fileExists){
    //      echo 'File Already exists';
    //  }else{
    //     $file = fopen($fileName,'w'); 
    //     $fWrite = fwrite($file,'Jane');
    //     fclose($file);

     //}


    //  //  Delete a file.
    //  $fileName = 'delete.txt';
    //  $fileDelete = unlink($fileName);
    //  if(@$fileDelete){                           @ Symbol remove php warning
    //      echo 'File Has been Deleted';
    //  }else{
    //     echo  'File can not be deleted';

    //  }
     
    //  Rename a file.
    // $fileName = '5302txt';
    // $newName = rand(1000,9999);
    // $fileRename = rename($fileName,$newName.'.txt');
    
    // if($fileRename){
    //     echo 'File Has been renamed to'. ' ' .$fileRename.'.txt';
    // }else{
    //    echo  'File can not be renamed';

    // }


    //Upload a file
   
    // $name = $_FILES['file']['name'];
    // $tempName = $_FILES['file']['tmp_name'];
    // $size = $_FILES['file']['size'];
    // $type = $_FILES['file']['type'];
    // $extension = strtolower(substr($name,strpos($name,'.')+1));
    // //$error = $_FILES['file']['error'];
    // if(isset($name)){
    //     if(!empty($name)){
    //         $location = "filesUploaded/";
    //         $sizeMax = 2097152;

    //         if($size <= $sizeMax && ($type == 'image/jpeg' || $type == 'image/jpg') && ($extension == 'jpeg' || $extension == 'jpg')){
    //             $targetLocation = basename($location.$name);
    //             $uploadedFiles = move_uploaded_file($tempName,$targetLocation);
                        
    //             if($uploadedFiles){
                
    //                 echo 'Your file hase been uploaded';
    //             }else{
    //                 echo 'Their is an error uploading a file'.' '.$name;
    //             }

    //         }else{
                
    //                 echo 'Size should not exceed 2MBs and JPEG OR JPG';
    //         }
            
    //     }else{
    //         echo 'please choose a file';
    //     }
    // }
  
?>

<form action="file.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"> <br><br>
    <input type="submit" name="submit" value="Submit">
</form>