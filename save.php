<?php 
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if(empty($username) || empty($email) || empty($password)){
            die("All fields are required.");
        }
        
        if(strlen($password) < 4){
            die("Password must be at least 4 characters long.");
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $data = $username . " || " . $email . " || " . $hashed_password . PHP_EOL;
        file_put_contents("users.txt",$data, FILE_APPEND);

        echo "Data saved successfully.";
        echo "<br><a href='index.php'>Go Back</a>";
        
    }
?>