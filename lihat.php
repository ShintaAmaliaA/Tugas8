<html>

<head>
    <title>FORMULIR PESERTA DIDIK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE81JT3GXWE0ngsV7Zt27NXFoaoApmYm811uXoPkF03wJ8ERdknLPHO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <a class="navbar-brand" href="logout.php">Logout</a>
</nav>
    <h1 class="text-center">Data Peserta</h1><br>
    <div class="card">
        <p>Tanggal : <?php echo date('d F Y'); ?></p>
        <div class="card-header bg-primary text-white">
            REGISTRASI PESERTA DIDIK
        </div>
        <div class="card-body">
            <form method="post" action="logOut.php">
                <div class="form-group row">
                    <table class="table table-bordered table-sm">
                        <tr>
                            <th>Jenis Pendaftaran</th>
                            <th>Tanggal Masuk Sekolah</th>
                            <th>NIS</th>
                            <th>Nomor Peserta Ujian</th>
                            <th>Apakah Pernah PAUD</th>
                            <th>Apakah Pernah TK</th>
                            <th>No. Seri SKHUN Sebelumnya</th>
                            <th>No. Seri Ijazah Sebelumnya</th>
                            <th>Hobi</th>
                            <th>Cita-cita</th>
                        </tr>
                        <?php
                    include 'koneksi.php';
                    $registrasi = mysqli_query($conn, "SELECT * FROM registrasi");
                    foreach ($registrasi as $row) {
           
                echo "<tr>
                    <td>" . $row['jenis_pendaftaran'] . "</td>
                    <td>" . $row['tahun_ajaran'] . "</td>
                    <td>" . $row['nis'] . "</td>
                    <td>" . $row['apakah_pernah_paud'] . "</td>
                    <td>" . $row['apakah_pernah_tk'] . "</td>
                    <td>" . $row['noSKHUN'] . "</td>
                    <td>" . $row['noIJAZA'] . "</td>
                    <td>" . $row['hobi'] . "</td>
                    <td>" . $row['hobi'] . "</td>
                <tr>";
                      
                    }
                    ?>
                    </table>
                </div>
        </div>
        <div class="card-header bg-primary text-white">
            REGISTRASI PESERTA DIDIK
        </div>
        <div class="card-body">
            <form method="post" action="logOut.php">
                <div class="form-group row">
                    <table class="table table-bordered table-sm">
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>NISN</th>
                            <th>NIK</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Berkebutuhan Khusus</th>
                            <th>Alamat Jalan</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Nama Dusun</th>
                            <th>Nama Kelurahan/Desa</th>
                            <th>Kecamatan</th>
                            <th>Kode Pos</th>
                            <th>Tempat Tinggal</th>
                        </tr>
                        <?php
                    include 'koneksi.php';
                    $datapribadi = mysqli_query($conn, "SELECT * FROM data_pribadi");
                    foreach ($datapribadi as $row) {
           

                echo "<tr>
                    <td>" . $row['nama'] . "</td>
                    <td>" . $row['jenis_kelamin'] . "</td>
                    <td>" . $row['nisn'] . "</td>
                    <td>" . $row['nik'] . "</td>
                    <td>" . $row['tempat_lahir'] . "</td>
                    <td>" . $row['tanggal_lahir'] . "</td>
                    <td>" . $row['agama'] . "</td>
                    <td>" . $row['berkebutuhan_khusus'] . "</td>
                    <td>" . $row['alamat_jalan'] . "</td>
                    <td>" . $row['rt'] . "</td>
                    <td>" . $row['rw'] . "</td>
                    <td>" . $row['nama_dusun'] . "</td>
                    <td>" . $row['nama_kelurahan_desa'] . "</td>
                    <td>" . $row['kecamatan'] . "</td>
                    <td>" . $row['kode_pos'] . "</td>
                    <td>" . $row['tempat_tinggal'] . "</td>
                <tr>";

                    }
                    ?>
                    </table>
                </div>
                <br>
            </form>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group row">
            <table class="table table-bordered table-sm">
                <tr>
                    <th>Moda Transportasi</th>
                    <th>Nomor HP</th>
                    <th>Nomor Telepon</th>
                    <th>E-mail Pribadi</th>
                    <th>Penerima KPS/PKH/KIP</th>
                    <th>No.KPS/KK/PKH/KIP</th>
                    <th>Kewarganegaraan</th>
                    <th>Nama Negara</th>

                </tr>
                <?php
                    include 'koneksi.php';
                    $datapribadi = mysqli_query($conn, "SELECT * FROM data_pribadi");
                    foreach ($datapribadi as $row) {
            
                echo "<tr>
                <td>" . $row['moda_transportasi'] . "</td>
                    <td>" . $row['nomor_hp'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['penerima_kip'] . "</td>
                    <td>" . $row['no_kip'] . "</td>
                    <td>" . $row['kewarganegaraan'] . "</td>
                    <td>" . $row['negara'] . "</td>
                <tr>";
                      
                    }
                    ?>
            </table>
        </div>
    </div>
    <div class="card-header bg-primary text-white">
        DATA AYAH KANDUNG
    </div>
    <div class="card-body">
        <div class="form-group row">
            <table class="table table-bordered table-sm">
                <tr>
                    <th>Nama Ayah Kandung</th>
                    <th>Tahun Lahir</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Penghasilan Bulanan</th>
                    <th>Berkebutuhan Khusus</th>
                </tr>
                <?php
                    include 'koneksi.php';
                    $ayahkandung = mysqli_query($conn, "SELECT * FROM ayah_kandung");
                    foreach ($ayahkandung as $row) {
           
                echo "<tr>
                    <td>" . $row['nama'] . "</td>
                    <td>" . $row['tahun_lahir'] . "</td>
                    <td>" . $row['pendidikan'] . "</td>
                    <td>" . $row['pekerjaan'] . "</td>
                    <td>" . $row['penghasilan_bulan'] . "</td>
                    <td>" . $row['berkebutuhan_khusus'] . "</td>
                <tr>";
                      
                    }
                    ?>
            </table>
        </div>
    </div>
    <div class="card-header bg-primary text-white">
        DATA IBU KANDUNG
    </div>
    <div class="card-body">
        <div class="form-group row">
            <table class="table table-bordered table-sm">
                <tr>
                    <th>Nama Ibu Kandung</th>
                    <th>Tahun Lahir</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Penghasilan Bulanan</th>
                    <th>Berkebutuhan Khusus</th>
                </tr>
                <?php
                    include 'koneksi.php';
                    $ibukandung = mysqli_query($conn, "SELECT * FROM ibu_kandung");
                    foreach ($ibukandung as $row) {
                echo "<tr>
                    <td>" . $row['nama'] . "</td>
                    <td>" . $row['tahun_lahir'] . "</td>
                    <td>" . $row['pendidikan'] . "</td>
                    <td>" . $row['pekerjaan'] . "</td>
                    <td>" . $row['penghasilan_bulan'] . "</td>
                    <td>" . $row['berkebutuhan_khusus'] . "</td>
                <tr>";
                      
                    }
                    ?>
            </table>
        </div>
    </div>

</body>

</html>