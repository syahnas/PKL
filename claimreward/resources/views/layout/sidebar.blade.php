<li class="nav-item">
    <a href="/" class="nav-link">
      <i class="nav-icon fa fa-home"></i>
      <p>
        Dashboard
      </p>
    </a>
  </li>
  @if (auth()->user()->level=="admin")
  <li class="nav-item">
    <a href="/pmandiri" class="nav-link">
      <i class="nav-icon fas fa-trophy"></i>
      <p>Rekapitulasi</p>
    </a>
  </li>

  @endif
  @if(auth()->user()->level=='user')
  <li class="nav-item">
    <a href="/formulir" class="nav-link">
      <i class="nav-icon fas fa-file"></i>
      <p>Formulir</p>
    </a>
  </li>
  @endif
    <li class="nav-item">
      <a href="/status" class="nav-link">
        <i class="nav-icon fas fa-info"></i>
        <p>Status</p>
      </a>
    </li>
    