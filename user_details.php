<?php
session_start();
if(!isset($_SESSION["u"])){
    header("location:index.php");
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
                    <a class="list-group-item" href="nirajindia45@gmail.com"><i class="glyphicon glyphicon-envelope" style="font-size:15px;color:orange;padding-top:5px;"></i>cookinfocom@gmail.com</a>
                    </li>
                <li>
                    
                 <a  class="list-group-item" href="#"><i class="fa fa-phone" style="font-size:15px;color:black;padding-top:7px;"></i>18000000000</a>
                    </li>
                  </ul>
        </div>
            <div class="col-sm-5">
                <ul class="list-inline  top-v1-data">
              <li>
                <a  class="list-group-item" href="#"><i class="fas fa-rupee-sign" style="font-size:15px;color:black;padding-top:7px;"></i>PAY ONLINE</a>
                    </li>
                    <li style="font-size:15px;color:black;padding-top:7px;"> <input class="form-control" id="search" title="Easy to find out" type="text" placeholder="search our meals" size="30" maxlength="255"></li>
                       <li width:50px;> <button class="btn btn-success" id="search_btn"><span class="glyphicon glyphicon-search"></span></button></li>
                  </ul>
        </div>
              <div class="col-sm-3">
   
                  <ul class="nav navbar-nav navbar-right">
         <li class="active"> <a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Carts<span class="badge">0</span></a>
                
                <div class="dropdown-menu" style="width:500px;">
    
        <div class="panel panel-info">
                    <div class="panel-heading">
                    <div class="row">
                    <div class="col-md-3">Sl.no</div>
                         <div class="col-md-3">Name</div>
                         <div class="col-md-3">Image</div>
                         <div class="col-md-3">Price</div>
                        
                 </div>
            </div>
                    
          <div class="panel-body">
              <div id="cart_food">
            <!-- <div class="row">
                    <div class="col-md-3">Sl.no</div>
                         <div class="col-md-3">Name</div>
                         <div class="col-md-3">Image</div>
                         <div class="col-md-3">Price</div>
                         </div>-->
                  </div>
            </div>

        <div class="panel-footer">
              </div>
            </div>
                    </div>
            
    
                        </li>
<li  class="dropdown"> <a href="#"  class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span><?php echo "Hi,&nbsp;".$_SESSION["name"]; ?></a>
    
    
    
    
    <ul class="dropdown-menu">
	

   <li> <a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
        <li><a href="#">change password</a></li>
         <li><a href="enquiry.php">Feedback</a></li>
        <li><a href="logout.php">Logout</a></li>

</ul>
    
    </li>	
</ul>

            
            
</div>
</div>
</div>
</nav>
    <div class="clear"></div>    
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-2">
                <img src="images/cooklogo.png"/>
                </div>
                <div class="col-sm-10">          
<h3>YOUR PROBLEM IS OUR PROBLEM</h3>
<p>  India 1st Online cooking shopping website in your home Town <br> distance is not matter <br> fast delivery  in your home   </p>
                </div>
            </div>
        </div>
    
    
    
    
    
	
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand glyphicon glyphicon-home">cooking shop</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#niraj">
					<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>


				</button>
			</div>
			<div class="collapse navbar-collapse" id="niraj">
			<ul class="nav navbar-nav">
			<li> <a href=""><span class=""></span>Home</a></li>
			<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Special Deals<span class="caret"></span></a>
<ul class="dropdown-menu">
	

	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>

</ul>
</li>
			<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Offers<span class="caret"></span></a>
<ul class="dropdown-menu">
	

	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>

</ul>
</li>
		<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<span class="caret"></span></a>
<ul class="dropdown-menu">
	

	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>

</ul>
</li></ul>
<ul class="nav navbar-nav navbar-right">
		<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Abouts Us<span class="caret"></span></a>
<ul class="dropdown-menu">
	

	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>

</ul>
</li>
  
    
    <li  class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon"></span>Christmas<span class="caret"></span></a>
    
    
    
    
    <ul class="dropdown-menu">
	
<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	


</ul>
    
    </li>
  <li  class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon"></span>Gift<span class="caret"></span></a>    
    <ul class="dropdown-menu">
	
<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	<li><a href="#">2 in one </a> </li>
	


</ul>
    
    </li>
</ul>
</div>
</div>
</nav>

    
  <div class="clear"></div>    

    
    
    
    
    
    <div class="container-fluid">
    <div class="row">
        
        <div class="col-sm-1"></div>
        
                <div class="col-sm-2">
                    <div id="get_category">
                    
                    </div>
    <!--    <div class="nav nav-pills nav-stacked">
                   
                              <li class="active"><a href="#">Categories</a></li>
                              <li><a href="#">Categories</a></li>
                              <li><a href="#">Categories</a></li>
                              <li><a href="#">Categories</a></li>
                              <li><a href="#">Categories</a></li>
                    </div> -->
                    
                                        <div id="get_range">

                    </div>
                    
                      <!--    <div class="nav nav-pills nav-stacked">
                   
                              <li class="active"><a href="#">range</a></li>
                              <li><a href="#">Range</a></li>
                              <li><a href="#">Range</a></li>
                              <li><a href="#">range</a></li>
                              <li><a href="#">range</a></li>
                    </div>-->
        </div>
                <div class="col-sm-9">
                    <div class="row">
                    <div class="col-md-12" id="food_msg">
                        </div>
                    
                    </div>
        
        <div class="panel panel-info">
                    <div class="panel-heading">FOOD'S</div>
            <div class="panel-body">
                <div id="get_food">
                    <!-- here we get food jquery ajax request -->
                </div>
                
                
                 
       <!-- <div class="col-md-4">
                <div class="panel panel-info">
                
                <div class="panel-heading">Meals</div>
                    <div class="panel-body">
                    
                    <img src="images/1.jfif"/>
                    </div>
                    <div class="panel-heading">Rs=50.00
                    <button style="float:right;" class="btn btn-danger btn-xs">Add to Cart</button>
                
                </div>
                </div>
                </div>-->
            </div>
                    </div>
                    
   <div class="panel-footer"> 
        <div class="row">
                    <div class="col-md-12">
                      <center> 
                          <ul class="pagination" id="pageno">
                        <li>
                            <a href="#">1</a>
                              </li>
                         </ul>
                        </center>
                        </div>
                        </div>
                        </div> 
                        </div>
                        </div>
                        </div>
                       
        
<div class="container-fluid navbar-default">
	<div class="row">
		<div class="col-sm-4">
			 <h3> Contact us:</h3>
            <p>
             NAME:- NIRAJ KUMAR  <br> 
                 BRANCH:- COMPUTER SCIENCE ENGG.<br> 
                 ADDRESS :-<br> 
                           DIST:- JAMSHEDPUR<br> 
                           PIN CODE:- !@@$#%^<br> 
                     MOBILE NO:- 84347347**<br> 
                     EMAIL ID:- nirajindia45@gmail.com
            </p>

</div>
<div class="col-sm-4">
	<ul class="list-group">
		          <li class="list-group-item"><a href="#"><i class="fa fa-facebook"></i> &nbsp; &nbsp;Facebook</a></li>
		         <li class="list-group-item"><a href="#"><i class="fa fa-twitter"></i>&nbsp; &nbsp;Twitter</a></li>
				<li class="list-group-item"><a href="#"><i class="fa fa-instagram"></i>&nbsp; &nbsp;Instagram</a></li>
            <li class="list-group-item"><a href="#"><i class="fa fa-youtube"></i>&nbsp; &nbsp;Youtube</a></li>
            <li class="list-group-item"><a href="#"><i class="fa fa-google-plus"></i>&nbsp; &nbsp;GOOGLE+</a>

	</ul>
		
	</div>
	<div class="col-sm-4">
		<img src="images/hello.jpg" class="img-circle" width="300" /><br>
		<a class="btn btn-primary" href="youtube.com">Go to my youtube</a>
		
	</div>
</div>
    </div>
    
    
    
                    
        
</body>
</html>