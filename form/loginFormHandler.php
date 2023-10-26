<?php
include('../connection.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve user information from the database
    $query = "SELECT id, name, password FROM users WHERE name='$username'";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Check if the provided password matches the stored password
        if (password_verify($password, $user['password'])) {
            // echo "Login successful. Welcome, " . $user['name'];
            header('Location: ../home.php');
        } else {
            header('Location: ./loginForm.php');
            // echo "Login failed. Incorrect password.";
        }
    } else {
        header('Location: ./loginForm.php');
        // echo "Login failed. User not found.";
    }
}

?>
