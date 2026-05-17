<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1f407f" />
    <meta name="app-base-url" content="<?= base_url(); ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url()?>assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url()?>assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>assets/images/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url()?>manifest.json">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url()?>assets/images/favicon-32x32.png">

    <title>AMANIN | <?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/style.css">
    <script src="https://kit.fontawesome.com/79eb2d51c8.js" crossorigin="anonymous"></script>
    <style>
      :root {
            --bs-primary: #1f407f!important;
            --bs-primary-rgb: 31, 64, 127;
        }
        .btn-primary{
            --bs-btn-bg: var(--bs-primary)!important;
            --bs-btn-border-color: var(--bs-primary)!important;
        }
    </style>
  </head>
  <body class="bg-secondary">
    <div class="container-fluid">
      <div class="row vh-100 justify-content-center align-content-center">
        <div class="col-xxl-6 col-xl-8 col-lg-9">
          <div class="card shadow-sm">
            <div class="card-body bg-white p-0">
              <div class="row g-0">
                <div class="col-xl-7 col-lg-6 col-md-7 bg-primary p-3">
                  <!-- kosong -->
                </div>
                <div class="col-xl-5 col-lg-6 col-md-5 p-3">
                  <center><img src="<?= base_url();?>assets/images/bg.png" class="mb-2 img-fluid" width="70%"></center>
                  <h3 class="mb-3 text-center">AMANIN</h3>
                  <p class="text-center">Assets Management System - Infrastructure</p>
                  <?php
                    if ($this->session->flashdata('info')) {
                  ?>
                    <div class="alert alert-danger shadow-sm">
                      <?= $this->session->flashdata('info');?>
                    </div>
                  <?php
                    }
                  ?>
                  <form action="<?= base_url()?>login/auth" method="POST">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control shadow-sm" id="username" name="username" placeholder="Username" required autocomplete="off" autofocus>
                      <label for="username"><i class="fa-regular fa-user fa-fw"></i> Username</label>
                    </div>
                    <div class="form-floating mb-3 position-relative">
                      <input type="password" class="form-control shadow-sm" id="password" name="password" placeholder="Password" required autocomplete="off">
                      <label for="password"><i class="fa-solid fa-key fa-fw"></i> Password</label>
                      <i class="fa-regular fa-eye position-absolute top-50 end-0 translate-middle-y me-3" id="togglePassword" style="cursor:pointer;"></i>
                    </div>

                    <center>
                      <button type="submit" class="login">
                        <span class="shadow"></span>
                        <span class="edge"></span>
                        <span class="front text bg-primary bg-gradient">LOGIN</span>
                      </button>
                    </center>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="<?= base_url();?>assets/js/pwa-register.js"></script>
    <script>
      const togglePassword = document.querySelector("#togglePassword");
      const passwordField = document.querySelector("#password");

      togglePassword.addEventListener("click", function () {
        const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
        passwordField.setAttribute("type", type);
        
        // Toggle icon mata terbuka/tutup
        this.classList.toggle("fa-eye");
        this.classList.toggle("fa-eye-slash");
      });
    </script>

  </body>
</html>
