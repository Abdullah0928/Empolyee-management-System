<?php
include 'db_connect.php';

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Email: " . $row['email'] . " - Position: " . $row['position'] . "<br>";
    }
} else {
    echo "No employees found";
}

$conn->close();
?>
