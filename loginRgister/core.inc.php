<?php
    ob_start();
    session_start();

    $current_file = $_SERVER['SCRIPT_NAME'];
    $http_referer = $_SERVER['HTTP_REFERER'];

    function loggedin(){
       if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
           return true;
       }else{
           return false;
       }
    }

    // function getUserField($field){
    //     $user_id = $_SESSION['user_id'];
    //     $sql = "SELECT $field FROM users WHERE id ='$user_id'";
    //     $query = mysqli_query($conn, "SELECT $field FROM users WHERE id=1");

    //     if($query){
    //         while($row = mysqli_fetch_assoc($query)) {
    //             return $row["firstname"];
                        
    //         }  
    //     }
    // }
?>