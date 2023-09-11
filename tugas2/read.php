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

<?php include 'connect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="min-vh-100 d-flex align-items-center body">
    <div class='card w-90 m-auto p-3 bgcard'>
        <h3 class="text-center ">Read</h3>
        <table class="table table-striped table-primary">
            <thead>
                <tr>
                    <th scope="col">Nama Buah</th>
                    <th scope="col">Tanggal Dikirim</th>
                    <th scope="col">Kondisi Buah</th>
                    <th scope="col">Jumlah Buah</th>
                    <th scope="col">Sisa Stok</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $sql = "select * from fruits";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($data = mysqli_fetch_assoc($result)) {
                        $id = $data['id'];
                        $nama_buah = $data['nama_buah'];
                        $tanggal_dikirim = $data['tanggal_dikirim'];
                        $kondisi_buah = $data['kondisi_buah'];
                        $jumlah_buah = $data['jumlah_buah'];
                        $sisa_stok = $data['sisa_stok'];
                        echo '
                <tr>
                  <td>' . $nama_buah . '</td>
                  <td>' . $tanggal_dikirim . '</td>
                  <td>' . $kondisi_buah . '</td>
                  <td>' . $jumlah_buah . '</td>
                  <td>' . $sisa_stok . '</td>
                  <td claas="text-center">
                      <a href="update.php?id=' . $id . '" class="btn btn-sm btn-primary">Update</a>
                      <button onClick="hapus.(' . $id . ')" class="btn btn-sm btn-danger">Delete</button>
                  </td>
                </tr>
                ';
                    }
                }
                ?>
            </tbody>
        </table>
        <a href="./create.php" type="button" class="btn justify-content-end mx-4 btn-outline-success">Tambahkan Buah <i
                class="fa-solid fa-plus"></i></a>
        <button onclick="logout()" type="button" class="btn justify-content-end mx-4 btn-outline-danger mt-2">Logout <i
                class="fa-solid fa-right-from-bracket"></i></button>

    </div>
    <script>
        function hapus(id) {
            var yes = confirm('Yakin di hapus?');
            if (yes == true) {
                window.location.href = "delete.php?id=" + id;
            }
        }
    </script>
    <script>
        function logout() {
            var yes = confirm('Yakin ingin logout?');
            if (yes == true) {
                window.location.href = "logout.php";
            }
        }
    </script>
</body>

</html>