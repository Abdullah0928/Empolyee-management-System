<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];

    $sql = "INSERT INTO employees (name, email, position) VALUES ('$name', '$email', '$position')";

    if ($conn->query($sql) === TRUE) {
        echo "Employee added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
