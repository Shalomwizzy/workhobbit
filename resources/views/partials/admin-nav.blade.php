
<nav class="navbar fixed-top">
    <div class="logo_item">
      <i class="bx bx-menu" id="sidebarOpen"></i>
      <img src="{{ asset('images/workhobbit2_081431.jpg') }}" alt=""></i>WorkHobbit
    </div>

    <div class="search_bar">
      <input type="text" placeholder="Search" />
    </div>

    <div class="navbar_content">
      <i class="bi bi-grid"></i>
      <i class='bx bx-sun' id="darkLight"></i>
      {{-- <i class='bx bx-bell' ></i>
      <img src="images/profile.jpg" alt="" class="profile" /> --}}
    </div>
  </nav>

  <!-- sidebar -->
  <nav class="sidebar">
    <div class="menu_content">
      <ul class="menu_items">
        <div class="menu_title menu_dahsboard"></div>
        <!-- duplicate or remove this li tag if you want to add or remove navlink with submenu -->
        <!-- start -->
        <li class="item">
          <div href="#" class="nav_link ">
            
              <a class="nav-link" href="{{ route('admin/dashboard') }}">
                  <i class="fa-solid fa-gauge-high"></i> Dashboard
              </a>
         
            {{-- <span class="navlink_icon">
              <i class="bx bx-home-alt"></i>
            </span>
            <span  class="navlink">
              <a href="{{ route('all-users') }}" class="nav_link sublink">Home</a>
            </span> --}}
            {{-- <i class="bx bx-chevron-right arrow-left"></i> --}}
          </div>

          <li class="item">
            <div href="#" class="nav_link ">
              
              <a class="nav-link" href="{{ route('admin.applications') }}">
                <i class="fa-solid fa-business-time" aria-hidden="true"></i> Applications
            </a> 
           
          
            </div>
        </li>



        <li class="item">
          <div href="#" class="nav_link ">
            
            <a class="nav-link" href="{{ route('admin.users.create') }}">
              <i class="fa-solid fa-user-plus" aria-hidden="true"></i> Add User
          </a>
         
        
          </div>
      </li>
        <!-- end -->

        <!-- duplicate this li tag if you want to add or remove  navlink with submenu -->
        <!-- start -->
        <li class="item">
          {{-- <div href="#" class="nav_link submenu_item">
            {{-- <span class="navlink_icon">
              <i class="bx bx-grid-alt"></i>
            </span>
            <span class="navlink">Manage Users</span>
            <i class="bx bx-chevron-right arrow-left"></i> --}}
          </div>

          <ul class="menu_items submenu">
            <a href="{{ route('all-users') }}" class="nav_link sublink">All Users</a>
            <a href="{{ route('admin.users.active') }}" class="nav_link sublink">Active Users</a>
            <a href="{{ route('admin.users.suspended') }}" class="nav_link sublink">Suspended Users</a>
            <a href="{{ route('admin.administrators') }}" class="nav_link sublink">Administrator</a>
         
          </ul>
        </li>
        <!-- end -->
      </ul>

      <ul class="menu_items">
        <div class="menu_title menu_editor"></div>
        <!-- duplicate these li tag if you want to add or remove navlink only -->
        <!-- Start -->
        <li class="item">
          <a href="{{ route('all-users') }}" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bxs-user"></i>
            </span>
            <span class="navlink">All Users</span>
          </a>
        </li>
        <!-- End -->

        <li class="item">
          <a href="{{ route('admin.users.active') }}" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-user-check"></i>

            </span>
            <span class="navlink">Active Users</span>
          </a>
        </li>
        <li class="item">
          <a href="{{ route('admin.users.suspended') }}" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-user-x"></i>

            </span>
            <span class="navlink">Suspended Users</span>
          </a>
        </li>
        <li class="item">
          <a href="{{ route('admin.administrators') }}" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-shield"></i>

            </span>
            <span class="navlink">Administrator</span>
          </a>
        </li>
      </ul>

   

      <ul class="menu_items">
        <div class="menu_title menu_setting"></div>
        <li class="item">
          <a href="{{ route('send.email.to.all.users') }}" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-envelope"></i>

            </span>
            <span class="navlink">Mail All Users</span>
          </a>
        </li>
        <li class="item">
          <a href="{{ route('admin.subscribers') }}" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-badge-check"></i>

            </span>
            <span class="navlink">Emails Subscribers</span>
          </a>
        </li>
        <li class="item">
          <a href="{{ route('admin.sendEmailToSubscribersForm') }}" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-group"></i>

            </span>
            <span class="navlink">Email All Subscribers</span>
          </a>
        </li>
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-layer"></i>
            </span>
            <span class="navlink">Features</span>
          </a>
        </li>
      </ul>

      <span class="navbar-text">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn logout-button">Logout</button>
        </form>
    </span>

      <!-- Sidebar Open / Close -->
      <div class="bottom_content">
        <div class="bottom expand_sidebar">
          <span> Expand</span>
          <i class='bx bx-log-in' ></i>
        </div>
        <div class="bottom collapse_sidebar">
          <span> Collapse</span>
          <i class='bx bx-log-out'></i>
        </div>
      </div>
    </div>
  </nav>






<script>
    const body = document.querySelector("body");
const darkLight = document.querySelector("#darkLight");
const sidebar = document.querySelector(".sidebar");
const submenuItems = document.querySelectorAll(".submenu_item");
const sidebarOpen = document.querySelector("#sidebarOpen");
const sidebarClose = document.querySelector(".collapse_sidebar");
const sidebarExpand = document.querySelector(".expand_sidebar");
sidebarOpen.addEventListener("click", () => sidebar.classList.toggle("close"));

sidebarClose.addEventListener("click", () => {
  sidebar.classList.add("close", "hoverable");
});
sidebarExpand.addEventListener("click", () => {
  sidebar.classList.remove("close", "hoverable");
});

sidebar.addEventListener("mouseenter", () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.remove("close");
  }
});
sidebar.addEventListener("mouseleave", () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.add("close");
  }
});

