<?php
include "config.php";
session_start();

if(isset($_POST["userLogin"])){
    
    $email =   mysqli_real_escape_string($conn,$_POST["userEmail"]);
    $password =   md5($_POST["userPassword"]);
    $sql ="SELECT * FROM user WHERE email =  '$email' AND password= '$password'";
    $run_query = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($run_query);
    if($count ==1){
        $row=mysqli_fetch_array($run_query);
        $_SESSION["uid"] = $row["user_id"];
        $_SESSION["name"] = $row["f_name"];
       
        
        
        echo  "true";
        
        
        
    }
    
    
}



?>

<!DOCTYPE html>
<html>
<head>
    <title>India 1st cook shopping in online </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="font/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="">

	
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
	<script src="menu.js"></script>
    	<link href="css/menu.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    



</head>
<body>
    
 <nav class ="navbar navbar-inverse ">

 
     <div class="container-fluid" style="margin-top:5px;">
        <div class="row">
           <div class="col-sm-4">
            <ul class="list-inline  top-v1-data">
                <li>
                <a class="list-group-item" href="nirajindia45@gmail.com">cookinfocom@gmail.com</a>
                    </li>
                <li>
                 <a  class="list-group-item" href="#">18000000000</a>
                    </li>
                  </ul>
        </div>
            <div class="col-sm-5">
                <ul class="list-inline  top-v1-data">
               
              <li>
                <a  class="list-group-item" href="#">PAY ONLINE</a>
                    </li>
                    <li style="width:200px;"> <input class="form-control" id="search" title="Easy to find out" type="text" placeholder="search" size="30" maxlength="255"></li>
                       <li width:50px;> <button class="btn btn-success" id="search_btn">Search</button></li>
                  </ul>
        </div>
              <div class="col-sm-3">
   
                  <ul class="nav navbar-nav navbar-right">
         <li class="active"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Carts<span class="badge">0</span></a>
                
                <div class="dropdown-menu" style="width:500px;">
    
        <div class="panel panel-info">
                    
                    
                <div class="panel-heading">
                    <div class="row">
                    <div class="col-md-2">Sl.no</div>
                         <div class="col-md-2">Name</div>
                         <div class="col-md-3">Image</div>
                         <div class="col-md-2">Price</div>
                          <div class="col-md-3">Quantity</div>
                       
                    
                    </div>
        
        </div>
          <div class="panel-body">
        
        </div>
        <div class="panel-footer">
        
        </div>
                    </div>
    </div>
                        </li>
<li  class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span>Sign-In</a>
    
    
    
    
    <ul class="dropdown-menu">
	

	<li><a href="#">Admin</a> </li>
	<li><a href="login.php">USER</a> </li>


</ul>
    
    </li>
<li> <a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign-Up</a></li>	
</ul>

            
            
</div>
</div>
</div>
</nav>
    <div class="clear"></div>   
    
    
    
    
    
	
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand"> cooking shop</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#niraj">
					<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>


				</button>
			</div>
			<div class="collapse navbar-collapse" id="niraj">
			<ul class="nav navbar-nav">
			<li> <a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
 <div class="container">
     <br>
     <br>
<div style="width: 500px; margin:0 auto;">
	<form method="post" autocomplete="off">

<div class="panel panel-primary">


    <div class="panel-heading"><center>Login</center></div></div>
    <label for="email">Email</label>
        <input type="email"  placeholder="Email......."class="form-control" id="email" autocomplete="off" required/ >
    
        <label for="password">PASSWORD</label>
    
    
    <input type="password" placeholder="password .. .. .." class="form-control" id="password" autocomplete="off"><br>
    <a href="#" style="color:green;">Forgot the password</a>
        <br/>
    
      <center>  <div class="btn-group btn-group-lg">
        
       <input type="submit" name="login" id="login" value="Login" class="btn btn-primary">
             </div></center><br>
        <div class="panel-footer" id ="e_msg"></div>
    <a href="signup.php"> REGISTER</a>
    
    
    
    
    </form>
    </div>








</div>
    </body>
</html>