<ul class="account-nav">
    <li><a href="{{ route('user.index') }}" class="menu-link menu-link_us-s">Dashboard</a></li>
    <li><a href="{{route('user.orders')}}" class="menu-link menu-link_us-s {{Route::is('user.orders') ? 'menu-link_active':''}}">Orders</a></li>
    <li><a href="{{ route('wishlist.index') }}" class="menu-link menu-link_us-s">Wishlist</a></li>
    <li>
        <form method="POST" action="{{ route('logout') }}" id="logout-form">
            @csrf
            <a href="{{ route('logout') }}" class="menu-link menu-link_us-s"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <div class="text">Logout</div>
            </a>
        </form>
    </li>
</ul>
