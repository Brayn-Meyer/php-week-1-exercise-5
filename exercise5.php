<!DOCTYPE html>
<html>
<head>
    <title>Exercise 5</title>
</head>
<body>
    <h3>Task 1</h3>
    <form action="submission.php" method="post">
        <label>Name : </label>
        <input type="text" name="name" required>
        <br>
        <label>Email : </label>
        <input type="text" name="email" required>
        <br>
        <label>Message : </label>
        <input type="text" name="message" required>
        <br>
        <button type="submit">Show Info</button>
    </form>

    <br><br><br>

    <h3>Task 2</h3>
    <?php
        echo $_SERVER["SERVER_NAME"] . "<br>";
        echo $_SERVER["SERVER_SOFTWARE"] . "<br>";
        echo $_SERVER["REQUEST_METHOD"] . "<br>";
    ?>

    <br><br><br>

    <h3>Task 3</h3>
    <?php
        include "exercise5-db.php";

        try {
            $sql = "CREATE TABLE users( id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(100), email VARCHAR(100) );
                INSERT INTO users (name, email) VALUES ('Steve', 'Steve@steven.com');";
            
            if ($conn->multi_query( $sql ) === TRUE) {
                echo "Student information was updated :)";
            } else {
                echo "Error updating record : " . $conn->error;
            }
        } catch (mysqli_sql_exception){
            echo "User been there.";
        }
        
        $conn->close();
    ?>
    
    <br><br><br>

    <h3>Task 4</h3>
        <form action="create_user.php" method="post">
            <label>Name : </label>
            <input type="text" name="name">
            <br>
            <label>Email : </label>
            <input type="text" name="email">
            <br>
            <button type="submit">Create User</button>
            <br><br>
        </form>
        <form action="review_users.php" method="post">
            <button type="submit">Review Users</button>
            <br><br>
        </form>
        <form action="update_user.php" method="post">
            <label>ID (to update user) : </label>
            <input type="text" name="id">
            <br>
            <label>Name : </label>
            <input type="text" name="name">
            <br>
            <label>Email : </label>
            <input type="text" name="email">
            <br>
            <button type="submit">Update User</button>
            <br><br>
        </form>
        <form action="delete_user.php" method="post">
            <label>ID (to delete user) : </label>
            <input type="text" name="id">
            <button type="submit">Delete User</button>
            <br><br>
        </form>
    
    <br><br><br>

    <h3>Task 5</h3>
    <form action="create_user.php" method="post">
        <label>Name : </label>
        <input type="text" name="name">
        <br>
        <label>Email : </label>
        <input type="text" name="email">
        <br>
        <label>Message : </label>
        <input type="text" name="message">
        <br>
        <button type="submit">Post Message</button>
    </form>
    <br><br>
    <div>
        <?php
            include "exercise5-db.php";

            $users = "SELECT * FROM users";
            $users_results = mysqli_query($conn, $users);

            echo "<table border='1px'>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr> ";

            if (mysqli_num_rows($users_results) > 0) {
                while ($row = mysqli_fetch_assoc($users_results)) {
                    echo "<tr>";
                    echo "<td>" . $row["name"]."</td>".  "<td>" . $row["email"]."</td>". "<td>" . $row["message"]."</td>";
                    echo "<tr>";
                }
            } else {
                echo "No users found.";
            }
        ?>
    </div>
    <form action="update_user.php" method="post">
        <label>ID (to update user) : </label>
        <input type="text" name="id">
        <br>
        <label>Name : </label>
        <input type="text" name="name">
        <br>
        <label>Email : </label>
        <input type="text" name="email">
        <br>
        <label>Message : </label>
        <input type="text" name="message">
        <br>
        <button type="submit">Update User</button>
        <br><br>
    </form>
    <br><br>
    <form action="delete_user.php" method="post">
        <label>ID (to delete user) : </label>
        <input type="text" name="id">
        <button type="submit">Delete User</button>
        <br><br>
    </form>
    <br><br>
</body>
</html>