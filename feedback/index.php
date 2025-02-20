<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $message = $_POST['message'];

    $query = "INSERT INTO feedback (name, message) VALUES ('$name', '$message')";

    if (mysqli_query($conn, $query)) {
        echo "<p>Thank you for your feedback!</p>";
    } else {
        echo "<p>Error: " . mysqli_error($conn) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback table</title>
    <style>
        section {
            width: 50%;
            margin: auto;
            padding: 20px;
            background: wheat;
            border-radius: 8px;
            text-align: center;
            margin-top: 15%;

        }
        h2 {
            color: #333;
        }
        p {
            color: #666;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-right: 10%;
            margin-left: 10%;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid black;
            font-size: 16px;
        }
      
        button {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button a {
            color: white;
            text-decoration: none;
        }
        .feedback-button,
        button{
            background: #007bff;
            color: white;
        }

    </style>
</head>
<body>
    <section>
        <h2>We Value Your Feedback</h2>
        <p>Let us know how we can improve your experience.</p>
        <form action="#" method="post">
            <div>
                <input type="text" name="name" placeholder="Your Name" required>
            </div>
            <div>
                <input type="message" name="message" placeholder="Your Feedback" required>
            </div>
            <button type="submit" class="feedback-button">Submit</button>
            <button><a href="..//login/dashboard.php">Back to Home</a></button>

        </form>
    </section>
    
</body>
</html>