darkLight.addEventListener("click", () => {
  body.classList.toggle("dark");
  if (body.classList.contains("dark")) {
    document.setI
    darkLight.classList.replace("bx-sun", "bx-moon");
  } else {
    darkLight.classList.replace("bx-moon", "bx-sun");
  }
});

submenuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    item.classList.toggle("show_submenu");
    submenuItems.forEach((item2, index2) => {
      if (index !== index2) {
        item2.classList.remove("show_submenu");
      }
    });
  });
});

if (window.innerWidth < 768) {
  sidebar.classList.add("close");
} else {
  sidebar.classList.remove("close");
}
</script>


{{-- <aside class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="adminNavbar">
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin/dashboard') }}">
                        <i class="fa-solid fa-gauge-high"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.applications') }}">
                        <i class="fa-solid fa-business-time" aria-hidden="true"></i> Applications
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.administrators') }}">
                        <i class="fa-solid fa-user-tie" aria-hidden="true"></i> Administrator
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.users.create') }}">
                        <i class="fa-solid fa-user-plus" aria-hidden="true"></i> Add User
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('all-users') }}">
                        <i class="fa fa-user" aria-hidden="true"></i> All Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.users.active') }}">
                        <i class="fa-solid fa-user-check" aria-hidden="true"></i> Active Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.users.suspended') }}">
                        <i class="fa-solid fa-user-xmark" aria-hidden="true"></i> Suspended Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('send.email.to.all.users') }}">
                        <i class="fa-solid fa-envelope" aria-hidden="true"></i> Mail All Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.subscribers') }}">
                        <i class="fa-solid fa-envelopes-bulk" aria-hidden="true"></i> Emails Subscribers
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.sendEmailToSubscribersForm') }}">
                        <i class="fa-solid fa-envelopes-bulk" aria-hidden="true"></i> Email All Subscribers
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</aside> --}}

