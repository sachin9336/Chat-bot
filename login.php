<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sachindb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the form is submitted for login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $login_username = $_POST["login_username"];
    $login_password = $_POST["login_password"];

    // TODO: Add password hashing for security

    // Check if user exists in the database
    $login_sql = "SELECT * FROM bot WHERE username='$login_username' AND password='$login_password'";
    $result = $conn->query($login_sql);

    if ($result->num_rows > 0) {
        // Redirect to the welcome page on successful login
        header("Location: chatbot.php");
        exit();
    } else {
        echo "Invalid username or password";
   }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #333;
            position: relative;
            top:-147px;
            left:195px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="login_username">Username:</label>
        <input type="text" name="login_username" required><br>
        
        <label for="login_password">Password:</label>
        <input type="password" name="login_password" required><br>
        
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>