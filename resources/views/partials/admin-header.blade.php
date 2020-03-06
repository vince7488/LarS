<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('main.index') }}">
            <img src="{{ URL::to('img/logo.svg') }}" alt="Logo" />
            <span class="navbar-brand mb-0 h1">LarS</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('admin.index') }}">Admin<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('admin.create') }}">Create</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center">System Administration</h1>
    </div>
</header>
