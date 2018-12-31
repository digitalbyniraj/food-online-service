<?php


include "config.php";

    
                $f_name =  $_POST["f_name"];
              $l_name =   $_POST["l_name"];
               $email=   $_POST['email'];
              $number=   $_POST['number'];
               
              $password= $_POST['password'];
             
              $address1=   $_POST['address1'];
              	$address2 =   $_POST['address2'];
            $city=   $_POST['city'];
$pin_code=$_POST['pin'];
           $state=   $_POST['state'];
$name="/^[a-zA-Z]+$/";
$emailvalidation ="/^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$mobile ="/^[0-9]+$/";

   if(empty($f_name) || empty($l_name) || empty($email) || empty($number)){
    
    echo"
    <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>please fill  the give  field ....</b>
    
    </div>
    ";
    
    exit();
} else
   {
        if(!preg_match($name,$f_name)){
        echo"
        <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>$username is not valid</b>
    
    </div>
        ";
        exit();
    }

if(!preg_match($name,$l_name)){
        echo"
          <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> $l_name is not valid</b>
    
    </div>
        
       ";
        exit();
    }
if(!preg_match($emailvalidation,$email)){
        echo"
              <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>$email is not valid email</b>
    
    </div>
        
        
        ";
        exit();
    }
if(!(strlen($number) ==10)){
    echo"
       <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> 10 digit mobile no is  valid only</b>
    
    </div>
    
    
   ";
        exit();
    
}
if(strlen($password)  <6){
        echo"
        
           <div class='alert alert-danger'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>password is weak</b>
    
    </div>
        
        ";
        exit();
    }


if(!preg_match($mobile,$number)){
        echo" 
        
           <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> $number is not a valid number</b>
    
    </div>
        
       ";
        exit();
    }

$sql= "select user_id from user where email='$email' LIMIT 1";
       $check_query= mysqli_query($conn,$sql);
       $count_email= mysqli_num_rows($check_query);
       if($count_email >0){
           
           echo"email is already avilable try another email";
       exit();
           
       }else{
           
           $sql="INSERT INTO `user` (`user_id`, `f_name`, `l_name`, `email`, `mobile`, `password`, `address1`, `address2`, `city`,`pin_code`, `state`) VALUES (NULL, '$f_name', '$l_name', '$email', '$number', '$password',  '$address1', '$address2 ', '$city','$pin_code','$state')";
           $run_query=mysqli_query($conn,$sql);
           if($run_query){
               echo"
                <div class='alert alert-success'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>  registertion is successfully</b>
    
    </div>
               
               
               
              ";
           }
       }
       

       
   }

   





?>
