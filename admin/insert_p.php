<?php
include("includes/db.php");

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
	<form action="insert_p.php" method="post" accept-charset="utf-8" enctype="multipart/form=data">
     <div class="container"> 
         <br>
         <br>
       
<div class="panel panel-primary">


    <div class="panel-heading"><center>Registration Form<br>Please fill in the form below.</center></div></div>

            
            <div class="col-md-6">
         <label for="f_name">Food Title</label>
        <input type="text"  placeholder="Food Title" class="form-control" id="f_name" name="f_title" autocomplete="off" >
         </div>
        <div class="col-md-12">
         <label for="f_cat">Food Category</label>        
<select name="p_cat">
<option>Select Category</option>
<?php
    
    $get_c="select * from categories";
    $run_c = mysqli_query($conn, $get_c);
    while($row_c =mysqli_fetch_array($run_c)){
            $c_id =  $row_c['c_id'];
             $c_title =  $row_c['c_title'];
            echo "<option value='$c_id'>$c_title</option>";
    }
    ?>
</select>
            </div>


         
         
         <div class="col-md-12">
         <label for="f_cat">Food Ranges</label>
                 
    <select name="f_range">
<option>Select range</option>
<?php
    
    $get_r="select * from ranges";
    $run_r = mysqli_query($conn, $get_r);
    while($row_c =mysqli_fetch_array($run_r)){
            $r_id =  $row_c['r_id'];
             $r_prices =  $row_c['r_prices'];
            echo "<option value='$r_id'>$r_prices</option>";
    }
    ?>
</select>
    </div>
  <div class="col-md-12">
         <label for="f_cat">Food Iimages</label>
<input type="file" name="p_img1"  class="form-control">
            </div>
            <div class="col-md-6">
         <label for="f_cat">Food Images2</label>
<input type="file" name="p_img2"  class="form-control">
            </div>

  <div class="col-md-6">
      <label for="f_cat">Food Prices</label><input type="text" name="p_price" class="form-control"></div>
            
  <div class="col-md-6">
      <label for="f_cat">Food Description</label><input type="text" name="p_price" class="form-control"></div>

  <div class="col-md-6">
      <label for="f_cat">Food Keywords</label><input type="text" name="p_price" class="form-control"></div>

<div class="col-md-12"><br>
            <center> <input type="button" id="signup_button" name="signup_button" class="btn btn-primary" value="Sing Up"></center>
        </div>


        </div>
    </form>
    </body>
</html>