<?php
    session_start();
    if (isset ($_POST['login']))
    {
        $user = $_POST['user'];
        $pass = $_POST ['pass'];

        if ($user == "ara" && $pass == "rahasia")
        {
            $_SESSION['login'] = $user;
            echo "<h1> User Authentification anda diterima, selamat ya </h1>";
            
        }else {
            echo "<h1>Username atau password anda salah</h1>";
        }
    }else {
            ?>
<html>
    <head>
        <title>[ Login di sini ]</title>
    </head>
    <body>
    <form method="post" action="">
        <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="user" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="pass" required></td>
        </tr>
        <tr>
            <td><input type="submit" name="login" value= "Log In"></td>
        </tr>
        </table>
    </form>
</body>
</html>
<?php
        }
?>