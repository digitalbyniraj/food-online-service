                      
<li  class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span>Sign-In</a>
    
    
    
    
    <ul class="dropdown-menu">
	
<div style="width: 500px; margin:0 auto;">
	<form method="post" autocomplete="off">

<div class="panel panel-primary">


    <div class="panel-heading"><center>Login</center></div></div>
    <label for="email">Email</label>
        <input type="email"  placeholder="Email......."class="form-control" id="email" required/ >
    
        <label for="password">PASSWORD</label>
    
    
    <input type="password" placeholder="password .. .. .." class="form-control" id="password" required/><br>
    <a href="#" style="color:green;">Forgot the password</a>
        <br/>
    
      <center>  <div class="btn-group btn-group-lg">
        
       <input type="submit" name="login" id="login" value="Login" class="btn btn-primary">
             </div></center><br>
        <div class="panel-footer" id ="e_msg"></div>
    <a href="signup.php"> REGISTER</a>
    
    
    
    
    </form>
    </div>
</ul>
    
    </li>
      $("#login").click(function(event){
       event.preventDefault();
          var email = $("#email").val();
          var pass = $("#password").val();
          
         $.ajax({
             
             url : "act.php",
             method : "POST",
                data   : {userLogin:1,userEmail:email,userPassword:pass},
                success :function(data){
   
                  alert(data);
   }
     
      
         })
      })


























<?php
$conn=mysqli_connect("localhost","root","","shopping");
if($conn->connect_error)
{
	echo $conn->connect_error;
}

?>
    event.preventDefault();
              $.ajax({
        url : "register.php",
        method : "POST",
        data : $("form").serialize(),
       success : function(data){
          $("#signup_msg").html(data);
        
       }
           
        })

   <div class="panel panel-primary">


    <div class="panel-heading"><center>  <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="LOGIN WITH GOOOGLE+" class="btn btn-primary">
        </center></div></div>
        
        
              <div class="panel panel-primary">


    <div class="panel-heading"><center> <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="LOGIN WITH FACEBOOK" class="btn btn-primary"></center></div></div>
        
  
      <hr/>





  $("#cart_container").click(function(event){
        event.preventDefault();
        $.ajax({
            url :"act.php",
            method : "POST",
            data : {get_cart_food:1},
            success : function(data){
              alert(data);
                
                
            }
            
            
            
            
        })
        
        
    })




