<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/user') }}">
            Ini Navbar
        </a>
        
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="{{ url('/user') }}">Home</a>
            <a class="nav-link" href="{{ url('/user/create') }}">Tambah User</a>
        </div>
    </div>
</nav>