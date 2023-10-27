<?php
    include('../connection.php');


    // Check if the form was submitted
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);
        
        $register_date = date('Y/m/d');
        
        
        if ((strlen($username) < 3 || strlen($username) > 15) || (strlen($password) < 6 || strlen($password) > 15)) {
            echo 'Username must be between 3 and 15 characters long. Password must be between 6 and 15 characters long';
        } else{
            // Sanitize input to prevent SQL injection (consider using prepared statements for better security)
            $username = mysqli_real_escape_string($connection, $username);
            $password = mysqli_real_escape_string($connection, $password);

            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            $query = "INSERT INTO users (name, password, register_date) VALUES ('$username', '$hashedPassword', '$register_date')";
            $result = mysqli_query($connection, $query);
            if ($result) {
                setcookie("username", $username, time() + 86400, "/");
                header('Location: ../home.php');
            } else {
                header('Location: ./form.php');
                echo "Something went wrong";
            }
        }
    } else {
        header('Location: ./form.php');
    }
?>