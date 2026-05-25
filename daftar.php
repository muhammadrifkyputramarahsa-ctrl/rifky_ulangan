<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registrasi Siswa</h2>
    <form action="daftar.php" method="POST">
        <label for="username">username</label>
        <input type="text" name="username"><br><br>

        <label for="email">email</label>
        <input type="email" name="email"><br><br>

        <label for="password">password</label>
        <input type="password" name="password"><br><br>

        <input type="submit" name="submit" value="Daftar">
    </form>
</body>
</html>

<?php
include 'koneksi.php';

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
if (!empty($username) && !empty($email) && !empty($password)){
    
    $query =  "INSERT INTO tb_users(username, email, password)
    VALUES  ('$username', '$email', '$password')";
    $eksekusi = mysqli_query($koneksi, $query);
}
}
?>