<?php
include "dbconfig.php";

if (isset($_POST['signInForm'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    if ($email==""|| $password=="") {
        echo "0";
    }
    else {
            $sql="SELECT * FROM `agents` WHERE email = '$email' AND `password` = '$password'";

            $query=mysqli_query($conn, $sql);

            if (mysqli_num_rows($query) > 0) {

                $data=mysqli_fetch_array($query);

                setcookie("agent_id", $data['id'], time() + (86400 * 3), '/');

                echo $data['id'];
                

            }

            else {
                echo "0";
            }
        }
    }

    
if (isset($_POST['signUpForm'])) {
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $sql_e = "SELECT * FROM agents WHERE email='$email'";
    $res_e = mysqli_query($conn, $sql_e);	
    if(mysqli_num_rows($res_e) > 0){
        echo 0;
      }
    elseif ($firstname==""|| $lastname==""|| $email==""|| $number==""|| $address==""|| $password=="") {
        echo 1;
    }

    else {
        $sql="INSERT into `agents` (first_name,last_name,email,mobile_number,address,password) VALUES ('$firstname','$lastname' , '$email', '$number', '$address', '$password')";
        
        $query=mysqli_query($conn, $sql);

        if ($query) {
            echo 2;
        }
    }
}


// Create Agent

if(isset($_POST["create_order"])){
    $agent_id=$_COOKIE["agent_id"];
    $customername = $_POST["customername"];
    $customernumber = $_POST["customernumber"];
    $email = $_POST["email"]; 
    $draw_id = $_POST["draw_id"];
    $sql_e = "SELECT * FROM orders WHERE email='$email'";
    $res_e = mysqli_query($conn, $sql_e);	
    if(mysqli_num_rows($res_e) > 0){
        echo "ok";
      }
   else if ($customername==""|| $customernumber==""|| $email==""|| $draw_id == 0) {
        echo 0;
    }
    else{
        $sql = "INSERT INTO orders (agent_id,customername,customernumber,email,draw_id) VALUES ('$agent_id','$customername','$customernumber','$email','$draw_id')";

        $query = mysqli_query($conn, $sql);

        if($query){
            $sql="SELECT * FROM `orders` WHERE agent_id = '$agent_id' AND `customername` = '$customername' AND `customernumber` = '$customernumber' AND `email` = '$email' AND `draw_id` = '$draw_id'";

            $query=mysqli_query($conn, $sql);

            if (mysqli_num_rows($query) > 0) {

                $data=mysqli_fetch_array($query);

                echo $data['id'];
                

            }
        }

    }

}

if(isset($_POST["order_id"]))
{
 for($count = 0; $count < count($_POST["line"]); $count++)
 {  
     $orderId = $_POST['order_id'];
     $line = $_POST['line'][$count];
     $number = $_POST['number'][$count];
     $big = $_POST['big'][$count];
     $small = $_POST['small'][$count];
  $query = "INSERT INTO complete_order 
  (order_id, line, number, big, small) 
  VALUES ('$orderId', '$line', '$number', '$big', '$small')
  ";
  $run_query = mysqli_query($conn,$query);
 }
 if($run_query){
    $output = '';   
    $query ="SELECT * FROM orders where id='$orderId'";  
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);  
    $output .= '  
    <div class="card-header">
    <h3 class="card-title">
        Order Summary
    </h3>
</div>
<div class="card-body">
<div id="copy_data">
  <h5 class="card-title">
        Order#:'.$row["id"].'
    </h5>  
    <h5 class="card-title">
    Customer Name:'.$row["customername"].'
    </h5> 
    <h5 class="card-title">
    Customer Contact:'.$row["customernumber"].'
    </h5> '; 
    $query1 ="SELECT * FROM complete_order where order_id='$orderId'";
    $run1 = mysqli_query($conn,$query1);
    $small = 0; 
        $big = 0;
        $grand_total= 0;
        $total= 0;
    while($data1 = mysqli_fetch_array($run1)){
        $small += $data1["small"];
        $big += $data1["big"];
        $grand_total = $big+$small;
         $output .= '                     
          
         <h5 class="card-title">
         Line '.$data1["line"].' - '.$data1["number"].', '.$data1["big"].' Big, '.$data1["small"].' Small
         </h5>      
    ';  
    }
    $output .= '  
    <h5 class="card-title">
    Total - '.$grand_total.'
    </h5> 
    </div>  
   <a href="create_order.php" class="btn btn-primary">New Order</a>
   <button class="btn btn-primary" id="copy">Copy Text</button>
    </div> 
    '; 
    
    echo $output;  
   
  }
  else{
    echo 0; 
  }
}

if (isset($_GET['signout'])) {

    setcookie("agent_id", "", time() - 3600, '/');

    header("Location: ../index.php");
}



if(isset($_POST["id"]))  
{  
    $output = '';   
    $query = "SELECT * FROM complete_order WHERE order_id = '".$_POST["id"]."'";  
    $result = mysqli_query($conn, $query);  
    $output .= '  
    <div class="row">
    <div class="col-12">
    <div class="table-responsive">  
         <table class="table table-bordered">
         <thead>      
         <tr>
			<th scope="col">Line</th>
			<th scope="col">Code</th>
			<th scope="col">Big</th>
			<th scope="col">Small</th>
		</tr> 
        </thead>
        <tbody>'; 
        $small = 0; 
        $big = 0;
        $grand_total= 0;
    while($row = mysqli_fetch_array($result))  
    {  
        $small += $row["small"];
        $big += $row["big"];
        $grand_total = $big+$small;
         $output .= '                     
          
              <tr>  
              <td width="70%">'.$row["line"].'</td>
              <td width="70%">'.$row["number"].'</td>
              <td width="70%">'.$row["big"].'</td>
              <td width="70%">'.$row["small"].'</td>   
              </tr>  
              ';  
    }  
    $output .= '</tbody></table>
    <table class="table " >
    <thead>      
    <tr>
       <th scope="col" class="text" ></th>
       <th scope="col" class="text-center"><b>Total</b></th>
       <th scope="col" >'.$big.'</th>
       <th scope="col" >'.$small.'</th>
       
   </tr> 
   </thead>
   <tbody>
   <tr>  
   <th scope="col" width="45%" ></th>  
   <th scope="col" class="text-center"><b>Grand Total</b></th>  
     
   <th scope="col"  class="text-center">'.$grand_total.'</th>  
    
   
   </tr>
   </tbody></table>
    </div></div></div>';  
    echo $output;  
}  


?>
