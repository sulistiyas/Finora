<aside class="sidebar" x-data="{ open: false }" :class="{ 'sidebar--open': open }">
    <div class="sidebar-brand">
        <span class="sidebar-brand-text">{{ config('app.name') }}</span>
        <button type="button" class="sidebar-toggle" @click="open = !open">
            <span>☰</span>
        </button>
    </div>

    <nav class="sidebar-nav">
        
        <a href="{{ route('dashboard.index') }}"
            class="sidebar-link {{ request()->routeIs('dashboard.index') ? 'sidebar-link--active' : '' }}"
        >
            Dashboard
        </a>
    </nav>
</aside>