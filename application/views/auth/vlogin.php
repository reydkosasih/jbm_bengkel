<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $title  ?></title>
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
              <div class="brand-wrapper">
                <img src="<?= base_url('assets') ?>/img/logofsi2.png" alt="logo" width="150px">
              </div>
              <p class="login-card-description">Sign into your account</p>
              <?= $this->session->flashdata('message'); ?>
              <form method="POST" action="<?= base_url('auth') ?>" autocomplete="off">
                <div class="form-group">
                  <br>
                  <label for="username" style="font-weight: bold;">Login Here!</label>
                  <input type="text" name="username" id="username" class="form-control" value="<?= set_value('username'); ?>" placeholder="Enter Username" data-toggle="popover" data-placement="right" data-content="Isi data berikut dengan Username Anda" autofocus>
                  <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group mb-4">
                  <label for="password" class="sr-only">Password</label>
                  <input type="password" name="password" id="passworda" class="form-control" placeholder="Enter Password" data-toggle="popover" data-placement="right" data-content="Isi Password Anda, klik Show Password untuk cek password.">
                  <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                  <input type="checkbox" onclick="showPWA()"> Show Password
                </div>
                <button type="submit" class="btn btn-block login-btn mb-4">Login</button>
                <!-- Register -->
                <p class="login-card-footer-text">Don't have an account? <br> <a href="<?= site_url('auth/register') ?>" class="btn btn-block btn-primary" style="font-weight: bold;">Register Here</a>
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
    function showPWA() {
      var x = document.getElementById("passworda");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>
</body>

</html>