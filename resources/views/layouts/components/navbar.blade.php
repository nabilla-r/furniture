<nav class="navbar p-3 fixed-top">
    <div class="container">
        <div class="container-fluid d-flex align-items-center justify-content-between w-100">
            <ul class="nav">
                <li><a href="#" class="nav-link fs-3 text-dark" style="font-size: 20px; font-family: Rockwell serif;">furnitureBL</a></li>
            </ul>
            <div class="text-end">
                    @guest
                    <div class="container-fluid">
                    <a href="{{ route('login') }}" class="btn btn-outline-light text-dark">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-dark" style="margin-left: 8px;">Sign-up</a>
                    </div>
                    @else
                    <div>
                    <a href="{{ route('furniture') }}" class="btn btn-light" style="margin-right: 20px;">Start</a>
                    <div class="btn btn-dark">{{ Auth::user()->name }}</div>
                    <a href="{{ route('logout') }}" class="btn btn-outline-light text-dark" style="margin-left: 8px;" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                    </div>
                    @endguest
                    <form action="{{ route('logout') }}" id="logout-form" method="POST">
                        @csrf
                    </form>
                </div>
        </div>
    </div>
</nav>
