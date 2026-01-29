<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple IPAM System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4 text-center">📡 Network Inventory (IPAM)</h2>

    <div class="card p-4 mb-4 shadow-sm">
        <h5>Add New Device</h5>
        <form action="add.php" method="POST" class="row g-3">
            <div class="col-md-3">
                <input type="text" name="hostname" class="form-control" placeholder="Hostname" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="ip" class="form-control" placeholder="IP Address" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="mac" class="form-control" placeholder="MAC Address">
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary w-100">Add Device</button>
            </div>
        </form>
    </div>

    <table class="table table-bordered table-striped bg-white shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Hostname</th>
                <th>IP Address</th>
                <th>MAC Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // 1. Execute SQL query
            $sql = "SELECT * FROM devices ORDER BY id DESC";
            $result = $conn->query($sql);

            // 2. Check if any records exist
            if ($result->num_rows > 0) {
                // 3. Loop through the results
                while($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['hostname']; ?></td>
                    <td>
                        <span class='badge bg-success'><?php echo $row['ip_address']; ?></span>
                    </td>
                    <td><?php echo $row['mac_address']; ?></td>
                    <td>
                        <a href='delete.php?id=<?php echo $row['id']; ?>' class='btn btn-danger btn-sm'>Delete</a>
                    </td>
                </tr>
            <?php

                }
            } else {
                echo "<tr><td colspan='5' class='text-center'>No devices found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>