<?php
include "config.php";

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
         <div class="row">
           <div class="col-md-3"></div>
          <div class="col-md-6" id="signup_msg">
    <!-- alert for sign up -->
      
    </div>
             
         </div>
    
     <br>
     <br>
         
          
<div style="width: 600px; margin:0 auto;">
 
   
    
   
	<form method="POST">

<div class="panel panel-primary">


    <div class="panel-heading"><center>Registration Form<br>Please fill in the form below.</center></div></div>
        <div class="col-md-6">
         <label for="f_name">First Name</label>
        <input type="text"  placeholder="first name" class="form-control" id="f_name" name="f_name" autocomplete="off">
         </div>
         <div class="col-md-6">
          <label for="l_name">Last Name</label>
        <input type="text"  placeholder="last name" class="form-control" id="l_name" name="l_name" autocomplete="off" >
        </div>
         <div class="col-md-6">
        <label for="email">Email</label>
        <input type="text"  placeholder="Email......." class="form-control" id="email" name="email" autocomplete="off" />
        </div>
              <div class="col-md-6">
    <label for="mobile">Mobile</label>
        <input type="text" placeholder="mobile no ......." class="form-control" id="number" name="number" autocomplete="off" >
        </div>
         <div class="col-md-6">
          <label for="password">Password</label>
        <input type="password"  placeholder="Password ......." class="form-control"  id="password" name="password" autocomplete="off"> 
        </div>
           
              <div class="col-md-6">
      <label for="address"><b>Address1</b></label> 
        <input type="text" placeholder="street address" class="form-control" name="address1"  id="address1" autocomplete="off">
        </div>
             <div class="col-md-6">
      <label for="near">Near</label> 
        <input type="text" placeholder="street address line 2" class="form-control" name="address2"  id="address2" autocomplete="off">
        </div>
     <div class="col-md-6">
      <label for="city">City</label> 
        <input type="text" placeholder="Enter your city name" class="form-control" name="city"  id="city" autocomplete="off">
        </div>
           <div class="col-md-6">
      <label for="pin"><b>Pin Code</b></label> 
        <input type="text" placeholder="pin code" class="form-control" name="pin"  id="pin"  autocomplete="off" required/>
        </div>
                <div class="col-md-6">
      <label for="State">State</label> 
        <input type="text" placeholder="Enter your state" class="form-control" name="state"  id="state" autocomplete="off">
        </div>
     <div class="col-md-12"><br>
            <center> <input type="button" id="signup_button" name="signup_button" class="btn btn-primary" value="Sing Up">&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php"><b>LOGIN here</b></a></center>
            
        </div>
           
      <input type="checkbox" checked="checked"> Remember me
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
  </form>
                     <hr/>
         
  
         </div>
    </div>
    
    
    </body>
</html>