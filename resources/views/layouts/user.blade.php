<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ticketing App</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/admin/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/admin/ekko-lightbox/ekko-lightbox.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/admin/datatables/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/admin/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/admin/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('logo.png')}}" alt="logo" height="60" width="60">
  </div>

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto"> 
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>
      @include('inc.sidebar')
    </div>
  </aside>

  <div class="content-wrapper">
    @yield('content')
  </div>
</div>

<script src="{{ asset('assets/admin/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/admin/js/jquery-ui.min.js')}}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/admin/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{ asset('assets/admin/js/adminlte.js')}}"></script>
<script src="{{ asset('assets/admin/js/dashboard.js')}}"></script>
<script src="{{ asset('assets/admin/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
<script src="{{ asset('assets/admin/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/admin/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/admin/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/admin/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/admin/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/admin/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/admin/datatables/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('assets/admin/datatables/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/admin/datatables/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/admin/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('assets/admin/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('assets/admin/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
function pagetop() {
    window.scrollTo({
        top: 130,
        behavior: 'smooth',
    });
}
</script>
@yield('script')
</body>
</html>
