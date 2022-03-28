  <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary navbar-light ">
    <!-- Container wrapper -->
    <div class="container-fluid">

      <!-- Navbar brand -->
      <a class="navbar-brand text-white" href="#">Pengaduan Masyarakat</a>

      <!-- Toggle button -->
      {{-- <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button> --}}

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <!-- Link -->
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('index')}}">Mengadu</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('admin.user.index')}}">User</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('complaint.index')}}">Complaint Report</a>
          </li>

        </ul>

        <!-- Icons -->
        <ul class="navbar-nav d-flex flex-row me-1">
            @auth
            <li class="nav-item me-3 me-lg-0">
                <a class="nav-link text-white btn btn-danger" href="/logout">Logout</a>
              </li>
            @else
              <li class="nav-item me-3 me-lg-0">
                  <a class="nav-link text-white btn btn-success" href="/login">Login</a>
                </li>
              @endauth

        </ul>

      </div>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->




  {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('index')}}">Mengadu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('complaint.index')}}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active float-end" href="/login">Login</a>
          </li>
      </div>
    </div>
  </nav> --}}
