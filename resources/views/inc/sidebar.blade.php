<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item">
        <a href="{{ route('ticketCategoryIndex') }}" class="nav-link {{ (request()->is('ticket-categories*')) ? 'active' : '' }}">
          <i class="nav-icon fas fa-th"></i>
          <p>
           Ticket Categories
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('ticketIndex') }}" class="nav-link {{ (request()->is('tickets*')) ? 'active' : '' }}">
          <i class="nav-icon fas fa-th"></i>
          <p>
           Tickets
          </p>
        </a>
      </li>

    </ul>
</nav>