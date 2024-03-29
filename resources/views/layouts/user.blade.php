<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ticketing App</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/admin/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/admin/datatables/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/admin/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/admin/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Custom CSS -->
  <style>
    /* Custom styles */
    body {
      font-family: 'Arial', sans-serif;
      background-color: #fff;
      color: #000;
    }
    header {
      text-align: center;
      margin: 50px 0;
    }
    footer {
      text-align: center;
      margin-top: 50px;
    }
    .ticket-card {
      background-color: #fff;
      border: 1px solid #000;
      border-radius: 10px;
      transition: all 0.3s ease;
    }
    .ticket-card:hover {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .ticket-card .card-body {
      padding: 20px;
    }
    .ticket-card h5 {
      font-size: 1.5rem;
      margin-bottom: 10px;
    }
    .ticket-card p {
      color: #6c757d;
    }
    .view-details-btn {
      border: none;
      padding: 8px 16px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    .view-details-btn:hover {
      background-color: #333;
    }
    /* Flexbox to fill vertical space */
    .ticket-card-container {
      display: flex;
      flex-direction: column;
      align-items: center; /* Center horizontally */
      min-height: 100vh;
    }
    .ticket-card-row {
      display: flex;
      flex-wrap: wrap;
      justify-content: center; /* Center cards horizontally */
    }
    .ticket-card-col {
      flex: 0 0 calc(50% - 20px); /* Two cards per row with some space */
      margin: 10px;
    }
  </style>

</head>
<body>
  <header>
    <h1>Welcome to Eacy Ticketing System</h1>
    <p>Explore and manage your tickets here</p>
  </header>

<div class="wrapper">
  <div class="container">
    @yield('content')
  </div>
</div>

<script src="{{ asset('assets/admin/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/admin/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/admin/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{ asset('assets/admin/js/adminlte.js')}}"></script>
<script src="{{ asset('assets/admin/js/dashboard.js')}}"></script>
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
