<!doctype html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <title>AMANIN | Login</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="RBF" />
    <meta name="theme-color" content="#1f407f" />
    <meta name="app-base-url" content="<?= base_url(); ?>" />
    <!-- [Favicon] icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url()?>assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url()?>assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>assets/images/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url()?>manifest.json">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url()?>assets/images/favicon-32x32.png">
    <!-- [Google Font] Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" id="main-font-link" />
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="<?= base_url();?>assets/fonts/phosphor/duotone/style.css" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="<?= base_url();?>assets/fonts/tabler-icons.min.css" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="<?= base_url();?>assets/fonts/feather.css" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="<?= base_url();?>assets/fonts/fontawesome.css" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="<?= base_url();?>assets/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="<?= base_url();?>assets/css/style-preset.css" />

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->
  <body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
      <div class="loader-track">
        <div class="loader-fill"></div>
      </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main">
      <div class="auth-wrapper v3">
        <div class="auth-form">
          <div class="card my-5">
            <div class="card-body">
              <a href="<?= base_url();?>" class="d-flex justify-content-center">
                <img src="<?= base_url();?>assets/images/logo-amanin.png" alt="image" height="50px" class="brand-logo pe-0" />
              </a>
              <div class="row">
                <div class="d-flex justify-content-center">
                  <div class="auth-header">
                    <h2 class="text-secondary mt-3"><b>AMANIN</b></h2>
                    <p class="f-16 mt-2">Enter your credentials to continue</p>
                  </div>
                </div>
              </div>
              <?php
                if ($this->session->flashdata('info')) {
              ?>
                <div class="alert alert-danger">
                  <?= $this->session->flashdata('info');?>
                </div>
              <?php
                }
              ?>
              <form action="<?= base_url()?>login/auth" method="POST">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control shadow-sm" id="username" name="username" placeholder="Username" required autocomplete="off" autofocus>
                  <label for="username"><i class="far fa-user fa-fw"></i> Username</label>
                </div>
                <div class="form-floating mb-3 position-relative">
                  <input type="password" class="form-control shadow-sm" id="password" name="password" placeholder="Password" required autocomplete="off">
                  <label for="password"><i class="fas fa-key fa-fw"></i> Password</label>
                  <i class="far fa-eye position-absolute top-50 end-0 translate-middle-y me-3" id="togglePassword" style="cursor:pointer;"></i>
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-secondary">Sign In</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- [ Main Content ] end -->
    <!-- Required Js -->
    <script src="<?= base_url();?>assets/js/plugins/popper.min.js"></script>
    <script src="<?= base_url();?>assets/js/plugins/simplebar.min.js"></script>
    <script src="<?= base_url();?>assets/js/plugins/bootstrap.min.js"></script>
    <script src="<?= base_url();?>assets/js/fonts/custom-font.js"></script>
    <script src="<?= base_url();?>assets/js/script.js"></script>
    <script src="<?= base_url();?>assets/js/theme.js"></script>
    <script src="<?= base_url();?>assets/js/plugins/feather.min.js"></script>
    <script src="<?= base_url();?>assets/js/pwa-register.js"></script>

    <script>
      const BASE_URL = "<?= base_url(); ?>";
    </script>
       
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

    <script>
      layout_change('light');
    </script>
    
       
    <script>
      font_change('Roboto');
    </script>
     
    <script>
      change_box_container('false');
    </script>
     
    <script>
      layout_caption_change('true');
    </script>
       
    <script>
      layout_rtl_change('false');
    </script>
     
    <script>
      preset_change('preset-1');
    </script>
    

  </body>
  <!-- [Body] end -->
</html>
