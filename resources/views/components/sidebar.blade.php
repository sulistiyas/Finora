<aside class="sidebar" :class="{ 'sidebar--open': sidebarOpen }">
    <div class="sidebar-brand">
        <span class="sidebar-brand-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="sidebar-brand-icon-svg">
                <path d="M12 2 2 7v2h20V7L12 2Zm-8 8v9h4v-7h2v7h4v-7h2v7h4v-9H4Z" />
            </svg>
        </span>
        <span class="sidebar-brand-text">{{ config('app.name') }}</span>
    </div>

    <nav class="sidebar-nav">
        {{-- ============ MENU UTAMA ============ --}}
        <p class="sidebar-group-title">Menu Utama</p>

        <a href="{{ route('dashboard.index') }}"
            class="sidebar-link {{ request()->routeIs('dashboard.index') ? 'sidebar-link--active' : '' }}"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="sidebar-link-icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10.5 12 4l9 6.5M5 9.75V19a1 1 0 0 0 1 1h4v-5.5h4V20h4a1 1 0 0 0 1-1V9.75" />
            </svg>
            <span>Dashboard</span>
        </a>

        {{-- ============ MANAJEMEN AKSES ============ --}}
        <p class="sidebar-group-title">Manajemen Akses</p>

        {{-- href="{{ route('users.index') }}" --}}
        <a href="#"
            class="sidebar-link {{ request()->routeIs('users.*') ? 'sidebar-link--active' : '' }}"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="sidebar-link-icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>
            <span>User</span>
        </a>

        {{-- href="{{ route('teams.index') }}" --}}
        <a href="#"
            class="sidebar-link {{ request()->routeIs('teams.*') ? 'sidebar-link--active' : '' }}"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="sidebar-link-icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584a6.062 6.062 0 0 1-.037-.667m12-.001a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.682 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
            </svg>
            <span>Team</span>
        </a>

        {{-- href="{{ route('roles.index') }}" --}}
        <a href="#"
            class="sidebar-link {{ request()->routeIs('roles.*') ? 'sidebar-link--active' : '' }}"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="sidebar-link-icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.623 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
            </svg>
            <span>Role</span>
        </a>

        {{-- href="{{ route('permissions.index') }}" --}}
        <a href="#"
            class="sidebar-link {{ request()->routeIs('permissions.*') ? 'sidebar-link--active' : '' }}"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="sidebar-link-icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
            </svg>
            <span>Permission</span>
        </a>

        {{-- ============ MASTER DATA ============ --}}
        <p class="sidebar-group-title">Master Data</p>

        {{-- href="{{ route('categories.index') }}" --}}
        <a href="#"
            class="sidebar-link {{ request()->routeIs('categories.*') ? 'sidebar-link--active' : '' }}"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="sidebar-link-icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.321a18.098 18.098 0 0 0 5.223-5.223c.55-.827.377-1.908-.322-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3ZM6 6h.008v.008H6V6Z" />
            </svg>
            <span>Category</span>
        </a>

        {{-- href="{{ route('currencies.index') }}" --}}
        <a href="#"
            class="sidebar-link {{ request()->routeIs('currencies.*') ? 'sidebar-link--active' : '' }}"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="sidebar-link-icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-9L21 3m0 0-4.5 4.5M21 3v13.5" />
            </svg>
            <span>Currency</span>
        </a>

        {{-- ============ KEUANGAN ============ --}}
        <p class="sidebar-group-title">Keuangan</p>

        {{-- href="{{ route('accounts.index') }}" --}}
        <a href="#"
            class="sidebar-link {{ request()->routeIs('accounts.*') ? 'sidebar-link--active' : '' }}"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="sidebar-link-icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3M3.75 19.5h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Z" />
            </svg>
            <span>Account</span>
        </a>

        {{-- href="{{ route('transactions.index') }}" --}}
        <a href="#"
            class="sidebar-link {{ request()->routeIs('transactions.*') ? 'sidebar-link--active' : '' }}"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="sidebar-link-icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m6.75 12h-9m9-3.75h-9m9-3.75h-4.5M6 21h12a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 18 4.5H6a2.25 2.25 0 0 0-2.25 2.25v12A2.25 2.25 0 0 0 6 21Z" />
            </svg>
            <span>Transaction</span>
        </a>

        {{-- href="{{ route('budgets.index') }}" --}}
        <a href="#"
            class="sidebar-link {{ request()->routeIs('budgets.*') ? 'sidebar-link--active' : '' }}"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="sidebar-link-icon">
                <path d="M3 13.125c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
            </svg>
            <span>Budget</span>
        </a>

        {{-- href="{{ route('saving-goals.index') }}" --}}
        <a href="#"
            class="sidebar-link {{ request()->routeIs('saving-goals.*') ? 'sidebar-link--active' : '' }}"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="sidebar-link-icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v1.5M3 21v-6m0 0 2.77-.693a9 9 0 0 1 6.208.682l.108.054a9 9 0 0 0 6.086.71l3.114-.732a48.524 48.524 0 0 1-.005-10.499l-3.11.732a9 9 0 0 1-6.085-.711l-.108-.054a9 9 0 0 0-6.208-.682L3 4.5m0 10.5V4.5" />
            </svg>
            <span>Saving Goal</span>
        </a>
    </nav>

    <div class="sidebar-footer">
        <form method="POST" action="{{ route('logout') }}" class="sidebar-footer-form">
            @csrf
            <button type="submit" class="sidebar-footer-btn" title="Keluar" aria-label="Keluar">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="sidebar-footer-icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M18 12H8.25m9.75 0-3-3m3 3-3 3" />
                </svg>
            </button>
        </form>

        
        <a  href="https://wa.me/{{ config('app.contact_whatsapp') }}"
            target="_blank"
            rel="noopener noreferrer"
            class="sidebar-footer-btn"
            title="Hubungi Kami"
            aria-label="Hubungi Kami via WhatsApp"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="sidebar-footer-icon">
                <path d="M12.02 2C6.5 2 2.04 6.46 2.04 12c0 1.77.47 3.43 1.28 4.86L2 22l5.3-1.29A9.94 9.94 0 0 0 12.02 22C17.54 22 22 17.54 22 12S17.54 2 12.02 2Zm5.78 14.24c-.24.68-1.4 1.3-1.93 1.34-.5.05-1.02.24-3.4-.71-2.88-1.15-4.7-4.06-4.85-4.25-.14-.19-1.16-1.55-1.16-2.96 0-1.41.74-2.1 1-2.39.26-.28.57-.36.76-.36.19 0 .38 0 .55.01.18.01.42-.07.65.5.24.58.81 2 .88 2.15.07.14.12.31.02.5-.09.19-.14.31-.28.47-.14.16-.29.36-.42.48-.14.14-.28.28-.12.55.16.28.71 1.17 1.53 1.9 1.05.94 1.94 1.23 2.21 1.37.28.14.44.12.6-.07.16-.19.68-.79.86-1.06.19-.28.37-.23.62-.14.26.09 1.63.77 1.91.91.28.14.47.21.53.33.07.12.07.68-.17 1.36Z" />
            </svg>
        </a>

        <button
            type="button"
            class="sidebar-footer-btn sidebar-footer-btn--close"
            title="Tutup Sidebar"
            aria-label="Tutup Sidebar"
            @click="sidebarOpen = false"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="sidebar-footer-icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</aside>