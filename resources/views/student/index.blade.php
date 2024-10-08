<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Portal</title>

    <link rel="stylesheet" href="/newton/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/newton/assets/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="/newton/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/newton/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/newton/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/newton/assets/vendors/owl-carousel-2/owl.theme.default.min.css">

    <link rel="stylesheet" href="/newton/assets/css/style.css">

    <link rel="shortcut icon" href="/newton/assets/images/favicon.png" />

    @livewireStyles
    
  </head>
  <body>

    @livewireScripts

    <div class="container-scroller">

      @include('student.sidebar')
      <!-- partial -->
      @include('student.navbar')
        <!-- partial -->
      @include('student.body')
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="/newton/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/newton/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/newton/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="/newton/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="/newton/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/newton/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="/newton/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/newton/assets/js/off-canvas.js"></script>
    <script src="/newton/assets/js/hoverable-collapse.js"></script>
    <script src="/newton/assets/js/misc.js"></script>
    <script src="/newton/assets/js/settings.js"></script>
    <script src="/newton/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/newton/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
