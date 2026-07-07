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
        <a href="{{ route('dashboard.index') }}"
            class="sidebar-link {{ request()->routeIs('dashboard.index') ? 'sidebar-link--active' : '' }}"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="sidebar-link-icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10.5 12 4l9 6.5M5 9.75V19a1 1 0 0 0 1 1h4v-5.5h4V20h4a1 1 0 0 0 1-1V9.75" />
            </svg>
            <span>Dashboard</span>
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