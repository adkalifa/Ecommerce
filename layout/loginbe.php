
<?php
session_start();
require "confiq.php";
if(!isset($_SESSION['user_id'])){
	if(isset($_POST['login'])){
		$email = $_POST['emailid'];
		$lgpassword = $_POST['password'];
        $cons = new mysqli($servername, $username, $dbpassword, $dbname);
        if ($cons->connect_errno) {
            echo $mysqli->connect_error;
        }

        $sql = "SELECT username FROM createaccount WHERE email='$email' AND password='$lgpassword';";
       
        $res = $cons->query($sql);
    
		$rows = $res->num_rows;
		if($rows == 1){
			$row = $res->fetch_assoc();
			$_SESSION['user_id'] = $row['username'];
			header("location:login.php");
		}
		else{
			echo '<div class="alert-danger">Email or Password Incorrect..!</div>';
		}
	}
}
else{
	header("location: index.php");
}
?>