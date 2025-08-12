<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$database = "car_showroom";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$car_model = $_POST['car_model'];
$cost = $_POST['cost'];

// Insert into database
$sql = "INSERT INTO shop_purchases (name, phone, car_model, cost) 
        VALUES ('$name', '$phone', '$car_model', '$cost')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Purchase booked successfully!'); window.location.href='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
