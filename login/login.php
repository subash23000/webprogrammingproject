<?php
include("db.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid username or password!";
    }
}
?>

<style>

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
    margin-top: 10%;
    }
form {
    width: 300px;
    margin: 50px auto;
    padding: 20px;
    background: #f5ebe0;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #c2a383; 
    border-radius: 5px;
    font-size: 16px;
    background: #fff;
    color: #5d4037;
}

input:focus {
    outline: 2px solid #a67c52; 
}

/* Buttons */
button {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    background: #a67c52; 
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background 0.3s;
}

button:hover {
    background: #8d6e63; 
}

button a {
    text-decoration: none;
    color: white;
    display: block;
    width: 100%;
}

button a:hover {
    text-decoration: underline;
}

body {
    background: #fffaf1;
    color: #5d4037;
    font-family: 'Arial', sans-serif;
}


</style>

<h2>LOGIN</h2>
<form action="" method="POST">
    <input type="text" name="username" required placeholder="Username">
    <input type="password" name="password" required placeholder="Password">
    <button type="submit">Login</button>
    <button type="submit"><a href="../login/register.php">Register</a></button>
</form>