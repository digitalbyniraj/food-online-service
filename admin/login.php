
<?php

  include "config.php";
   session_start();
    if(isset($_POST["login"])){
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $password = md5($_POST["password"]);
    
    $sql ="SELECT  * FROM user WHERE email ='$email' AND password ='$password'";
    $run_query = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($run_query);
    if($count == 1 ){
        
           $row =mysqli_fetch_array($run_query);
            $_SESSION["uid"]=$row['user_id'];
            $_SESSION["name"]=$row['f_name'];
        
        
        echo "trueasdsfghkljk";
    }
    
    
}
?>