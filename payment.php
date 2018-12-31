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
                      <a href="index.php" class="navbar-brand glyphicon glyphicon-home">cooking shop</a>
                <li>
                <a class="list-group-item" href="nirajindia45@gmail.com">cookinfocom@gmail.com</a>
                    </li>
                
                  </ul>
        </div>
            <div class="col-sm-5">
                <ul class="list-inline  top-v1-data">
               
              <li>
                <a  class="list-group-item" href="#">PAY ONLINE</a>
                    </li>
               
                    <li style="width:200px;"><input class="form-control" id="search" title="Easy to find out" type="text" placeholder="search" size="30" maxlength="255"></li>
                       <li width:50px;> <button class="btn btn-success" id="search_btn">Search</button></li>
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
        <li><a href="logout.php">Logout</a></li>

</ul>
    
    </li>	
</ul>

            
            
</div>
</div>
</div>
</nav>
    <div class="clear"></div>    
    
    <p><br/></p>
    <p><br/></p>
    
    
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
        <div class="panel-body"><h3>Payment</h3>
                
            <hr/>
           <p>Hello,<?php echo $_SESSION ["name"];?> <br/> Payment is processing  successfully<br/>
            your trascation Id is xx-xx-xx-xxxxxx2345.</p>
            <a href="index.php" class="btn btn-success btn-lg">Go to shopping </a>
        </div>
            <div class="panel-footer"></div>
            <div class="col-md-2"></div>
            </div>
        </div>
        </div></div>
    
  
    
    
    
                    
        
</body>
</html>