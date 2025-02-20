<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM orders WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $items = $_POST['items'];
    $location = $_POST['location'];
    $quantity = $_POST['quantity'];
    $message = $_POST['message'];

    $query = "UPDATE orders SET 
                name='$name', email='$email', phone='$phone', 
                items='$items', location='$location', 
                quantity='$quantity', message='$message'
              WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Order updated successfully!'); window.location.href='view_orders.php';</script>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
<style>

h2 {
    text-align: center;
    margin-top: 5%;
}
form{
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background: #ccc;
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

button,
button a {
    background: #007bff;
    color: white;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s;
    border: none;
    text-decoration: none;

}

button:hover {
    background: #0056b3;
}



</style>
<h2>Update Order</h2>
<form method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
    <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required>
    <input type="text" name="items" value="<?php echo $row['items']; ?>" required>
    <input type="text" name="location" value="<?php echo $row['location']; ?>" required>
    <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>" required>
    <textarea name="message"><?php echo $row['message']; ?></textarea>
    <button type="submit">Update Order</button>
</form>


<!-- simple_order1 -->

