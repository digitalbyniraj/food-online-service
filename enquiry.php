<html>
<head>
<title>enquiry form</title>
<link href="css/style1.css" rel="stylesheet">
</head>
<body>
<div class="header">
<h1>Enquiry Form</h1>
	<form action="#" method="POST">
        <fieldset>
 <legend>Enquiry</legend>
            To
             
<div class="form">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <select  name="t1">
	<option value="Principal">Help Desk</option>
	<option value="Administrative Officer">Administrative Officer</option>
	<option value="Director">Director</option>
	
	
            </select> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
            
            
            
			 Name :
    <input type="taxt"  placeholder="Name" name="t2"> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
             
            </div>
            <div>
	  Email :
    <input type="taxt" placeholder="Please enter a valid email" name="t3">
           &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; Phone no :
    <input type="taxt"  placeholder="Mobi no" name="t4">
            </div>
            	  <h3>Subject :</h3>
        <textarea  rows="2" cols="80" placeholder="subject" name="t5"></textarea>
            <h3> Message :</h3>
    <textarea  rows="2" cols="80" placeholder="Enter message" name="t6"></textarea><br>
	
	
	
	
	
			   <a href="../">Cancel</a>
	
			<input type="submit" name="submit" value="Send"  />
			
 
        </fieldset>
			</form>
    </div>
			</body>
			</html>
<?php
$conn=mysqli_connect("localhost","root","","shopping");
if($conn->connect_error)
{
	echo $conn->connect_error;
}
if(isset($_POST["submit"]))
{
	$s1=$_POST["t1"];
	$s2=$_POST["t2"];
	$s3=$_POST["t3"];
	$s4=$_POST["t4"];
	$s5=$_POST["t5"];
	$s6=$_POST["t6"];
$sql="insert into enquiry values('".$s1."','".$s2."','".$s3."','".$s4."','".$s5."','".$s6."');";	
if(mysqli_query($conn,$sql))
{
	echo "<h3>Your Feedback is Successfully sent</h3>";
}

}
?>