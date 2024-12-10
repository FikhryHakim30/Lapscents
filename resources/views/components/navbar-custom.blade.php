<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container justify-content-center">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('collections') ? 'active' : '' }}" href="/collections">MEN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('collections2') ? 'active' : '' }}" href="/collections2">WOMAN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('collections3') ? 'active' : '' }}" href="/collections3">UNISEX</a>
      </li>
    </ul>
  </div>
</nav>
