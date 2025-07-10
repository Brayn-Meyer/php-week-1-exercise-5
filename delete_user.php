<?php
    include "exercise5-db.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];

        $sql = "DELETE FROM users WHERE id = $id";

        if ($conn->query($sql)) {
            echo "User has been deleted :(";
        } else {
            echo "Error deleting record : " . $conn->error;
        }
    }

    $conn->close();

?>