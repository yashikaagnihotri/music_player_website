<?php 
	include("connection.php");
	if(isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

	// if("select * from login where email = '$email';") {
	// 	echo '<script>
	// 	alert("Use another email.");
    //         </script >';
	// }

    if(!empty($email) && !empty($password)) {
		$sql = "insert into login (email, password) values ('$email', '$password');";
		mysqli_query($conn, $sql);

		header("Location: welcome.php");
		die;
	} 
?>