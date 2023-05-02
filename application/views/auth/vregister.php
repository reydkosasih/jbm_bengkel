<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
  <link href="<?= base_url('assets/'); ?>img/logofine3.png" rel="icon">
  <link rel="stylesheet" href="<?= base_url('assets') ?>/css/login.css">
</head>

<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?= base_url('assets') ?>/img/peakpx.jpg" alt="loginimg" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <!-- <button class="btn btn-primary" style="float: right;">test</button> -->
              <div class="brand-wrapper">
                <img src="<?= base_url('assets') ?>/img/logofsi2.png" alt="logo" width="150px">
              </div>
              <p class="login-card-description">Sign up new account</p>

              <form method="post" action="<?= base_url('auth/register'); ?>" autocomplete="off">
                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?> <br>
                <?= form_error('nickname', '<small class="text-danger pl-3">', '</small>'); ?>
                <div class="input-group">
                  <input type="text" name="username" id="username" class="form-control" placeholder="Isi Username" value="<?= set_value('username') ?>" data-toggle="popover" data-placement="left" data-content="Username akan digunakan untuk Login Aplikasi. Simpan informasi Username Anda." autofocus>
                  <input type="text" name="nickname" id="nickname" class="form-control" placeholder="Isi Nama Depan" value="<?= set_value('nickname') ?>" data-toggle="popover" data-placement="right" data-content="SIlahkan isi dengan Nama Depan Anda">
                </div>

                <div class="form-group">
                  <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                  <label for="nama_lengkap" class="sr-only">Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Isi Nama Lengkap" value="<?= set_value('nama_lengkap'); ?>" data-toggle="popover" data-placement="right" data-content="Silahkan isi Nama Lengkap Anda">
                </div>
                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                <div class="input-group">
                  <input type="password" name="password1" id="password1" class="form-control" placeholder="Buat Password" value="<?= set_value('password'); ?>" data-toggle="popover" data-placement="left" data-content="Buatlah password Anda sendiri. Simpan informasi Password Anda.">
                  <input type="password" name="password2" id="password2" class="form-control" placeholder="Ulangi Password" data-toggle="popover" data-placement="right" data-content="Ulangi password untuk konfirmasi. Lanjutkan dengan klik Register.">
                </div>
                <div class="form-group">
                  <input type="checkbox" onclick="showPW()"> Show Password
                </div>
                <button type="submit" class="btn btn-block login-btn mb-4">
                  Register
                </button>
                <p class="login-card-footer-text">Already have an account? <a href="<?= site_url('auth') ?>" class="btn btn-block btn-primary" style="font-weight: bold;">Login
                    here</a>
                </p>
              </form>
              <!-- <a href="#!" class="forgot-password-link">Forgot password?</a> -->
              <!-- <nav class="login-card-footer-nav">
                <span>Terdapat Masalah Pada Aplikasi? Silahkan Hubungi Admin PE.</span>
              </nav> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script>
    $(function() {
      $('[data-toggle="popover"]').popover()
    })
  </script>
  <script>
    function showPW() {
      var x = document.getElementById("password1");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
      var y = document.getElementById("password2");
      if (y.type === "password") {
        y.type = "text";
      } else {
        y.type = "password";
      }
    }
  </script>
</body>

</html>