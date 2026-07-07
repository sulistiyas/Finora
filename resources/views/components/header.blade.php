<header class="app-header">
    <div class="app-header-title">Dashboard</div>

    <div class="app-header-user">
        <span class="app-header-user-name">{{ auth()->user()->name }}</span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="app-header-logout">Keluar</button>
        </form>
    </div>
</header>