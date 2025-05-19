<?php
$host = "localhost";        // اسم السيرفر
$user = "testuser";         // اسم المستخدم لقاعدة البيانات
$password = "testpassword"; // كلمة المرور
$dbname = "login";          // اسم قاعدة البيانات

// إنشاء الاتصال
$conn = new mysqli($host, $user, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// يمكنك استخدام هذا الملف عبر: include أو require في الصفحات الأخرى
?>
