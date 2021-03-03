<!-- <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand me-lg-5" href="url('home')">
        <img class="navbar-brand-dark" src="{{ asset('img/brand/light.svg') }}" alt="Volt logo" /> <img class="navbar-brand-light" src="{{ asset('img/brand/dark.svg') }}" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav> -->

<nav id="sidebarMenu" class="sidebar d-md-block bg-dark text-white collapse" data-simplebar>
  <div class="sidebar-inner px-4 pt-3">
    <ul class="nav flex-column pt-3 pt-md-0">
      <li class="nav-item">
        <a href="/" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon">
            <img src="{{ asset ('img/brand/light.svg') }}" height="20" width="20" alt="Volt Logo">
          </span>
          <span class="mt-1 ms-1 sidebar-text">BookProject</span>
        </a>
      </li>
      <li class="nav-item  active ">
        <a href="/home" class="nav-link">
          <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
          <span class="sidebar-text">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="/all_books" class="nav-link">
          <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
          <span class="sidebar-text">All Books</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="/create_book" class="nav-link">
          <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
          <span class="sidebar-text">Create Book</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="/my_books" class="nav-link">
          <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
          <span class="sidebar-text">My Books</span>
        </a>
      </li>
      <!-- <li class="nav-item">
        <span
          class="nav-link  collapsed  d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#submenu-app">
          <span>
            <span class="sidebar-icon"><span class="fas fa-table"></span></span>
            <span class="sidebar-text">Tables</span>
          </span>
          <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
        </span>
        <div class="multi-level collapse "
          role="list" id="submenu-app" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item ">
              <a class="nav-link" href="../../pages/tables/bootstrap-tables.html">
                <span class="sidebar-text">Bootstrap Tables</span>
              </a>
            </li>
          </ul>
        </div>
      </li> -->
      <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>
    </ul>
  </div>
</nav>