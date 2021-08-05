<?php
include "../../agent/core/dbconfig.php";

if (isset($_POST['signInForm'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    

    if ($email==""|| $password=="") {
        echo "0";
    }
    else {
            $sql="SELECT * FROM `admin` WHERE email = '$email' AND `password` = '$password'";

            $query=mysqli_query($conn, $sql);

            if (mysqli_num_rows($query) > 0) {

                $data=mysqli_fetch_array($query);

                setcookie("admin_id", $data['id'], time() + (86400 * 3), '/');

                echo $data['id'];
                

            }

            else {
                echo "0";
            }
        }
    }

    
if (isset($_POST['create_agent'])) {
    $firstname=$_POST['first_name'];
    $lastname=$_POST['last_name'];
    $email=$_POST['email'];
    $number=$_POST['mobile_number'];
    $address=$_POST['address'];
    $password=$_POST['password'];
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


    
if (isset($_POST['update_agent'])) {
    $id=$_POST["id"]; 
    $firstname=$_POST['first_name'];
    $lastname=$_POST['last_name'];
    $email=$_POST['email'];
    $number=$_POST['mobile_number'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    if ($firstname==""|| $lastname==""|| $email==""|| $number==""|| $address==""|| $password=="") {
        echo 0;
    }

    else {
        $sql="UPDATE agents SET first_name = '$firstname', last_name = '$lastname' , email = '$email', mobile_number = '$number', address = '$address', password = '$password' WHERE id = '$id'";
        
        $query=mysqli_query($conn, $sql);

        if ($query) {
            echo 1;
        }
    }
}


if(isset($_POST['acceptOrder'])){
    $id = $_POST['acceptOrder'];

    echo mysqli_query($conn,"UPDATE orders SET `status` = '1' WHERE id = '$id'");

}

if(isset($_POST['rejectOrder'])){
    $id = $_POST['rejectOrder'];

    echo mysqli_query($conn,"UPDATE orders SET `status` = '2' WHERE id = '$id'");

}
if(isset($_POST['activeid'])){
    $id = $_POST['id'];

    echo mysqli_query($conn,"UPDATE agents SET `id_status` = '1' WHERE id = '$id'");

}
if(isset($_POST['delid'])){
    $id = $_POST['id'];

    echo mysqli_query($conn,"DELETE FROM agents WHERE id='$id'");

}
 
if(isset($_POST['delvideoid'])){
    $id = $_POST['id'];

    echo mysqli_query($conn,"DELETE FROM video WHERE id='$id'");

}
if(isset($_POST['add_winner'])){
    $draw_id=$_POST['draw_id'];
    $number1 =$_POST['number1'];
    $number2 =$_POST['number2'];
    $number3 =$_POST['number3'];
    $cons_1_number=$_POST['cons_1_number'];
    $cons_2_number=$_POST['cons_2_number']; 
    $cons_3_number=$_POST['cons_3_number'];
    $cons_4_number=$_POST['cons_4_number'];
    $cons_5_number=$_POST['cons_5_number'];
    $cons_6_number=$_POST['cons_6_number'];
    $cons_7_number=$_POST['cons_7_number'];
    $cons_8_number=$_POST['cons_8_number'];
    $cons_9_number=$_POST['cons_9_number'];
    $cons_10_number=$_POST['cons_10_number'];
    $cons_11_number=$_POST['cons_11_number'];
    $cons_12_number=$_POST['cons_12_number'];
    $res_1_number=$_POST['res_1_number'];
    $res_2_number=$_POST['res_2_number'];
    $res_3_number=$_POST['res_3_number'];
    $res_4_number=$_POST['res_4_number'];
    $res_5_number=$_POST['res_5_number'];
    $res_6_number=$_POST['res_6_number'];
    $res_7_number=$_POST['res_7_number'];
    $res_8_number=$_POST['res_8_number'];
    $res_9_number=$_POST['res_9_number'];
    $res_10_number=$_POST['res_10_number'];
    $res_11_number=$_POST['res_11_number'];
    $res_12_number=$_POST['res_12_number'];
    $res_13_number=$_POST['res_13_number'];
    $res_14_number=$_POST['res_14_number'];
    $res_15_number=$_POST['res_15_number'];
        $qry=mysqli_query($conn,"UPDATE draw SET `number1` = '$number1' ,  `number2` = '$number2' ,  `number3` = '$number3', `cons_1_number` = '$cons_1_number' , `cons_2_number` = '$cons_2_number' , `cons_3_number` = '$cons_3_number', `cons_4_number` = '$cons_4_number', `cons_5_number` = '$cons_5_number', `cons_6_number` = '$cons_6_number', `cons_7_number` = '$cons_7_number', `cons_8_number` = '$cons_8_number', `cons_9_number` = '$cons_9_number', `cons_10_number` = '$cons_10_number', `cons_11_number` = '$cons_11_number', `cons_12_number` = '$cons_12_number' , `res_1_number` = '$res_1_number' , `res_2_number` = '$res_2_number', `res_3_number` = '$res_3_number', `res_4_number` = '$res_4_number', `res_5_number` = '$res_5_number', `res_6_number` = '$res_6_number', `res_7_number` = '$res_7_number', `res_8_number` = '$res_8_number', `res_9_number` = '$res_9_number', `res_10_number` = '$res_10_number', `res_11_number` = '$res_11_number', `res_12_number` = '$res_12_number', `res_13_number` = '$res_13_number', `res_14_number` = '$res_14_number', `res_15_number` = '$res_15_number' WHERE id = '$draw_id'");
        if ($qry) {
            echo 1;
        }
        else{
            echo 0;
        }
   
    }
   


if (isset($_GET['signout'])) {

    setcookie("admin_id", "", time() - 3600, '/');

    header("Location: ../index.php");
}
    
if (isset($_POST['add_draw'])) {
    $date=$_POST['date'];
    $time=$_POST['time'];

    if ($date==""|| $time=="") {
        echo 0;
    }

    else {
        $sql="INSERT into `draw` (date,time) VALUES ('$date','$time' )";
        
        $query=mysqli_query($conn, $sql);

        if ($query) {
            echo 1;
        }
    }
}


if (isset($_POST['add_video'])) {
    $link=$_POST['link'];

    if ($link=="") {
        echo 0;
    }

    else {
        $sql="INSERT into `video` (link) VALUES ('$link' )";
        
        $query=mysqli_query($conn, $sql);

        if ($query) {
            echo 1;
        }
    }
}


?>
