<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Delete record by ID
    $sql = "DELETE FROM devices WHERE id=$id";
    $conn->query($sql);
}

header("Location: index.php");
?>