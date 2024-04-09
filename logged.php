<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 {
            color: #333;
        }
        .logout-btn {
            padding: 10px 20px;
            background-color: #ff6347;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .logout-btn:hover {
            background-color: #e74c3c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Logged In Page!</h1>
        <p>You are successfully logged in.</p>
        <button class="logout-btn" onclick="logout()">Logout</button>
    </div>

    <script>
        function logout() {
            // Redirect to the sign-in page or any other appropriate page
            window.location.href = "signin.php";
        }
    </script>
</body>
</html>
