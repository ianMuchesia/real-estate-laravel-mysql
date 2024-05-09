 <!-- Navbar Start -->
 <div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
        <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
            <div class="icon p-2 me-2">
                <img class="img-fluid" src="img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
            </div>
            <h1 class="m-0 text-primary">Makaan</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="{{ route("home")}}" class="nav-item nav-link {{ Route::currentRouteNamed('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about')}}" class="nav-item nav-link
                {{ Route::currentRouteNamed('about') ? 'active' : '' }}
                ">About</a>
                <a href="{{ route("properties")}}" class="nav-item nav-link {{ Route::currentRouteNamed('properties') ? 'active' : '' }}">Properties</a>
                <a href="{{ route("contact")}}" class="nav-item nav-link {{ Route::currentRouteNamed('contact') ? 'active' : '' }}">Contact</a>
            </div>
            <a href="" class="btn btn-primary px-3 mb-2 mb-md-o">Login</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->