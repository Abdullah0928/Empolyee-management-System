<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];

    $sql = "UPDATE employees SET name='$name', email='$email', position='$position' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Employee updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
