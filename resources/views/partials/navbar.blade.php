
@guest
<nav class="navbar navbar-expand-lg navbar-light guest-nav fixed-top">
    <div class="container guestnav-header">
        <a class="navbar-brand home-logo" href="{{ route('welcome') }}">
            <img src="{{ asset('images/workhobbit2_081431.jpg') }}" class="logo" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item guest-item">
                    <a class="nav-link active" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item guest-item">
                    <a class="nav-link" href="{{ route('service') }}">Service</a>
                </li>

                {{-- <li class="nav-item guest-item">
                    <a class="nav-link" href="{{ route('admin/dashboard') }}">Admin</a>
                </li> --}}

                <li class="nav-item guest-item">
                    <a class="nav-link" href="{{ route('about.us') }}">About</a>
                </li>
                <li class="nav-item guest-item">
                    <a class="nav-link" href="{{ route('contact.us') }}">Contact</a>
                </li>
                <li class="nav-item guest-item">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>
             
                <div class="nav-link">
                    <button class="btn login-button me-2">
                        <a href="{{ route('login') }}">Login</a>
                    </button>
                    <button class="btn">
                        <a class="apply-now" href="{{ route('register') }}">Apply Now</a>
                    </button>
                </div>
                
        </div>
    </div>
</nav>
@endguest




@auth
<nav class="navbar navbar-expand-lg bg-body-tertiary guest-nav sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand home-logo" href="{{ route('welcome') }}">
            <img src="{{ asset('images/workhobbit2_081431.jpg') }}" class="logo" alt="Logo" width="80" height="40">
        </a>
      <button class="navbar-toggler" class="toggler-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact.us') }}">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('password.request') }}">Reset Password</a>
            </li>
        </ul>
        <span class="navbar-text">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn logout-button">Logout</button>
            </form>
        </span>
      </div>
    </div>
  </nav>
@endauth


