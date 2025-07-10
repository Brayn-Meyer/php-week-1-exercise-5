<?php
    include "exercise5-db.php";

    $sql = "SELECT * FROM users";

    $results = mysqli_query($conn, $sql);

    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            echo $row["name"]. "<br>";
            echo $row["email"]."<br>";
        }
    } else {
        echo "No users found.";
    }

    mysqli_close($conn);
?>