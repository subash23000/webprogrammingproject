<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Table</title>
    <style>
body {
    background: wheat;
}
h2,
p {
    text-align: center;
    margin-top: 5%;
    font-weight: bold;
}
form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    gap: 10px;
}

input, textarea, button {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

input:focus, textarea:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}
button a {
    color: white;
    text-decoration: none;

}
button {
    background: #007bff;
    color: white;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s;
    border: none;

}

button:hover {
    background: #0056b3;
}

    </style>
</head>
<body>
    <section>
        <h2>Reserve Your Table</h2>
        <p>Fill out the form below to reserve your spot at Himalayan Cafe</p>
        <form action="submit_reservation.php" method="post">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter Your Phone Number" required>
            </div>
            <div class="form-group">
                <label for="date">Reservation Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Reservation Time:</label>
                <input type="time" id="time" name="time" required>
            </div>
            <div class="form-group">
                <label for="guests">Number of Guests:</label>
                <input type="number" id="guests" name="guests" min="1" max="10" required>
            </div>
            <div class="form-group">
                <label for="message">Special Requests:</label>
                <textarea id="message" name="message" placeholder="Any specaial requests?" rows="4"></textarea>
            </div>

            <button type="submit" class="reserve-button">Make Reservation</button>
            <button><a href="..//login/dashboard.php">Back To Home</a></button>


        </form>
    </section>
    
</body>
</html>