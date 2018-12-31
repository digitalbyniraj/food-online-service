<?php

session_start();

include "config.php";
if(isset($_POST["category"])){
    
    $category_query="SELECT * FROM categories";
    $run_query=mysqli_query($conn,$category_query);
    echo "
      <div class='nav nav-pills nav-stacked'>
                   
                              <li class='active'><a href='#'>Categories</a></li>
    
    ";
    
    if(mysqli_num_rows($run_query) >0){
        while($row = mysqli_fetch_array($run_query)){
             $cid=  $row["c_id"];
             $c_name=  $row["c_title"];
            echo "
                 <li><a href='#' class='category' cid='$cid'>$c_name</a></li>
            ";
            
        }
        
        echo "</div";
    }
}
if(isset($_POST["range"])){
    
    $range_query="SELECT * FROM ranges";
    $run_query=mysqli_query($conn,$range_query);
    echo "
      <div class='nav nav-pills nav-stacked'>
                   
                              <li class='active'><a href='#'>Ranges</a></li>
    
    ";
    
    if(mysqli_num_rows($run_query) >0){
        while($row = mysqli_fetch_array($run_query)){
          $rid=  $row["r_id"];
             $r_name=  $row["r_prices"];
            echo "
                 <li><a href='#' class='range' rid='$rid'>$r_name</a></li>
            ";
            
        }
        
        echo "</div";
    }
    
    

    
}
if(isset($_POST["nextpage"])){
    $sql ="SELECT * FROM food";
$run_query= mysqli_query($conn,$sql);
    $count = mysqli_num_rows($run_query);
  $pageno = ceil($count/9);
    for($i=1;$i<=$pageno;$i++){
        echo"
        
        <li><a href='#'nextpage='$i' id='nextpage'>$i</a></li>
        
        ";
    }
}

   if(isset($_POST["getFood"])){
       $limit = 9;
       if(isset($_POST["setpage"])){
        $pageno=$_POST["pageNumber"];
           
           $start = ($pageno * $limit )-$limit;
       }else{
           $start=0;
       }
    $food_query = "SELECT * FROM food LIMIT $start,$limit";
    $run_query =mysqli_query($conn,$food_query);
    if(mysqli_num_rows($run_query) >0){
        
        while($row = mysqli_fetch_array($run_query)){
                $f_id=        $row['food_id'];
              $f_categories=  $row['food_cat'];
              $f_ranges=      $row['food_range'];
              $f_title=       $row['food_title'];
              $f_price=       $row['food_price'];
              $f_desc=        $row['food_desc'];
             $f_images=       $row['food_images'];
    echo "
            <div class='col-md-4'>
                <div class='panel panel-info'>
                
                <div class='panel-heading'>$f_title</div>
                    <div class='panel-body'>
                    
                    <img src='images/$f_images' style='width:150px; height:200px;'/>
                    </div>
                    <div class='panel-heading'>Rs=$f_price.00
                    <button fid='$f_id' style='float:right;' class='btn btn-danger btn-xs' id='food'>Add to Cart</button>
                
                </div>
                </div>
                </div>
            
            
            ";
            
            
        }
        
    }
}

if(isset($_POST["get_selected_Category"])){
   $cid= $_POST["cat_id"];
   $sql = "SELECT * from food WHERE food_cat = '$cid'";
   $run_query = mysqli_query($conn,$sql);
    
    while($row= mysqli_fetch_array($run_query)){
        
        
                $f_id=  $row['food_id'];
              $f_categories=  $row['food_cat'];
              $f_ranges=  $row['food_range'];
              $f_title=  $row['food_title'];
              $f_price=  $row['food_price'];
              $f_desc=  $row['food_desc'];
             $f_images=  $row['food_images'];
    echo "
                <div class='col-md-4'>
                <div class='panel panel-info'>
                <div class='panel-heading'>$f_title</div>
                <div class='panel-body'>
                <img src='images/$f_images' style='width:150px; height:200px;'/>
                </div>
                <div class='panel-heading'>Rs=$f_price.00
                <button fid='$f_id' style='float:right;' class='btn btn-danger btn-xs' id='food'>Add to Cart</button>
                </div>
                </div>
                </div>
            ";   
        }
}

