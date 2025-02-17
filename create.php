<?php
		echo "Hello World";
		var_dump($_POST);
		?>
		<br>
		<br>
		<br>
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "lorraine";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully";
?>