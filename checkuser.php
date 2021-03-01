<?php
    include("auth.php");
    include("db.php");
?>

<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' and user_password='$password' ";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    if($row){
        $_SESSION['id'] = $row['user_id'];//ให้หน้าเพจ จดจำ id
        $_SESSION['username'] = $row['username'];//ให้หน้าเพจ จดจำ username
        $_SESSION['name'] = $row['firstname'];
        echo"<center>";
            echo "<p style='color:green'>...รอสักครู่กำลังเข้าสู่ระบบสมาชิก...</p>";
            header("refresh:2 ./member/index.php");
        echo "</center>";
    }
    else{
        echo "<center>";
            echo "<p style='color:red'>...ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง รอสักครู่...</p>";
            header("refresh:2 login.php");
        echo "</center>";
    }
?>