<?php 

session_start();
require 'function.php';

// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if( $key === hash('sha256', $row['username']) ) {
        $_SESSION['login'] = true; 
    }

}

if ( isset($_SESSION["login"]) ) {
    header("location: index.php");
    exit;
}


if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if( mysqli_num_rows($result) === 1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"]) ) {

            // set session
            $_SESSION["login"] = true;

            // cek remember me
            if( isset($_POST['remember']) ) {
                // buat cookie
                setcookie('id', $row['id'], time()+60);
                setcookie('key', hash('sha256', $row['username']),
                    time()+60);
            }

            header("location: index.php");
            exit;
        }
    }

    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Prompt&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">

        <h1 class="halaman">Halaman Login</h1>
        
        <?php if( isset($error) ) : ?>
            <p style="font-family: poppins; font-size:small; margin-bottom:15px; margin-left: 125px; color:red; font-weight:bold;">username / password salah</p>
            <?php endif; ?>
            
            <form action="" method="post">
                
                <ul>
                    <li>
                        <label for="username"></label>
                        <input class="input1" type="text" name="username" id="username" placeholder="username">
                    </li>
                    <li>
                        <label for="password"></label>
                        <input class="input1" type="password" name="password" id="password" placeholder="password">
                    </li>
                    <li>
                        <input type="checkbox" name="remember" id="remember">
                        <label class="remember" for="remember">Remember me</label>
                    </li>
        <li>
            <button type="submit" class="btn btn-primary" name="login">Login</button>
        </li>
    </ul>
    
</form>


</div>
</body>
</html>