<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hostname = $_POST['hostname'];
    $ip = $_POST['ip'];
    $mac = $_POST['mac'];

    // SQL query to insert data
    $sql = "INSERT INTO devices (hostname, ip_address, mac_address) VALUES ('$hostname', '$ip', '$mac')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to main page on success
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>