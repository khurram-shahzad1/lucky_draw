<?php include('dbconfig.php');


if(isset($_POST['view'])){

// $con = mysqli_connect("localhost", "root", "", "notif");

if($_POST["view"] != '')
{
    $update_query = "UPDATE agents SET not_id = 1 WHERE not_id = 0";
    mysqli_query($con, $update_query);
}
$query = "SELECT * FROM agents ORDER BY id DESC LIMIT 5";
$result = mysqli_query($con, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
   $output .= '
   <li>
   <a href="#">
   <strong>'.$row["name"].'</strong><br />
   <small><em>'.$row["phone"].'</em></small>
   </a>
   </li>
   ';

 }
}
else{
     $output .= '
     <li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}



$status_query = "SELECT * FROM agents WHERE not_id = 0";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
    'notification' => $output,
    'unseen_notification'  => $count
);

echo json_encode($data);

}

?>