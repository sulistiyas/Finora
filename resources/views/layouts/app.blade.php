<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="app-layout" x-data="{ sidebarOpen: false }">
        <div
            x-show="sidebarOpen"
            x-cloak
            x-transition.opacity
            class="sidebar-backdrop"
            @click="sidebarOpen = false"
        ></div>

        <x-sidebar />

        <div class="app-main">
            <x-header />

            <main class="app-content">
                @yield('content')
            </main>

            <x-footer />
        </div>
    </div>
</body>
</html>