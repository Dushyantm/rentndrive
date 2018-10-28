<?php
            include 'setup.php';
            $sql = "SELECT * FROM car_detail JOIN car_type ON car_detail.car_type_id= car_type.car_type_id and status='Available' limit 6";
            $result = mysqli_query($conn, $sql);
            while($data = mysqli_fetch_array($result)){
      ?>
        <li>
          <a href="rent.php?id=<?php echo $data['car_id'] ?>">
            <img class="thumb" src="cars/<?php echo $data['image'];?>" width="300" height="200">
          </a>
          <span class="price"><?php echo '₹ '.$data['rental_price'];?></span>
          <div class="property_details">
            <h1>
              <a href="rent.php?id=<?php echo $data['car_id'] ?>"><?php echo 'Car Name : '.$data['car_name'];?></a>
            </h1>
            <h2>Car Type: <span class="property_size"><?php echo $data['car_type_name'];?></span></h2>
          </div>
        </li>
      <?php
        }
      ?>