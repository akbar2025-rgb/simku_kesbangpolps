<?php
// Siapkan variabel kosong untuk menampung pesan
$alert_message = '';

// Periksa apakah parameter 'alert' ada di URL
if (isset($_GET['alert'])) {
    
    // Ambil nilai dari parameter 'alert'
    $alert_type = $_GET['alert'];

    // Gunakan switch untuk memeriksa nilai secara spesifik (ini adalah metode yang sangat aman)
    switch ($alert_type) {
        case "gagal":
            $alert_message = "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>";
            break;
        
        case "logout":
            $alert_message = "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT</div>";
            break;
        
        case "belum_login":
            $alert_message = "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>";
            break;

        // Jika nilainya bukan salah satu di atas, tidak terjadi apa-apa.
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Manajemen Keuangan</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

  <style>
    .bg-primary {
      background: #882c2cff !important;
    }
    .btn-primary {
      background-color: #660000 !important;
      border-color: #800000 !important;
    }
    .btn-primary:hover {
      background-color: #660000 !important;
    }
  </style>

<body class=" bg-primary">
  <div class="container">
    <div class="login-box">
      <center>
        <h2>SISTEM INFORMASI MANAJEMEN KEUANGAN</h2>
        <br />
        <?php
        // 2. Tampilkan pesan yang sudah disiapkan di atas
        echo $alert_message;
        ?>
      </center>
      <div class="login-box-body">
        <center>
          <img src="gambar/sistem/login.png" style="width: 150px;height: auto">
          <span style="color: green;">
            <h5>Masukkan User & Password Anda</h5>
          </span>
        </center>
        <p class="login-box-msg text-bold"></p>
        <form action="periksa_login.php" method="POST">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="username" required="required" autocomplete="off">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password" required="required" autocomplete="off">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-offset-8 col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>