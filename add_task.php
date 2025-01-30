<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST['employee_id'];
    $task = $_POST['task'];

    $sql = "INSERT INTO tasks (employee_id, task) VALUES ('$employee_id', '$task')";

    if ($conn->query($sql) === TRUE) {
        echo "Task assigned successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
