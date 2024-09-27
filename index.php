<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET and POST Form Example</title>
</head>
<body>
    <h2>GET Method Form</h2>
    <form action="index.php" method="get">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <br><br>
        <input type="submit" value="Submit (GET)">
    </form>

    <h2>POST Method Form</h2>
    <form action="index.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" value="Submit (POST)">
    </form>

    <hr>

    <?php
  
    if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
        echo "<h3>GET Method Data:</h3>";
        $name = htmlspecialchars($_GET['name']);
        $age = htmlspecialchars($_GET['age']);
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
    }

    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
        echo "<h3>POST Method Data:</h3>";
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        echo "Email: " . $email . "<br>";
        echo "Password: " . $password . "<br>";
    }
    ?>
</body>
</html>
