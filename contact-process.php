<?php

include 'config/database.php';

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

$sql = "INSERT INTO contacts(name,email,message)
VALUES(?,?,?)";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sss",
    $name,
    $email,
    $message
);

if(mysqli_stmt_execute($stmt)){
    echo "
    <script>
        alert('Pesan berhasil dikirim');
        window.location='index.php';
    </script>";
}else{
    echo "
    <script>
        alert('Pesan gagal dikirim');
        window.location='index.php';
    </script>";
}
?>