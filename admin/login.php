<?php 
  if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pwd = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user_login WHERE username = '$user'");
      if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pwd, $row['password'])) {
          $_SESSION['login'] = true;
          header('Location: ?lokasi=profile');
          exit;
        }
      }
      $error = true;
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= baseurl;?>/assets/img/apple-icon.png">
  <title>
    My Portofolio
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?= baseurl;?>/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= baseurl;?>/assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient text-center">My Portofolio</h3>
                </div>
                <div class="card-body">
                  <form role="form" method="POST">
                  <?php if (isset($error)) : ?>
                      <p>Password atau email salah</p>

                  <?php endif ?>
                    <label>Username</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Username" aria-label="Email" aria-describedby="email-addon" name="username">
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="password">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0" name="login">Login</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!--   Core JS Files   -->
  <script src="<?= baseurl;?>/assets/js/core/popper.min.js"></script>
  <script src="<?= baseurl;?>/assets/js/core/bootstrap.min.js"></script>
  <script src="<?= baseurl;?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= baseurl;?>/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= baseurl;?>/assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
</body>

</html>