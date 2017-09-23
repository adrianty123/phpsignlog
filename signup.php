<?php	
	if(isset($_POST["signup"])){

		$con = new PDO("mysql:host=localhost; dbname=db_users;","root","");

	}

		$sql="INSERT INTO uuser VALUES('". $_POST["txtuname"] ."', '". $_POST["txtpword"] ."')";
		$con->query($sql);
		echo "New Record Saved!"
?>