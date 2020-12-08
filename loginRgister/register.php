<?php
    require 'core.inc.php';
    require 'connect.inc.php';

    if(!loggedin()){
        if(isset($_POST['username']) && isset($_POST['passwords']) && isset($_POST['password2']) && isset($_POST['firstname']) && isset($_POST['surname'])){

                $username = $_POST['username'];
                $password = $_POST['passwords'];
                $password2 = $_POST['password2'];
                $firstname = $_POST['firstname'] ;
                $surname = $_POST['surname'];


                $password_hash = md5($password);

            if(!empty($_POST['username'] && $_POST['passwords'] && $_POST['password2'] && $_POST['firstname'] && $_POST['surname'])){
                if($password != $password2){
                    echo "Password do not match";
                }else{

                    $sql = "SELECT username FROM users WHERE username='$username'";
                    $query = mysqli_query($conn,$sql);
                    $rows = mysqli_num_rows($query);

                    if($rows == 1){
                        echo "A user Exists";
                    }else{
                        $sql = "INSERT INTO users (username,passwords,firstname,surname) VALUES ('$username','$password_hash',
                                '$firstname','$surname')";
                        $query = mysqli_query($conn,$sql);
                        
                        if($query){
                            header('Location: success_registered.php');
                        }else{
                            echo "Sorry Try again later,Your there is an error!";
                        }
                    }
                

                
                }
            }else{
                echo "All field are required";
            }
        
        }
    }
?>



<html>
<body>
<form action="<?php echo $current_file; ?>" method="POST">
Username : <input type="text" name="username" value="<?php echo $username; ?>"> <br><br>
Password: <input type="password" name="passwords" value="<?php echo $password; ?>"> <br><br>
Confirm Password: <input type="password" name="password2"> <br><br>
First Name: <input type="text" name="firstname" value="<?php echo $firstname; ?>"> <br><br>
Sur Name: <input type="text" name="surname" value="<?php echo $surname; ?>"> <br><br>
<input type="submit" value="Register">

</form>
</body>
</html>