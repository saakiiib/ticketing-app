@extends('layouts.user')
@section('content')

<div class="container mt-5 ticket-card-container">
  <div class="row ticket-card-row">
    <div class="col-md-10 offset-md-1">
      <div class="row">
        @foreach($tickets as $ticket)
          <div class="col-md-4 mb-4"> 
            <div class="ticket-card" style="background-color: #fff; border: 1px solid #000; border-radius: 10px; transition: all 0.3s ease;">
              <div class="card-body">
                  <h5 class="card-title" style="font-size: 1.5rem; margin-bottom: 10px;">{{ $ticket->title }}</h5>
                  <p class="card-text" style="color: #6c757d;">{{ $ticket->description }}</p> 
                  <div class="d-flex align-items-center">
                      <a href="{{ route('ticketIndex') }}" class="btn btn-secondary view-details-btn">View Details</a>

                      @if($ticket->updated_at != $ticket->created_at)
                          <span class="badge badge-info ml-2"><i class="fas fa-edit"></i></span>
                      @endif

                      @if($ticket->status === 1)
                          <span class="badge badge-success ml-2"><i class="fas fa-circle"></i></span>
                      @elseif($ticket->status === 2)
                          <span class="badge badge-primary ml-2"><i class="fas fa-circle"></i></span>
                      @elseif($ticket->status === 3)
                          <span class="badge badge-danger ml-2"><i class="fas fa-circle"></i></span>
                      @endif
                  </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

@endsection
