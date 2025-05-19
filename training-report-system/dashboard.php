<?php
session_start();

// التحقق من وجود جلسة للمستخدم
if (!isset($_SESSION["username"])) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>لوحة التحكم</title>
</head>
<body>
    <h1>مرحبًا، <?php echo htmlspecialchars($_SESSION["username"]); ?></h1>
    <p>لقد تم تسجيل الدخول بنجاح.</p>
    <a href="logout.php">تسجيل الخروج</a>
</body>
</html>
