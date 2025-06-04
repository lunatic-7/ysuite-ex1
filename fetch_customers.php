<?php
include "db.php";

$result = $conn->query("SELECT * FROM customers ORDER BY id DESC");

?>

<table id="customerDataTable" class="table table-striped table-bordered" style="width:100%">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Address</th>
            <th>E-mail</th>
            <th>Mobile</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td class="text-primary"><?php echo $row['id']; ?></td>
                <td class="text-primary"><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo htmlspecialchars($row['address']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
                <td><?php echo '+' . $row['isd_code'] . ' ' . $row['mobile']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>