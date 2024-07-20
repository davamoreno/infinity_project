<nav class="navbar fixed-top navbar-expand-lg bg-body-black">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="/assets/image/Ma.png" alt="" class="logo"/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>

      <?php if (isset($_SESSION['id'])): ?>
        <div>
          <a href="profile.php" class="btn btn-outline-primary me-2">Profile</a>
          <a href="/logout" class="btn btn-primary me-3">Logout</a>
        </div>
      <?php else: ?>
        <div>
          <a href="/signup" class="btn btn-outline-primary me-2">Sign Up</a>
          <a href="/login" class="btn btn-primary me-3">Login</a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</nav>