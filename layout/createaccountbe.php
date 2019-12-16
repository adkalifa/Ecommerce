<?php 
    require 'confiq.php';
   
    $userName = typeInput($_POST["username"]);
    $email = typeInput($_POST["email"]);
    $password = typeInput($_POST["password"]);
    
    function typeInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if(!isset($_SESSION['user_id'])){
        $sql = "INSERT INTO createaccount(`username`, `email`, `password`)
            VALUE('$userName','$email','$password')";

        $conn = new mysqli($servername, $username, $dbpassword, $dbname);

        $res = $conn->query($sql);

        $conn->close();
        
        header("location: login.php");
    }
    echo '<div class="alert-success">successfully created</div>';
?>