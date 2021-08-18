<nav class="bg-white navbar navbar-expand-lg navbar-light border-bottom">
    <div class="container">
        <a class="navbar-brand" href="#">Laravel 8</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mb-2 navbar-nav me-auto mb-lg-0">
                @foreach ($navigations as $name => $url)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ $url }}">{{ $name }}</a>
                    </li>
                @endforeach
            </ul>
            <ul class="mb-2 navbar-nav mb-lg-0">
                <ul class="mb-2 navbar-nav me-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('register') }}</a>
                    </li>
                </ul>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
            </ul>
        </div>
    </div>
</nav>
