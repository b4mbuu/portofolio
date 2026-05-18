<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['user_name']));
    $comment = htmlspecialchars(trim($_POST['user_comment']));

    if (!empty($name) && !empty($comment)) {
        // Холболт
        $conn = new mysqli("localhost", "root", "", "your_database_name");

        if ($conn->connect_error) {
            die("Холболтын алдаа: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO comments (name, comment) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $comment);

        if ($stmt->execute()) {
            $_SESSION['message_send'] = "Сэтгэгдэл амжилттай илгээгдлээ!";
        } else {
            $_SESSION['guest_message_error'] = "Алдаа гарлаа. Дахин оролдоно уу.";
        }

        $stmt->close();
        $conn->close();
    } else {
        $_SESSION['guest_message_error'] = "Бүх талбарыг бөглөнө үү.";
    }

    header("Location: index.php");
    exit();
}
?>
