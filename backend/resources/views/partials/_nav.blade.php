    {{-- Default Bootstrap Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Laravel Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::is('/') ? "active" : " " }}">
                    <a class="nav-link " href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ Request::is('about') ? "active" : " " }}">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item {{ Request::is('contact') ? "active" : " " }}">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>

            </ul>

            <ul class="my-2 my-lg-0 navbar-nav">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        My Account
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </ul>

        </div>
    </nav>
