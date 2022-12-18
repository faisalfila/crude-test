<?php
    include 'db.php';
    $sql = "SELECT * FROM demo_table";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        if(isset($_GET['id']) && $row['id'] == $_GET['id']){
            echo '<form class="form-inline m-2" action="update.php" method="POST">';
            echo '<input type="text" class="form-control" name="name" value="'. $row['name'] .'"></td>';
            echo '<input type="text" class="form-control" name="score" value="'. $row['score'] .'"></td>';
            echo '<button type="submit" class="btn btn-primary">Save</button></td>';
            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '</form>';
        }
        else{
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['score'] . "</td>";
            echo '<td><a class="btn btn-primary" href="index.php?id=' . $row['id'] . '" role="button">Update</a></td>';
        }
        echo '<td><a class="btn btn-danger" href="index.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
        echo "</tr>";
    }

    $conn->close();
?>