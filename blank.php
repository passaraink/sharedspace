
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Blk• Design System by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="landing-page">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/blk-design-system/index.html" target="_blank">
          <span>SHARED</span>SPACE
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a>
                Menu
              </a>
            </div>
            <div class="col-6 collapse-close text-right">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="tim-icons icon-spaceship d-lg-none d-xl-none"></i> <p>Discover&nbsp;</p>
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="#" class="dropdown-item">Top Hits</a>
              <a href="#" class="dropdown-item">Editor's Picks</a>
              <a href="#" class="dropdown-item">By Genre</a>
            </div>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="tim-icons icon-single-02"></i>
              <p class="d-lg-none d-xl-none">Profile</p>
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="#" class="dropdown-item">
                <i class="tim-icons icon-paper"></i> My Stories
              </a>
              <a href="examples/landing-page.html" class="dropdown-item">
                <i class="tim-icons icon-heart-2"></i>Saved Books
              </a>
              <a href="examples/register-page.html" class="dropdown-item">
                <i class="tim-icons icon-bullet-list-67"></i>Reading History
              </a>
              <a href="examples/profile-page.html" class="dropdown-item">
                <i class="tim-icons icon-badge"></i>Account Details
              </a>
            </div>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" rel="tooltip" title="Continue the fun!" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
              &nbsp;<i class="tim-icons icon-book-bookmark"></i>
              <p class="d-lg-none d-xl-none">Continue Reading</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header">
      <img src="../assets/img/blob.png" class="path">
      <img src="../assets/img/path2.png" class="path2">
      <img src="../assets/img/triunghiuri.png" class="shapes triangle">
      <img src="../assets/img/waves.png" class="shapes wave">
      <img src="../assets/img/patrat.png" class="shapes squares">
      <img src="../assets/img/cercuri.png" class="shapes circle">
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initLandingPageChart();
    });
  </script>
</body>

</html>
