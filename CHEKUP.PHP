<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sachindb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted for signup
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
    $username = $_POST["signup_username"];
    $password = $_POST["signup_password"];

    // TODO: Add password hashing for security

    // Insert new user into the database
    $signup_sql = "INSERT INTO `bot` (username, password) VALUES ('$username', '$password')";
    if ($conn->query($signup_sql) === TRUE) {
        echo "Signup successful! You can now log in.";
 
    } else {
        echo "Error: " . $signup_sql . "<br>" . $conn->error;
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup and Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
        }

        form {
            width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            text-align: center;
            margin-top: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h2>Signup</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="signup_username">Username:</label>
        <input type="text" name="signup_username" required><br>

        <label for="signup_password">Password:</label>
        <input type="password" name="signup_password" required><br>

        <input type="submit" name="signup" value="Signup">
    </form>
    <p>Already have an account? <a href="login.php">Login here</a></p> 
</body>
</html>