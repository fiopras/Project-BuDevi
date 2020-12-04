<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ URL::asset('backend/img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="{{url('/dashboard')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{route('dashboardnews.index')}}">
                  <i class="ni ni-email-83 text-primary"></i>
                  <span class="nav-link-text">News</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="{{route('dashboardhighlight.index')}}">
                  <i class="ni ni-email-83 text-primary"></i>
                  <span class="nav-link-text">Highlight</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('dashboardgames.index')}}">
                  <i class="ni ni-archive-2 text-primary"></i>
                  <span class="nav-link-text">Match</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('dashboardplayer.index')}}">
                  <i class="ni ni-archive-2 text-primary"></i>
                  <span class="nav-link-text">Player</span>
                </a>
              </li>


          </ul>
        </div>
      </div>
    </div>
  </nav>
