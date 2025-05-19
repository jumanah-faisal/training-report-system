<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db_host = "localhost";
    $db_user = "testuser";  \
    $db_pass = "testpassword";   
    $db_name = "login";         

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);


    if ($conn->connect_error) {
        die("فشل الاتصال: " . $conn->connect_error);
    }


    $username = $_POST["username"];
    $password = $_POST["password"];
    
  

  
    $stmt = $conn->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
    
        $_SESSION["username"] = $username;
        header("Location: dashboard.php"); 
        exit();
    } else {
        echo "اسم المستخدم أو كلمة المرور غير صحيحة.";
    }

    $stmt->close();
    $conn->close();
} else {
   
    header("Location: login1.html");
    exit();
}
?>



<!-- //////////////////////////////// -->

<?php
session_start();
require_once 'db_connection.php'; // أو include_once

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "اسم المستخدم أو كلمة المرور غير صحيحة.";
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: login1.html");
    exit();
}
?>

