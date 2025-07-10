<?php
    include "exercise5-db.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];

        $sql = "UPDATE users SET name = '$name', email = '$email' WHERE id = $id";

        if ($conn->query( $sql ) === TRUE) {
            echo "User information was updated :)";
        } else {
            echo "Error updating record : " . $conn->error;
        }

        $conn->close();
    }
?>