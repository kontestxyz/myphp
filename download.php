<?php
session_start();

// Check if the user has passed the password test
if (!isset($_SESSION['password_passed']) || $_SESSION['password_passed'] !== true) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Download Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding-top: 188px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px; /* Updated padding-top value */
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .status-message {
            text-align: center;
            color: #4caf50;
            margin-top: 20px;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
        }

        .button {
            flex-grow: 1;
            display: block;
            padding: 10px;
            margin-right: 5px;
            border: none;
            border-radius: 3px;
            color: #fff;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
        }

        .button-blue {
            background-color: #2196f3;
        }

        .button-blue:hover {
            background-color: #1976d2;
        }

        .button-orange {
            background-color: #ff9800;
        }

        .button-orange:hover {
            background-color: #f57c00;
        }

        .button-red {
            background-color: #f44336;
        }

        .button-red:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Status: OK</h1>
        <p class="status-message">Access granted. You can download the file here.</p>
        <div class="button-group">
            <a href="download1.php" class="button button-blue">DOWNLOAD1</a>
            <a href="download2.php" class="button button-orange">DOWNLOAD2</a>
        </div>
        <div style="height: 50px;"></div>
        <a href="index.php?logout=true" class="button button-red">LOG OUT</a>
    </div>
</body>
</html>
