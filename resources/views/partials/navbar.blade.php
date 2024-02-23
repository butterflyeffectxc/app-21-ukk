<nav class="navbar navbar-expand-lg navbar-dark navbar-color">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarScroll">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/user-dashboard">Home</a>
            </li>
            <li class="nav-item px-4">
                <a class="nav-link" href="#footer">Features</a>
            </li>
            <li class="nav-item">
                <a class="navbar-brand" href="/user-dashboard">
                    <img src="{{ asset('assets/logo-light.svg') }}" alt="" width="30">
                </a>
            </li>
            <li class="nav-item dropdown pr-4">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Collections</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/user/books">Books</a>
                    {{-- <a class="dropdown-item" href="/book-categories">Category</a> --}}
                    <a class="dropdown-item" href="/user/collections">Wishlist</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Profile</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/user/profile/{{ Auth::user()->id }}">About</a>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="dropdown-item" type="submit">Logout</button>
                    </form>
                </div>
            </li>
        </ul>
        {{-- @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/home') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif --}}
    </div>
</nav>
