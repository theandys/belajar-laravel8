<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="{{ URL::to('/'); }}">WPU Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ($link === 'home') ? 'active' : '' }}" href="{{ URL::to('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($link === 'about') ? 'active' : '' }}" href="{{ URL::to('/about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($link === 'posts') ? 'active' : '' }}" href="{{ URL::to('/posts') }}">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($link === 'categories') ? 'active' : '' }}" href="{{ URL::to('/categories') }}">Categories</a>
        </li>
      </ul>
      
      <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ URL::to("/dashboard") }}"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="{{ URL::to("/logout") }}" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link {{ ($link === 'login') ? 'active' : '' }}" href="{{ URL::to('/login') }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>