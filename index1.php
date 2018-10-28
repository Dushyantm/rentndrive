 <?php
			include 'setup.php';
			$sql = "SELECT * FROM car_type WHERE in_stock>0";
			$result = mysqli_query($conn, $sql);
			echo "<table class='w3-table w3-bordered'>";  
			echo'<th>Car Type ID</th><th>Car Type name</th><th>In Stock (Units)</th>'; 
			while($data = mysqli_fetch_array($result))
			{

			echo'<tr>'; 
			echo '<td>'.$data['car_type_id'].'</td><td>'.$data['car_type_name'].'</td><td>'.$data['in_stock'].'</td>'; 
			echo'</tr>'; 
			}

			echo "</table>"; 
?>