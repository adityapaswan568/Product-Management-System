<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Product Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-wrapper">
        <div class="card">
            <h2>Welcome Back</h2>
            <form name="f1" action="Queries.php?cs=4" method="POST">
                <label for="unm">Username</label>
                <input type="text" id="unm" name="unm" placeholder="Enter your username" required>
                
                <label for="pass">Password</label>
                <input type="password" id="pass" name="pass" placeholder="Enter your password" required>
                
                <input type="submit" name="s1" value="Sign In">
            </form>
        </div>
    </div>
</body>
</html>