if(isset($_POST["get_cart_food"])){
    
    
    $uid =$_SESSION["u"];
    $sql ="SELECT * FROM cart WHERE  user_id ='$uid'";
    $run_query =mysqli_query($conn,$sql);
    $count =mysqli_num_rows($run_query);
    
    
    if($count >0)
    {
        $No =1;
        while($row =mysqli_fetch_array($run_query)){
            $id =$row["cart_id"];
            $fid =$row["f_id"];
            $f_name =$row["f_title"];
            $f_image =$row["f_images"];
            
            
            
            echo"
            
            <div class='row'>
                   <div class='col-md-2'>$No</div>
                         <div class='col-md-2'>$f_name</div>
                         <div class='col-md-3'><img src='images/$f_image' width ='50px' height='50px'</div>
                         <div class='col-md-2'>rs.$f_price.00</div>
                          <div class='col-md-3'>Quantity</div>
                       
                    
                    </div>
            
            ";
            
            
            
            
        }
    }
}
                
         if(isset($_POST["get_cart_food"])){
                    echo"
            
                         <div class='row'>
                         <div class='col-md-3'>$no</div>
                         <div class='col-md-3'>$f_name</div>
                         <div class='col-md-3'><img src='images/$f_image' width ='70px' height='70px'></div>
                         <div class='col-md-3'>rs.$f_price.00</div>
                         </div>";
                          $no =$no+1;
            
                    }else{
               
                                 echo"
                             <div class='row'>
                               <div class='col-md-2'>
                               <div class='btn-group'>
                                        <a href='#' class='btn btn-success'><span class='glyphicon glyphicon-trash'></span></a>
                                        <a href='#' class='btn btn-info'><span class='glyphicon glyphicon-ok-sign'></span></a>
                                    </div>
                                     </div>
                     <div class='col-md-2'><img src='images/$f_image'></div>
                     <div class='col-md-2'>$f_name </div>
                     <div class='col-md-2'><input type='text' class='form-control' value='$qty' disabled> </div>
                     <div class='col-md-2'><input type='text' class='form-control' value='$f_price'></div>
                     <div class='col-md-2'><input type='text' class='form-control' value='$total_amount' disabled></div>  
                     </div>
                ";
                
                
                   cart_check();
function cart_check(){
    $.ajax({
        
        url: "act.php",
        method :"POST",
        data :{cart_check:1},
           success =function(data){
        
        
        $("#cart_check").html(data);
    }
        
        
    })
}
                
                           cart_checkout();
function cart_checkout(){
    $.ajax({
        
        url: "act.php",
        method :"POST",
        data :{cart_checkout:1},
           success =function(data){
        
        
        $("#cart_checkout").html(data);
    }
        
        
    })
}        
                
                
                
                
                
                
                
                
                
                         <div class="row">
                <div class="col-md-2">
                               <div class="btn-group">
                    <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-trash"></span></a>
                                        <a href="#" class="btn btn-info"><span class="glyphicon glyphicon-ok-sign"></span></a>
                    </div>
                                
                                </div>
                     <div class="col-md-2"><img src='im
                         image.JPG'>
                                        </div>
                     <div class="col-md-2">Food Name </div>
                     <div class="col-md-2"><input type='text' class='form-control' value='400' disabled> </div>
                     <div class="col-md-2"><input type='text' class='form-control' value='1'></div>
                     <div class="col-md-2"><input type='text' class='form-control' value='400' disabled></div>  
            
                
                </div>
                
                
                 $("#cart_container").click(function(event){
        event.preventDefault();
    
        
         $.ajax({
            
            url :"act.php",
            method :"POST",
            data : {get_cart_food:1},
               success : function(data){
           $("#cart_food").html(data);
        }
            
            
        })
    })
                
                
                if(isset($_POST["get_cart_food"])){
    $uid =$_SESSION["u"];
    $sql ="SELECT * FROM cart WHERE  user_id ='$uid'";
    $run_query =mysqli_query($conn,$sql);
    $count =mysqli_num_rows($run_query);
    if($count >0) {
        $no =1;
        while($row =mysqli_fetch_array($run_query)){
            $id =$row["cart_id"];
            $fid =$row["f_id"];
            $f_name =$row["f_title"];
            $f_image =$row["f_images"];
          
              
             
            echo"
            
                         <div class='row'>
                         <div class='col-md-3'>$no</div>
                         <div class='col-md-3'>$f_name</div>
                         <div class='col-md-3'><img src='images/$f_image' width ='70px' height='70px'></div>
                         <div class='col-md-3'>rs.$f_price.00</div>
                        
                        
                        
                        </div>";
    
            $no=$no+1;
              
            }   
        }
    
}

                
                 $("body").delegate("#food","click",function(event){
        event.preventDefault();
        var  f_id =$(this).attr('fid');
        
        $.ajax({
            
            url :"act.php",
            method :"POST",
            data : {addToFood:1,fId:f_id},
               success : function(data){
           $("#food_msg").html(data);
        }
            
            
        })
        
        
        
    })
                
                
                  $("#login").click(function(event){
       event.preventDefault();
          var email =$("#email").val();
          var password =$("#password").val();
          
         $.ajax({
             
             url :"login.php",
             method :"POST",
                data: {login:1,email:email,password:password},
                success :function(data){
   
        if(data == "trueasdsfghkljk"){
            window.location.href="user_details.php";
        }
   }
     
      
         })
      })