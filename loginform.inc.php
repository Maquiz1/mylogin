<?php
    include 'connect.inc.php';
    include 'core.inc.php';
    


    if(isset($_POST['username']) && isset($_POST['passwords'])){
        $username = $_POST['username'];
        $password = $_POST['passwords'];

        $password_hash = md5($password);

        if(!empty($username) && !empty($password)){ 

            $query = "SELECT * FROM users WHERE username='$username' AND passwords='$password_hash'";
            $query_run = mysqli_query($conn,$query);
            
            if($query_run){
            $query_num_rows = mysqli_num_rows($query_run);
            
                if($query_num_rows==0){
                echo 'Invalid username/password combination';
                }else if($query_num_rows==1){
                    while($row = mysqli_fetch_assoc($query_run)) {
                        $user_id = $row["id"];
                        $_SESSION['user_id'] = $user_id;
                        header('Location: index.php');
                      }

                }
            }else{
            echo 'your query didnt run';
        }    
        }else{
            echo 'You must enter a username aand password';
        }

    }

?>



<!DOCTYPE html>
<html>
<body>
<form action="<?php echo $current_file; ?>" method="POST">
Username : <input type="text" name="username"> Password: <input type="password" name="passwords">
<input type="submit" value="LOg in">

</form>
</body>
</html>