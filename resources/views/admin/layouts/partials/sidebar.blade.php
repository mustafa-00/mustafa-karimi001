<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      {{-- HOME --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#home-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Home</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="home-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('Action.index') }}">
                <i class="bi bi-circle"></i>
                <span>Action</span>
            </a>
          </li>
        </ul>
      </li>

      {{-- ABOUT --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#about-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>About</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="about-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('about.index')}}">
              <i class="bi bi-circle"></i><span>About Us</span>
            </a>

            <a href="{{route('question.index')}}">
              <i class="bi bi-circle"></i><span>Questions</span>
            </a>

            <a href="{{route('testimonial.index')}}">
              <i class="bi bi-circle"></i><span>Testimonial</span>
            </a>

            <a href="{{route('team_members.index')}}">
              <i class="bi bi-circle"></i><span>Team_members</span>
            </a>
          </li>
        </ul>
      </li>

      {{-- SERIVCES --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#services-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="services-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('featured.index')}}">
                  <i class="bi bi-circle"></i>
                  <span>Featured</span>
                </a>

                <a class="nav-link collapsed" href="{{route('OurServices.index')}}">
                  <i class="bi bi-circle"></i>
                  <span>OurServices</span>
                </a>
            </li>
        </ul>
      </li>

    </ul>
  </aside>
