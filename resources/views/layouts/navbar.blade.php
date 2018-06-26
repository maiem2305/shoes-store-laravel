<!-- Navbar -->
<nav id="nav-hide" class="navbar sticky-top navbar-expand-lg navbar-light bg-light py-2 mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo-black.png') }}" width="60" height="20" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">{{ trans('layout.home') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ trans('layout.men') }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach (App\Models\Category::all()->sortBy('name') as $category)
                            <a class="dropdown-item" href="{{ route('category.men', $category->id) }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ trans('layout.women') }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach (App\Models\Category::all()->sortBy('name') as $category)
                            <a class="dropdown-item" href="{{ route('category.women', $category->id) }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.login') }}">Admin</a>
                </li>
            </ul>
          
            <ul class="navbar-nav ml-auto">
                <!-- Search Form -->
                {{ Form::open(['route' => 'search', 'method' => 'GET', 'class' => 'form-inline my-2 my-lg-0', 'role' => 'search']) }}
                    @csrf
                    {{ Form::text('keyword', '', ['class' => 'form-control form-control-sm mr-3', 'placeholder' => trans('layout.search')]) }}
                {{ Form::close() }}
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ trans('layout.login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart.index') }}">{{ trans('layout.cart') }} ({{ Cart::count() }})</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ trans('layout.language') }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('user.language', ['en']) }}">{{ trans('layout.english') }}</a>
                            <a class="dropdown-item" href="{{ route('user.language', ['vi']) }}">{{ trans('layout.vietnamese') }}</a>
                        </div>
                    </li>
                @else
                    <li class="dropdown nav-item">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('user.edit', Auth::user()->id) }}">{{ trans('layout.profile') }}</a>
                            <a class="dropdown-item" href="{{ route('order') }}">{{ trans('layout.order') }}</a>
                            <a class="dropdown-item" href="{{ route('user.password.edit', Auth::user()->id) }}">{{ trans('layout.change_password') }}</a>
                            <a class="dropdown-item" href="{{ route('user.logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ trans('layout.logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart.index') }}">{{ trans('layout.cart') }} ({{ Cart::count() }})</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ trans('layout.language') }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('user.language', ['en']) }}">{{ trans('layout.english') }}</a>
                            <a class="dropdown-item" href="{{ route('user.language', ['vi']) }}">{{ trans('layout.vietnamese') }}</a>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar -->
<script type="text/javascript">
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("nav-hide").style.top = "0";
        } else {
            document.getElementById("nav-hide").style.top = "-65px";
        }
        prevScrollpos = currentScrollPos;
    }
</script>
