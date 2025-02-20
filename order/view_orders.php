<?php
include 'db.php';

$result = mysqli_query($conn, "SELECT * FROM orders ORDER BY order_date DESC");
?>
<style>
    h2,
    button a {
    text-align: center;
    top: 20%;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 5%;
    }
    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #007bff;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    a {
        text-decoration: none;
        padding: 4px 8px;
    }
    button {
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
    background: wheat;
    color: white;
}

</style>
<main>
<h2>ALL ORDERS</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Items</th>
        <th>Location</th>
        <th>Quantity</th>
        <th>Message</th>
        <th>Date</th>
        <th>Actions</th>
    </tr>

    <?php while ($row = mysqli_fetch_array($result)) { ?>   
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['items']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td><?php echo $row['order_date']; ?></td>
            <td>
                <a href="update_order.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete_order.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        
        <?php } ?>
</table>
<div>
    <button><a href="order.php">BACK TO ORDER</a></button>
</div>

</main>
