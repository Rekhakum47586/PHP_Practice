<html>

<body>
	<?php
		
	
		
		$q = intval($_GET['q']);
		$conn = mysqli_connect('localhost','i95dev','i95dev','Rekha');
		
		$query = 'SELECT * FROM new_table where id='.$q;
		
		if(!$conn){
			echo "Something went wrong";
			return;
		}
		
		
		$result = mysqli_query($conn,$query);
		
		echo "<table>
		<tr>
			<th>name</th>
			<th>phone</th>
			<th>country</th>

		</tr>";
		while($row = mysqli_fetch_array($result)) {
		  echo "<tr>";
		  echo "<td>" . $row['name'] . "</td>";
		  echo "<td>" . $row['phone'] . "</td>";
		  echo "<td>" . $row['country'] . "</td>";
		  echo "</tr>";
		}
		echo "</table>";
		mysqli_close($con);
	?>
	
	
</body>

</html>
