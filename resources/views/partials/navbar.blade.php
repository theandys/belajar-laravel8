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
        <li class="nav-item">
          <a class="nav-link {{ ($link === 'login') ? 'active' : '' }}" href="{{ URL::to('/login') }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>