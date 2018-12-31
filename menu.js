$(document).ready(function(){
cat();
range();
     food();
function cat(){
    
    $.ajax({
        url : "act.php",
        method : "POST",
        data : {category:1},
       success : function(data){
        $("#get_category").html(data);
        
       }
        
    })
    
    
}
    
    function range(){
    
    $.ajax({
        url : "act.php",
        method : "POST",
        data : {range:1},
       success : function(data){
        $("#get_range").html(data);
        
       }
        
    })
    }

        function food(){
    
    $.ajax({
        url : "act.php",
        method : "POST",
        data : {getFood:1},
       success : function(data){
        $("#get_food").html(data);
        
       }
        
    })
    }
    
    
    $("body").delegate(".category","click",function(event){
        
        event.preventDefault();
        var cid = $(this).attr('cid');
    
        $.ajax({
        url : "act.php",
        method : "POST",
        data : {get_selected_Category:1,cat_id:cid},
       success : function(data){
        $("#get_food").html(data);
           if($("body").width() < 480){
					$("body").scrollTop(683);
				}
        
       }
        
            
            
            
            
        })
    })
    
    $("body").delegate(".range","click",function(event){
        
        event.preventDefault();
        var rid = $(this).attr('rid');
    
        $.ajax({
        url : "act.php",
        method : "POST",
        data : {get_selected_Range:1,r_id:rid},
       success : function(data){
        $("#get_food").html(data);
        
       }
           
        })
    })
    
   $("#search_btn").click(function(){
       
       
       var keyword =$("#search").val();
       if(keyword != ""){
           
      $.ajax({
        url : "act.php",
        method : "POST",
        data : {search:1,keyword:keyword},
       success : function(data){
        $("#get_food").html(data);
        
       }
           
        })
       }
       
   })
    $("#signup_button").click(function(event){
        event.preventDefault();
        $.ajax({
        url : "register.php",
        method : "POST",
        data : $("form").serialize(),
       success : function(data){
        $("#signup_msg").html(data);
        
       }
           
        })  
    })
cart_increment();
             $("body").delegate("#food","click",function(event){
                  var  fid =$(this).attr("fid");
        event.preventDefault();
       
        
        $.ajax({
            
            url :"act.php",
            method :"POST",
            data : {addToFood:1,fId:fid},
             success : function(data){
           $("#food_msg").html(data);
                 cart_increment();
        }
            
            
        })
        
        
        
    })
    
    

    
    
    
    
       

    
    
    
    
    
    cart_container();
    function cart_container(){
        
          $.ajax({
            
            url :"act.php",
            method :"POST",
            data : {get_cart_food:1},
               success : function(data){
           $("#cart_food").html(data);
        }
            
            
        })
        
        
    };
    
    function cart_increment(){
        
         $.ajax({
            
            url :"act.php",
            method :"POST",
            data : {cart_increment:1},
               success : function(data){
           $(".badge").html(data);
        }
            
            
        })
        
    }
    
    
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
    
    
 
    
   
    
cart_checkout();
function cart_checkout(){
    $.ajax({
        
        url: "act.php",
        method :"POST",
        data :{cart_checkout:1},
           success : function(data){
        
        
        $("#cart_checkout").html(data);

    }
        
        
    })
}
    
    
 
  $("body").delegate(".qty","keyup",function(){
      
      var fid =$(this).attr("fid");
      var qty=$("#qty-"+fid).val();
      var price=$("#price-"+fid).val();
      var total_amount=qty * price;
      $("#total_amount-"+fid).val(total_amount);
   
      
    
  })
  
    $("body").delegate(".remove","click",function(event){
        event.preventDefault();
     
        var fid=$(this).attr("remove_id");
          
         $.ajax({
               url: "act.php",
              method: "POST",
        data :{removeFromCart:1,removeId:fid},
         success: function(data){
        
   $("#cart_show").html(data);
      cart_checkout();

    }
        
        
    })
    
    })
      $("body").delegate(".change","click",function(event){
        
        event.preventDefault();
        
        var fid=$(this).attr("change_id");
       var qty=$("#qty-"+fid).val();
             var price=$("#price-"+fid).val();
             var total_amount =$("#total_amount-"+fid).val();
          $.ajax({
              url: "act.php",
              method: "POST",
              data :{changeFood:1,changeId:fid,qty:qty,price:price,total_amount:total_amount},
              success: function(data){
                     $("#cart_show").html(data);
                  cart_checkout();
              }
              
              
          })
          
          
         
    })
    
    nextpage();
    function nextpage(){
        $.ajax({
            url :"act.php",
            method :"POST",
            data :{nextpage:1},
            success :function(data){
                $("#pageno").html(data);
            }
            
            
            
        })
    }
    $("body").delegate("#nextpage","click",function(){
        var pagen=$(this).attr("nextpage");
              $.ajax({
            url :"act.php",
            method :"POST",
            data :{getFood:1,setpage:1,pageNumber:pagen},
            success :function(data){
                $("#get_food").html(data);
            }
            
            
            
        })
        
    })
    
})