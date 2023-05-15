<?php
//atur koneksi ke database
$host_db    = "localhost";
$user_db    = "root";
$pass_db    = "";
$nama_db    = "praktikum8";
$koneksi    = mysqli_connect($host_db, $user_db, $pass_db, $nama_db);

//atur variabel
$err        = "";
$username   = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi input (misalnya, pastikan username dan password tidak kosong)

    if (empty($username) || empty($password)) {
        $err .= "<li>Silakan masukkan username dan password.</li>";
    } else {
        // Periksa apakah username sudah digunakan
        $sql = "SELECT * FROM login WHERE username = '$username'";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) > 0) {
            $err .= "<li>Username <b>$username</b> sudah digunakan.</li>";
        }

        if (empty($err)) {
            // Jika tidak ada kesalahan, lakukan proses registrasi

            // Enkripsi password sebelum disimpan ke database
            $hashedPassword = md5($password);

            // Simpan username dan password ke tabel login
            $sql = "INSERT INTO login (username, password) VALUES ('$username', '$hashedPassword')";
            mysqli_query($koneksi, $sql);

            // Redirect ke halaman login setelah registrasi berhasil
            header("Location: index.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrasi</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    <div class="container my-4">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Registrasi Akun</div>
                </div>
                <div style="padding-top:30px" class="panel-body">
                    <?php if ($err) { ?>
                        <div id="login-alert" class="alert alert-danger col-sm-12">
                            <ul><?php echo $err ?></ul>
                        </div>
                    <?php } ?>
                    <form id="loginform" class="form-horizontal" action="" method="post" role="form">
                        <div
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="<?php echo $username ?>" placeholder="Username">
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 controls">
                                <input type="submit" name="register" class="btn btn-primary" value="Register">
                            </div>
                        </div>
                    </form>
                    <div style="margin-top:10p" class="form-group">
                        <div class="col-sm-12 controls">
                            <a href="index.php" class="btn btn-primary">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
