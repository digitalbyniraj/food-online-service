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
       <p><br/></p> 

    <div style="width: 500px; margin:0 auto;">
        
        
        
	<form method="post" autocomplete="on" name="loginform" action="#">

<div class="panel panel-primary">


    <div class="panel-heading"><center>Login</center></div></div>
<label for="email">Email</label>
        <input type="email"  placeholder="Email......."class="form-control" id="email" name="email" autocomplete="off" required/ >
    
    
    
    <input type="text"  value="" placeholder="Username" name="username" required />
    <input type="password" value="" placeholder="Password" name="password"/>
    <input type="submit" value="SUBMIT" name="sub" class="a">
    </form>
    
        </div>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","schools");
if($conn->connect_error)
{
	echo $conn->connect_error;
}
if(isset($_POST["sub"]))
{
	$sql="select * from admin where user='".$_POST['username']."' AND password='".$_POST['password']."'";
	$result=$conn->query($sql);
	if(mysqli_num_rows($result)>0)
	{
	echo "<script> window.open('menu.php'); </script>";
	}
	else
	{
		echo "<div style='color:#ff656c'><center><b>Wrong UserName/Password</b></center><div>";
	}
}
?>