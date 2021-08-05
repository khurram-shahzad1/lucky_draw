<?php include "agent/core/dbconfig.php";
$date = date('Y-m-d');
    if(isset($_POST['search'])){
      $valuetosearch=$_POST['valuetosearch'];
      $query="SELECT * FROM draw WHERE CONCAT(`date`) LIKE '%".$valuetosearch."%'";
      $res=filtertable($query);
  }else{
  $query = "SELECT * FROM draw WHERE date='$date'";
  $res=filtertable($query);
  }
  function filtertable($query){
      include 'agent/core/dbconfig.php';
      $filter_result = mysqli_query($conn, $query);
  return $filter_result;
  }
  $data = mysqli_fetch_array($res);
  $number1 = $data["number1"];
$number2 = $data["number2"];
$number3 = $data["number3"];
$cons_1_number=$data['cons_1_number'];
    $cons_2_number=$data['cons_2_number']; 
    $cons_3_number=$data['cons_3_number'];
    $cons_4_number=$data['cons_4_number'];
    $cons_5_number=$data['cons_5_number'];
    $cons_6_number=$data['cons_6_number'];
    $cons_7_number=$data['cons_7_number'];
    $cons_8_number=$data['cons_8_number'];
    $cons_9_number=$data['cons_9_number'];
    $cons_10_number=$data['cons_10_number'];
    $cons_11_number=$data['cons_11_number'];
    $cons_12_number=$data['cons_12_number'];
    $res_1_number=$data['res_1_number'];
    $res_2_number=$data['res_2_number'];
    $res_3_number=$data['res_3_number'];
    $res_4_number=$data['res_4_number'];
    $res_5_number=$data['res_5_number'];
    $res_6_number=$data['res_6_number'];
    $res_7_number=$data['res_7_number'];
    $res_8_number=$data['res_8_number'];
    $res_9_number=$data['res_9_number'];
    $res_10_number=$data['res_10_number'];
    $res_11_number=$data['res_11_number'];
    $res_12_number=$data['res_12_number'];
    $res_13_number=$data['res_13_number'];
    $res_14_number=$data['res_14_number'];
    $res_15_number=$data['res_15_number'];
    $query = "SELECT * FROM video";
          $result = mysqli_query($conn, $query);
          $data_video = mysqli_fetch_array($result);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/lottie.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
    <title>User | Area</title>
    <link rel="shortcut icon" href="agent/assets/media/logos/favicon.ico" />
</head>
<body id="page-top">
 
    <nav class="navbar navbar-expand-xl navbar-dark nav-color " id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#page-top">Lucky Draw</a>
            <button  style="background-color: rgb(206, 205, 205);" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span style=" color: white;" class="navbar-toggler-icon"></span></button>
        </div>
    </nav>
 

    <div class="container-fluid">
        <div class="text-center">
          <br>
          <?php
          echo  $data_video["link"]; 
          ?>
   </div>
    </div>
    <div class="container mt-5">
    <form method="post">  
  <div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <input type="date" class="form-control" name="valuetosearch" placeholder="Search By Date">
    </div>
    <div class="col-md-2">
  <button type="submit" name="search" class="btn btn-primary btn-hover-dark">Search</button>
  </div>
  <div class="col-md-2">
    </div>
  </div>
  </form>
  </div>
    
    
    

  <div class="container mt-5">
      <div class="text-center">
          <h1>TOP WINNERS</h1>
      </div>
      <div class="row mt-5">
        <div class="col-md-4">
            <div class="card-box text-center">
                <div class="text-center">
                   <h1 class="winner">1</h1>
                </div>

                <hr>
                <h4><?php if($number1){
                  echo $number1;
                } else{
                  echo "No Winner Yet";
                }?></h4>
                <hr>
  
            </div>
        </div>

        <div class="col-md-4 " style="margin-top: 40px;">
            <div class="card-box text-center">
                <div class="text-center">
                    <h1 class="winner">2</h1>
                 </div>
 
                <hr>
                <h4><?php if($number2){
                  echo $number2;
                } else{
                  echo "No Winner Yet";
                }?></h4>
                 <hr>
            </div>
        </div>

        <div class="col-md-4"  style="margin-top: 80px;">
            <div class="card-box text-center">
                <div class="text-center">
                    <h1 class="winner">3</h1>
                 </div>
 
                <hr>
                <h4><?php if($number3){
                  echo $number3;
                } else{
                  echo "No Winner Yet";
                }?></h4>
                 <hr>
            </div>
        </div>
    </div>
</div>

