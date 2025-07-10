<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo $_POST["name"] . "<br>";
        echo $_POST["email"] . "<br>";
        echo $_POST["message"] . "<br>";
    }
?>