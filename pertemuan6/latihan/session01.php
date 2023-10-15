<?php
    session_start();
    if (isset ($_POST['login']))
    {
        $user = $_POST['user'];
        $pass = $_POST ['pass'];

        if ($user == "ara" && $pass == "0510")
        {
            $_SESSION['login'] = $user;
            echo "<h1> Anda Berhasil Login</h1>";
            echo "<h2> Klik <a href='session02.php'>di sini(session02.php)</a> 
            untuk menuju ke halaman pemeriksaan session";
        }else {
            echo "<h1>Username atau password salah</h1>";
            echo "<h2>Silahkan login <a href='session01.php'>di sini(session01.php)</a>";
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