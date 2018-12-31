<?php

session_start();
if(!isset($_SESSION["u"]))
    header("location:index.php");
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
                	<li> <a href="index.php"><span class="glyphicon glyphicon-home"></span><b>Home</b></a></li>
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
                </ul>
            </div>
         </div>
     </div>
    </nav>
    
    
    <p><br/></p>
   
    
    
    <div class="container-fluid">
        
        <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8" id="cart_show"></div>
        
        
        </div>
    <div class="row">
        <div class="col-md-1"></div>
           <div class="col-md-10">
        <div class="panel panel-primary">
               <div class="panel-heading"><b>Food in your Cart</b></div>
            <div class="panel-body">
            <div class="row">
                <div class="col-md-2"><i><b>Option</b></i></div>
                <div class="col-md-2"><i><b>Quantity</b></i></div>
                     <div class="col-md-2"><i><b>Food Image</b></i> </div>
                     <div class="col-md-2"><i><b>Food Name</b></i></div>
                     <div class="col-md-2"><i><b></b>Food Price</i></div>
                     <div class="col-md-2"><i><b>Total Price</b></i> </div>  
            
                
                </div>
     
                <div id="cart_checkout">  </div>      
                    
                <!--   <div class="row">
                <div class="col-md-2">
                               <div class="btn-group">
                                        <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-trash"></span></a>
                                        <a href="#" class="btn btn-info"><span class="glyphicon glyphicon-ok-sign"></span></a>
                    </div>
                                
                                </div>
<div class="col-md-2"><input type='text' class='form-control' value='1'></div>
                     <div class="col-md-2"><img src='images/image.JPG'>
                                        </div>
                     <div class="col-md-2">Food Name </div>
                     <div class="col-md-2"><input type='text' class='form-control' value='400' disabled> </div>
                     
                     <div class="col-md-2"><input type='text' class='form-control' value='400' disabled></div>  
            
                
                </div> -->
           <!-- <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                <b>Total Rs 1000.00</b>
                
                </div>
                
                
                
                </div>-->
                
                
                
                </div>
            
            
               <div class="panel-footer"></div>
               </div>
        
        </div>
           <div class="col-sm-2"></div>
        
        
        </div>
    
    
    </div>
    
    
    </body>
</html>