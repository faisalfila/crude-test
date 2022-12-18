<?php
    include 'db.php';
    $sql = "SELECT * FROM demo_table";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['score'] . "</td>";
        echo '<td><a class="btn btn-primary" href="index.php?=id=' . $row['id'] . '" role="button">Update</a></td>';
        echo '<td><a class="btn btn-danger" href="index.php?=id=' . $row['id'] . '" role="button">Delete</a></td>';
        echo "</tr>";
    }

    $conn->close();
?>