<?php
    include "exercise5-db.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];

        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

        if ($conn ->query($sql) == TRUE) {
            echo "New user has been added :(";
        } else {
            echo "Error" . $sql . "<br>" . $conn->error;
        }

        $conn -> close();

    }
?>