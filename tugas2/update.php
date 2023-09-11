<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Mulai sesi jika belum dimulai
}

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php"); // Redirect ke halaman login jika belum login
    exit;
}

?>

<?php
include 'connect.php';
$id = $_GET['id'];
$get_data = "select * from fruits where id=$id";
$result_data = mysqli_query($conn, $get_data);
$row = mysqli_fetch_assoc($result_data);
$nama_buah = $row['nama_buah'];
$tanggal_dikirim = $row['tanggal_dikirim'];
$kondisi_buah = $row['kondisi_buah'];
$jumlah_buah = $row['jumlah_buah'];
$sisa_stok = $row['sisa_stok'];
if (isset($_POST['submit'])) {
    $nama_buah = $_POST['buah'];
    $tanggal_dikirim = $_POST['tanggal'];
    $kondisi_buah = $_POST['kondisi'];
    $jumlah_buah = $_POST['jumlah'];
    $sisa_stok = $_POST['stok'];
    $sql = "update fruits set id=$id, nama_buah='$nama_buah', tanggal_dikirim='$tanggal_dikirim', kondisi_buah='$kondisi_buah', jumlah_buah='$jumlah_buah', sisa_stok='$sisa_stok' where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:read.php');
    } else {
        die($conn->connect_error);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class='card w-50 m-auto p-3'>
        <h3 class="text-center ">Update</h3>
        <form method="post">
            <div class="mb-3">
                <label for="buah" class="form-label">Nama Buah</label>
                <input type="text" class="form-control" id="buah" name="buah" value="<?php echo $nama_buah ?>">
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Dikirim</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal"
                    value="<?php echo $tanggal_dikirim ?>">
            </div>
            <div class="mb-3">
                <label for="kondisi" class="form-label">Kondisi Buah</label>
                <input type="text" class="form-control" id="kondisi" name="kondisi" value="<?php echo $kondisi_buah ?>">
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah Buah</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo $jumlah_buah ?>">
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Sisa Stok</label>
                <input type="text" class="form-control" id="stok" name="stok" value="<?php echo $sisa_stok ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>