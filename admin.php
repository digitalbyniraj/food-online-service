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
			     <li> <a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    
          <div class="card" style="width: 40rem;margin:0 auto;">
              <form method="post" autocomplete="on">
<div class="panel panel-primary">
<center>              <img class="card-img-top" style="width:40%;margin:0 auto;" height="150px" src="images/login.png" alt="Card image cap"></center><br>
 <label for="email"><span>Email</span></label>
        <input type="email"  placeholder="Email......."class="form-control" id="email" name="email" autocomplete="off" required/ >
    <label for="password">PASSWORD</label>
    <input type="password" placeholder="password .. .. .." class="form-control" id="password" name= "password"autocomplete="off"><br>
    <a href="#" style="color:green;">Forgot the password</a>
        <br/>
    <center>  <div class="btn-group btn-group-lg">
         <input type="submit" name="login" id="login" value="Login" class="btn btn-primary">
             </div></center><br>
    <span> <a href="signup.php">&nbsp;&nbsp; REGISTER</a></span>
</div>
    </form>
    </div>
    </body>
</html>
<?php
include"config.php";

if(isset($_POST["login"]))
{
	$sql="select * from user where email ='".$_POST['email']."' AND password='".$_POST['password']."' ";
	$result=$conn->query($sql);
    if(mysqli_num_rows($result)>0){
        session_start();
	while($row=$result->fetch_assoc())
	{
        
        $id=$row['user_id'];
        	$t=$row['f_name'];
    }
		$_SESSION["u"]=$id;
        $_SESSION["name"]=$t;
        header("location:user_details.php");
    }else{
        echo"<div style='color:#ff656c'><center><b>Wrong UserName/Password</b> <span>If You are not Register Please Register First <a href='signup.php'>&nbsp;&nbsp; REGISTER</a><span></center><div>";
    }

	
}
?>