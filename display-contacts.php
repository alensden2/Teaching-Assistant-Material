<?php
// Display available phone numbers
$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["phone"] . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No contacts available</td></tr>";
    }
    ?>
</table>
