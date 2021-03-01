<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
       <title>Login</title>
       <link rel="stylesheet" href="register.css">
    </head>
    <body>
        <div class="form">
            <h1>เข้าสู่ระบบ</h1>
            <form action="checkuser.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Login">
            </form>
            <p>ยังไม่ได้สมัครสมาชิก<a href="register.php">สมัครสมาชิก</a></p>
        </div>
    </body>
</html>