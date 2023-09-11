<?php
session_start(); // Mulai sesi

$servername = "localhost:3306";
$username_db = "root";
$password_db = "";
$database_name = "toko";

$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli($servername, $username_db, $password_db, $database_name);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("select * from admin where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $password) {
            $_SESSION['loggedin'] = true; // Set variabel sesi untuk menunjukkan bahwa pengguna sudah login
            $_SESSION['username'] = $data['username']; // Simpan nama pengguna dalam sesi

            echo "<div class='center'>";
            echo "<h2 class='text'>Login Berhasil, Halo " . $data['username'] . "</h2>";
            echo "<a class='custom-link' href='read.php'>Pergi ke Halaman Read</a>";
            echo "</div>";
            
        } else {
            echo "<h2>Email atau Password salah</h2>";
        }
    } else {
        echo "<h2>Email atau Password salah</h2>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: url(https://i.makeagif.com/media/2-21-2022/RFCqFj.gif);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            height: 100vh;
        }

        .center {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .text {
            font-size: 24px;
            color: white;
            /* Ubah warna teks sesuai keinginan */
        }

        .custom-link {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            background-color: #007BFF;
            /* Ubah warna latar belakang sesuai keinginan */
            color: #fff;
            /* Ubah warna teks sesuai keinginan */
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .custom-link:hover {
            background-color: #0056b3;
            /* Warna latar belakang saat hover */
        }
    </style>
</head>

<body>

</body>

</html>