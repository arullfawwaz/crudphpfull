<?php

session_start();

// membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
    echo"<script>
            alert('silahkan login terlebih dahulu !');
            document.location.href = 'login.php';
         </script>";
         exit;
}

// membatasi halaman sesuai user login
if ($_SESSION["level"] != 1 and $_SESSION["level"] != 1) {
    echo"<script>
            alert('Anda Bukan Admin,Tidak Mempunyai hak akses penuh!');
            document.location.href = 'crud-modal.php';
         </script>";
    exit;
}

$title = 'About';

include 'layout/header.php';


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- /.col -->
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Main content -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">BIODATA AKUN</h3>
                </div>
                <!-- /.card-header -->


                        <div class="container mt-3">
    <h1>  ------------------------------<i class="fab fa-wolf-pack-battalion"></i>  Biodata Akun  <i class="fab fa-wolf-pack-battalion"></i></i>----------------------------</h1>
    <hr>
    <div class="container">
    <!DOCTYPE html>
<html>
<body>
<center>

<img src="assets/img/lufy.gif" style="width: 300px;height: 300px;border-radius: 100%; display:block; margin:auto;" />

<h1>Biodata</h1><br>
    <b>Nama          : <?= $_SESSION['nama']; ?><br>
    UserName          : <?= $_SESSION['username']; ?><br>
    Email : <?= $_SESSION['email']; ?><br>
</b>
</center>
</body>
</html>

    </div>
        <a href="https://darknes0.wordpress.com/"class ="btn btn-primary mb-1" style="float: left;"onclick="return confirm('Yakin Mau Membuka detail tentang project.?');"> <i class="fas fa-reply" ></i> detail</a>
        <a href="index.php"class ="btn btn-primary mb-1" style="float: right;"> <i class="fas fa-reply"></i> kembali</a>
    
</div>
                    
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php include 'layout/footer.php'; ?>
