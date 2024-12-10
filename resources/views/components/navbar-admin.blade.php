<div class="sb-sidenav-menu">
    <div class="nav">
    <div class="sb-sidenav-menu-heading">Core</div>
    <a class="nav-link" href="index.html">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        Dashboard
    </a>
    <a class="nav-link" href="dashboard/home">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        home
    </a>
    <a class="nav-link" href="dashboard/about">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        about
    </a>
    <a class="nav-link" href="dashboard/skill">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        Skill
    </a>
    <a class="nav-link" href="dashboard/konten">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        konten
    </a>
    <a class="nav-link" href="dashboard/certificates">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        Certificates
    </a>
    <a class="nav-link" href="dashboard/project">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        project
    </a>
    <a class="nav-link" href="dashboard/contacts">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        contact
    </a>
    <form method="POST" action="{{ route('logout') }}">
            @csrf
              <x-dropdown-link :href="route('logout')"
                  onclick="event.preventDefault();
                      this.closest('form').submit();">
                          {{ __('Log Out') }}
              </x-dropdown-link>
          </form>
</div>
</div>
