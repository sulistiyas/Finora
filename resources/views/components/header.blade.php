<header class="app-header">
    <div class="app-header-left">
        <button
            type="button"
            class="app-header-menu-btn"
            title="Buka Sidebar"
            aria-label="Buka Sidebar"
            @click="sidebarOpen = true"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="app-header-menu-icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" />
            </svg>
        </button>

        <span class="app-header-title">@yield('title', 'Dashboard')</span>
    </div>

    <div class="app-header-user">
        <span class="app-header-user-avatar">{{ Str::of(auth()->user()->name)->substr(0, 1)->upper() }}</span>
        <span class="app-header-user-name">{{ auth()->user()->name }}</span>
    </div>
</header>