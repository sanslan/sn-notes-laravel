<nav class="navbar container" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      Sn notes
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
    @auth
      <a href="{{ route('notes.index') }}" class="navbar-item">
        All notes
      </a>
      <a href="{{ route('tags.index') }}" class="navbar-item">
        All tags
      </a>
      <a href="{{ route('notes.create') }}" class="navbar-item">
        Add note
      </a>
      <a href="{{ route('tags.create') }}" class="navbar-item">
        Add tag
      </a>
    @endauth
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons"> 
          @guest
            <a href="/login" class="navbar-item">Login</a>
            <a href="/register" class="navbar-item">Register</a>
          @else
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link"><strong>{{ auth()->user()->name }}</strong></a>
              <div class="navbar-dropdown">
                <a href="/logout" class="navbar-item is-light">Logout</a>
              </div>
            </div>
          @endguest
        </div>
      </div>
    </div>
  </div>
</nav>