<p class="h1 text-center mt-3" id="about_us">Consolation</p>
<div class="container mt-5 mb-5">
    <table class="table table-bordered table-hover">
        <thead class="nav-color ">
            <tr class="Table-height">
                <th>#</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">Coupon No</td>
                <td class="text-center"><?php if($cons_1_number){
                  echo $cons_1_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
                <td class="text-center"><?php if($cons_2_number){
                  echo $cons_2_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
                <td class="text-center"><?php if($cons_3_number){
                  echo $cons_3_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
            </tr>
            <tr>
                <td class="text-center">#</td>
                <td class="text-center">4</td>
                <td class="text-center">5</td>
                <td class="text-center">6</td>
            </tr>
            <tr>
                <td class="text-center">Coupon No</td>
                <td class="text-center"><?php if($cons_4_number){
                  echo $cons_4_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
                <td class="text-center"><?php if($cons_5_number){
                  echo $cons_5_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
                <td class="text-center"><?php if($cons_6_number){
                  echo $cons_6_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
            </tr>
            <tr>
                <td class="text-center">#</td>
                <td class="text-center">7</td>
                <td class="text-center">8</td>
                <td class="text-center">9</td>
            </tr>
            <tr>
                <td class="text-center">Coupon No</td>
                <td class="text-center"><?php if($cons_7_number){
                  echo $cons_7_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
                <td class="text-center"><?php if($cons_8_number){
                  echo $cons_8_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
                <td class="text-center"><?php if($cons_9_number){
                  echo $cons_9_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
            </tr>
            <tr>
                <td class="text-center">#</td>
                <td class="text-center">10</td>
                <td class="text-center">11</td>
                <td class="text-center">12</td>
            </tr>
            <tr>
                <td class="text-center">Coupon No</td>
                <td class="text-center"><?php if($cons_10_number){
                  echo $cons_10_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
                <td class="text-center"><?php if($cons_11_number){
                  echo $cons_11_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
                <td class="text-center"><?php if($cons_12_number){
                  echo $cons_12_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
            </tr>          
        </tbody>
    </table>
    
</div>

<p class="h1 text-center mt-3" id="about_us">Result</p>
<div class="container mt-5 mb-5">
    <table class="table table-bordered table-hover">
        <thead class="nav-color ">
            <tr class="Table-height">
                <th>#</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">Coupon No</td>
                <td class="text-center"><?php if($res_1_number){
                  echo $res_1_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
                <td class="text-center"><?php if($res_2_number){
                  echo $res_2_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
                <td class="text-center"><?php if($res_3_number){
                  echo $res_3_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
            </tr>
            <tr>
                <td class="text-center">#</td>
                <td class="text-center">4</td>
                <td class="text-center">5</td>
                <td class="text-center">6</td>
            </tr>
            <tr>
                <td class="text-center">Coupon No</td>
                <td class="text-center"><?php if($res_4_number){
                  echo $res_4_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
                <td class="text-center"><?php if($res_5_number){
                  echo $res_5_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
                <td class="text-center"><?php if($res_6_number){
                  echo $res_6_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
            </tr>
            <tr>
                <td class="text-center">#</td>
                <td class="text-center">7</td>
                <td class="text-center">8</td>
                <td class="text-center">9</td>
            </tr>
            <tr>
                <td class="text-center">Coupon No</td>
                <td class="text-center"><?php if($res_7_number){
                  echo $res_7_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
                <td class="text-center"><?php if($res_8_number){
                  echo $res_8_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
                <td class="text-center"><?php if($res_9_number){
                  echo $res_9_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
            </tr>
            <tr>
                <td class="text-center">#</td>
                <td class="text-center">10</td>
                <td class="text-center">11</td>
                <td class="text-center">12</td>
            </tr>
            <tr>
                <td class="text-center">Coupon No</td>
                <td class="text-center"><?php if($res_10_number){
                  echo $res_10_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
                <td class="text-center"><?php if($res_11_number){
                  echo $res_11_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
                <td class="text-center"><?php if($res_12_number){
                  echo $res_12_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
            </tr>        
            <tr>
                <td class="text-center">#</td>
                <td class="text-center">13</td>
                <td class="text-center">14</td>
                <td class="text-center">15</td>
            </tr>
            <tr>
                <td class="text-center">Coupon No</td>
                <td class="text-center"><?php if($res_13_number){
                  echo $res_13_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
                <td class="text-center"><?php if($res_14_number){
                  echo $res_14_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
                <td class="text-center"><?php if($res_15_number){
                  echo $res_15_number;
                } else{
                  echo "No Winner Yet";
                }?></td>
            </tr>      
        </tbody>
    </table>
    
</div>






    <script src="assets/js/bootstrap.js"></script>
</body>
</html>