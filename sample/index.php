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
     <script type="text/javascript" src="js/selector.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
	<script src="menu.js"></script>
    	<link href="css/menu.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    



</head>
    <body>
 <div>
  <h2>Payment Gateway Testing Sample</h2>
  <h3>Fill the form and submit it for starting the transaction...</h3>
 </div>


               
          

<table>
 <form name="postForm" action="form_process.php" method="POST" >
 <tr><td>txnid</td><td><input type="text" name="txnid" value="<?php echo $txnid=time().rand(1000,99999); ?>" /></td></tr>
 <tr><td>amount</td><td><input type="text" name="amount" value="" /></td></tr>
 <tr><td>firstname</td><td><input type="text" name="firstname" value="" /></td></tr>
 <tr><td>email</td><td><input type="text" name="email" value="" /></td></tr>
 <tr><td>phone</td><td><input type="text" name="phone" value="" /></td></tr>
 <tr><td>productinfo</td><td><input type="text" name="productinfo" value="" /></td></tr>
 <tr><td>success url</td><td><input type="hidden" name="surl" value="https://localhost/online/sample/success.php" size="64" /></td></tr>
 <tr><td>failure url</td><td><input type="hidden" name="furl" value="https://localhost/online/sample/fail.php" size="64" /></td></tr>
 <tr><td><input type="submit" /></td><td><input type="reset" /></td></tr>
 </form>
</table>

    </body>
</html>
