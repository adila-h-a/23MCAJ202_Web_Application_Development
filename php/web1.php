<!DOCTYPE html>
<html>
<head>
    <title>Experiment-10</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: #f4f4f4;

        }
        .form-container {
            background: #d1ecd7;
            padding: 50px 70px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 100%;
            max-width: 300px;
        }
        .form-container input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 5px;
        }
        .form-container button {
            width: 100%;
            padding: 7px;
        }
        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Registration Form</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = trim($_POST["name"]);
            $email = trim($_POST["email"]);
            $password = trim($_POST["password"]);
            $errors = [];

            // Validate name
            if (empty($name)) {
                $errors[] = "Name is required.";
            }

            // Validate email
            if (empty($email)) {
                $errors[] = "Email is required.";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email format.";
            }

            // Validate password
            if (empty($password)) {
                $errors[] = "Password is required.";
            } elseif (strlen($password) < 6) {
                $errors[] = "Password must be at least 6 characters long.";
            }

            // Display errors or success message
            if (!empty($errors)) {
                echo "<ul>";
                foreach ($errors as $error) {
                    echo "<li style='color:red;'>$error</li>";
                }
                echo "</ul>";
            } else {
                echo "<p style='color:green;'>Registration successful!</p>";
            }
        }
        ?>
        <form method="post" action="">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br><br>
            
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br><br>
            
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br><br>
            
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>
