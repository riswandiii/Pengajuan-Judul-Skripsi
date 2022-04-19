<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">PENGINPUTAN JUDUL SKRIPSI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <strong><i class="bi bi-person-circle"></i> Welcome, {{ auth()->user()->nama_lengkap }}</strong>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf 
                    @method('delete')
                    <button class="dropdown-item" type="submit" onclick="return confirm('YAKIN INGIN LOG OUT?')">Log Out <i class="bi bi-box-arrow-right"></i></button>
                  </form>
                </li>
              </ul>
            </li>
            @else 
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/login">Log In <i class="bi bi-box-arrow-left"></i></a>
            </li>
            @endauth
        </ul>
      </div>
    </div>
  </nav>

  