if(isset($_POST["get_selected_Range"]) || isset($_POST["search"])){
    if(isset($_POST["get_selected_Category"])){
        $cid= $_POST["cat_id"];
         $sql = "SELECT * FROM food WHERE food_cat = '$cid'";    
         }else if(isset($_POST["get_selected_Range"])){
        $id= $_POST["r_id"];
         $sql = "SELECT * from food WHERE food_range = '$id'"; 
        
    }else{
       $keyword = $_POST["keyword"];
      $sql = "SELECT * from food WHERE food_keywords LIKE '%$keyword%'"; 
    }
    
       $run_query = mysqli_query($conn,$sql);
       while($row= mysqli_fetch_array($run_query)){
        
        
              $f_id=  $row['food_id'];
              $f_categories=  $row['food_cat'];
              $f_ranges=  $row['food_range'];
              $f_title=  $row['food_title'];
              $f_price=  $row['food_price'];
              $f_desc=  $row['food_desc'];
              $f_images=  $row['food_images'];
    echo "
            <div class='col-md-4'>
            <div class='panel panel-info'>
            <div class='panel-heading'>$f_title</div>
            <div class='panel-body'>
            <img src='images/$f_images' style='width:150px; height:200px;'/>
            </div>
            <div class='panel-heading'>Rs=$f_price.00
            <button fid='$f_id' style='float:right;' class='btn btn-danger btn-xs' id='food'>Add to Cart</button>
            </div>
            </div>
            </div>
            ";   
        }
}


