<?php
session_start();
//require_once 'db_connect.php';
if (isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log out first!";
    header('location: adminpanel.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $query = "SELECT * FROM users WHERE email = :email";
    $stmt = $connection->prepare($query);
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        if ($user['role'] === 'admin') {
            
            header("Location: server.php");
            exit();
        } else {
            
            header("Location: index.php");
            exit();
        }
    } else {
        echo "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/form.css" type="text/css">
    <script src="https://kit.fontawesome.com/9269e9eed4.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    <div class="bg-img">
        <div class="content">
            <h2>Login</h2>
            <form method="post" action="server.php">
                <div class="field">
                    <i class="fa fa-user"></i>
                    <input type="text" required placeholder="email or phone" name="username">
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" class="password" required placeholder="password" name="password">
                </div>
                <br>
                <div class="field">
                    <input type="submit" placeholder="LOGIN" name="login_user">
                </div>
            </form>
            <div>
                <form method="post" action="userregister.html">


                    <div class="field">
                        <input type="submit" value="Greate a new user">
                    </div>


                </form>
            </div>

</body>

</html>