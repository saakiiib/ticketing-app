<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
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
      padding: 40px 0;
    }
    header h1 {
      font-size: 3rem;
      margin-bottom: 20px;
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
      background-color: #000;
      border: none;
      color: #fff;
      padding: 8px 16px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    .view-details-btn:hover {
      background-color: #333;
    }
    footer {
      background-color: #000;
      color: #fff;
      padding: 20px 0;
      position: absolute;
      bottom: 0;
      width: 100%;
    }
    footer p {
      margin-bottom: 0;
    }
    /* Flexbox to fill vertical space */
    .ticket-card-container {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    .ticket-card-row {
      flex-grow: 1;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <h1>Welcome to Our Landing Page</h1>
    <p>Explore and manage your tickets here</p>
  </header>

  <!-- Ticket Cards -->
  <div class="container mt-5 ticket-card-container">
    <div class="row ticket-card-row">
      <div class="col-md-8 offset-md-2">
        <div class="row">
          @foreach($tickets as $ticket)
            <div class="col-md-6 mb-4">
              <div class="ticket-card">
                <div class="card-body">
                  <h5 class="card-title">{{ $ticket->title }}</h5>
                  <p class="card-text">{{ $ticket->description }}</p>
                  <a href="{{ route('ticketIndex') }}" class="btn btn-primary view-details-btn">View Details</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap JS (jQuery and Popper.js are required for Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
