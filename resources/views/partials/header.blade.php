<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#!">
            <img src="{{ URL::to('img/logo.svg') }}" alt="Logo" />
            <span class="navbar-brand mb-0 h1">LarS</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href=" {{ route('main.index') }} ">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Resources
                </a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">GitHub</a>
                    <a class="dropdown-item" href="#">Laravel</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">The basics of Web Design</a>
                    <a class="dropdown-item" href="{{ route('other.about') }}">About the Author</a>
                    <a class="dropdown-item" href=" {{ route('admin.index') }} ">Exercise: Admin</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Coming Soon</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>
