<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

    // conection Info
    $servername = "rm-l4v670ce623mi4fxv.mysql.me-central-1.rds.aliyuncs.com";
    $username = "amb";
    $password = "No123456";
    $DBName = "demodb";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $DBName);
		// Check connection
	
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
		
		// Taking all 5 values from the form data(input)
		$Respiration = $_POST['Respiration'];
		$Temperature = $_POST['Temperature'];
		$Oxygen_saturation = $_POST['Oxygen_saturation'];
		$Heart_beat = $_POST['Heart_beat'];
		$Pressure = $_POST['Pressure'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO patients (Pressure,Oxygen_saturation,Temperature,Heart_beat,Respiration) VALUES ('$Pressure','$Oxygen_saturation','$Temperature','$Heart_beat','$Respiration')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse the admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$Respiration\n $Temperature\n "
				. "$Oxygen_saturation\n $Heart_beat\n $Pressure");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>