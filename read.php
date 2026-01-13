<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Users</title>
</head>
<body>
    <h1>Saved Users</h1>
    <?php
        $file = "users.txt";

        if(!file_exists($file) || filesize($file) == 0){
            echo "<p>No users found.</p>";        
        } else{
            $users = file($file);
            echo "<ul>";
            foreach($users as $user){
                echo "<li>" . htmlspecialchars($user) . "</li>";
            }
            echo "</ul>";
        }
    ?>
    <a href="index.php">Add New User</a>
</body>
</html>