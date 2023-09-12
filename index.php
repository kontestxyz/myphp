<!DOCTYPE html>
<html>
<head>
    <title>Password Protected Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding-top: 188px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }

        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box; /* Added box-sizing property */
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #4caf50;
            border: none;
            border-radius: 3px;
            color: #fff;
            font-weight: bold;
            box-sizing: border-box; /* Added box-sizing property */
        }

        button[type="submit"]:hover {
            background-color: #45a049;
            cursor: pointer;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Password Protected Page</h1>
        <form method="POST" action="index.php">
            <label for="password">Enter the password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="access">Access</button>
        </form>
        <?php
        if(isset($_POST['access'])) {
            $password = $_POST['password'];

            if($password == "HELLO123") {
                session_start();
                $_SESSION['password_passed'] = true;
                header("Location: download.php");
                exit();
            } else {
                echo '<p class="error-message">Invalid password. Please try again.</p>';
            }
        }
        ?>
    </div>
</body>
</html>