if(isset($_POST["addToFood"])){
    
    $f_id =$_POST["fId"];
    $user_id =$_SESSION["u"];
    $sql="SELECT * FROM cart WHERE f_id ='$f_id' AND user_id ='$user_id'";
    $run_query =mysqli_query($conn,$sql);
    $count =mysqli_num_rows($run_query);
    if($count >0){
        
        echo"   <div class='alert alert-danger'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>This is alerdy in your cart</b>
    
    </div>";
        
        
    } else{
        $sql ="SELECT * FROM food WHERE food_id ='$f_id'";
        $run_query =mysqli_query($conn,$sql);
        $row =mysqli_fetch_array($run_query);
       $id= $row["food_id"];
        $f_name =  $row["food_title"];
        $f_image  = $row["food_images"];
        $f_price  =  $row["food_price"];

        $sql ="INSERT INTO `cart` (`cart_id`, `f_id`, `m_add`, `user_id`, `f_title`, `f_images`, `qty`, `price`, `total_amount`) VALUES (NULL, '$f_id', '0', '$user_id', '$f_name', '$f_image', '1', '$f_price', '$f_price')";
        
        
        if(mysqli_query($conn,$sql)){
            
            
            echo"     <div class='alert alert-success'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>this food is added in your cart</b>
    
    </div>";
}
        
}
}
 

 if(isset($_POST["get_cart_food"]) || isset($_POST["cart_checkout"])){
    $uid = $_SESSION["u"];
    $sql ="SELECT * FROM cart WHERE  user_id ='$uid'";
    $run_query =mysqli_query($conn,$sql);
    $count =mysqli_num_rows($run_query);
    if($count >0) {
        $no =1;
        $total_amt=0;
        while($row =mysqli_fetch_array($run_query)){
            $id =$row["cart_id"];
            $fid =$row["f_id"];
            $f_name =$row["f_title"];
            $f_image =$row["f_images"];
            $qty =$row["qty"];
            $f_price=$row["price"];
            $total_amount=$row["total_amount"];
            $price_array =array($total_amount);
            $total_sum =array_sum($price_array);
            $total_amt=$total_amt +$total_sum;
            if(isset($_POST["get_cart_food"])){
          
          
          }else{
              echo "
              <div class='row'>
                <div class='col-md-2'>
                               <div class='btn-group'>
                                        <a href='#' remove_id='$fid' class='btn btn-success remove'><span class='glyphicon glyphicon-trash'></span></a>
                                        <a href='#' change_id='$fid' class='btn btn-info change'><span class='glyphicon glyphicon-ok-sign'></span></a>
                                        </div>
                                
                                </div>
                                  <div class='col-md-2'><input type='text' class='form-control qty' fid='$fid' id='qty-$fid' value='$qty'></div>
                     <div class='col-md-2'><img src='images/$f_image' width='80px' height:'80px'>
                                        </div>
                     <div class='col-md-2'>$f_name</div>
                     <div class='col-md-2'><input type='text' class='form-control f_price'  fid='$fid' id='price-$fid' value='$f_price' disabled> </div>
                   
        <div class='col-md-2'><input type='text' class='form-control total_amount'  fid='$fid' id='total_amount-$fid' value='$total_amount' disabled></div>  
            
                
                </div>
              
              ";
              
              
          }
              
             
              
            }   



$query = mysqli_query($conn,$sql);
	if (isset($_POST["get_cart_food"])) {
		//display cart item in dropdown menu
		if(mysqli_num_rows($query) > 0) {
			$n=0;
			while ($row=mysqli_fetch_array($query)) {
                $n++;
            $id =$row["f_id"];

      $f_title =$row["f_title"];
            $f_image =$row["f_images"];
            $qty =$row["qty"];
            $f_price=$row["price"];
                		
            echo'
            <div class="row">
                         <div class="col-md-3">'.$n.'</div>
                         <div class="col-md-3">'.$f_title.'</div>
                         <div class="col-md-3"><img src="images/'.$f_image.'" width ="70px" height="70px"></div>
                         <div class="col-md-3">RS '.$f_price.'</div>
                        </div>';
     }
          
        ?>
<a style="float:right;" href="cart.php" class="btn btn-warning">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></span></a>
<?php
			exit();
            }
     }
















        
        if(isset($_POST["cart_checkout"])){
              echo "<div class='row'>
                <div class='col-md-8'></div>
                <div class='col-md-4'>
                <b style='float:right' class = 'btn btn-success'>Total Amt. Rs = $total_amt.00</b>
                
                </div>
                 </div>"; 
        }
         
    $sql="SELECT * FROM cart Where  user_id ='$uid'";
          $run_query=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($run_query)){
    
        }
  echo "<div class='pm-button'><a href='https://localhost/online/sample/index.php'><img src='https://www.payumoney.com/media/images/payby_payumoney/new_buttons/21.png' /></a></div> ";
    }
        
 
 }
if(isset($_POST["cart_increment"])){
    $uid=$_SESSION["u"];
    $sql ="SELECT * FROM cart WHERE  user_id ='$uid'";
    $run_query=mysqli_query($conn,$sql);
    
    echo mysqli_num_rows($run_query);
    
}
if(isset($_POST["removeFromCart"])){
       $uid=$_SESSION["u"];
    $fid=$_POST["removeId"];
   

    $sql="DELETE FROM cart WHERE user_id='$uid' AND f_id='$fid'";
    
   $run_query=mysqli_query($conn,$sql);
    if($run_query){
        
        echo"<div class='alert alert-info'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>This food is Removed from Cart</b>
    
    </div>";
    }
    
    
}


if(isset($_POST["changeFood"])){
    
    $uid=$_SESSION["u"];
    $fid= $_POST["changeId"];
     $qty= $_POST["qty"];
     $price= $_POST["price"];
     $total_amount= $_POST["total_amount"];
    
    
    $sql ="UPDATE cart SET qty='$qty' ,price='$price',total_amount='$total_amount' WHERE user_id='$uid' AND f_id='$fid'";
    $run_query=mysqli_query($conn,$sql);
    
    if($run_query){
        
        echo"<div class='alert alert-success'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Your food  qty is updated /changed</b>
    
    </div>";
    }
    
    
    
    
    
    
    
}

?>