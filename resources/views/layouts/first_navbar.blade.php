<nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/logo/Logo.png') }}" alt="Bootstrap" width="30" height="24">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                        Kelas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Kelas 1</a></li>
                        <li><a class="dropdown-item" href="#">Kelas 2</a></li>
                        <li><a class="dropdown-item" href="#">Kelas 3</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Karya Alumni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kelas Saya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="{{ asset('assets/images/default/Buy.png') }}" alt=""></a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <button type="button" class="btn btn-outline-success rounded-pill">
                    <i class="fa-solid fa-user"></i>
                </button>
            </form>
        </div>
    </div>
</nav>
