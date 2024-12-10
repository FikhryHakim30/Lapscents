<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="img/2 TRP 3.png" alt="L.A.P Logo" class="logo" />
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div
      class="collapse navbar-collapse justify-content-center"
      id="navbarNav"
    >
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('fragrances') ? 'active' : '' }}" href="/fragrances">Fragrances</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('collections') ? 'active' : '' }}" href="/collections">Collections ></a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('store') ? 'active' : '' }}" href="/store">Store</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
