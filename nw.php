<?php
    include 'setup.php';
    $reg_id = $_POST['reg_id'];
    $car_name = $_POST['car_name'];
    $car_type = $_POST['car_type'];
    $image = $_POST['image'];
    $rental_price= $_POST['rental_price'];
    $status = $_POST['status'];

    $qry = "INSERT INTO `car_detail`(`car_type_id`, `reg_id`, `car_name`, `image`, `rental_price`, `status`) VALUES ($car_type,'$reg_id','$car_name','$image',$rental_price,'$status')";
    $result=mysqli_query($conn, $qry);
    if($result){

      echo "New record created successfully. ";
    
  } else {
      echo "please enter details and click submit.<br>";
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>
