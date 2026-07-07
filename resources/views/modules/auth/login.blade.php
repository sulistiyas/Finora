<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - {{ config('app.name') }}</title>
    @vite(['resources/css/login.css', 'resources/js/login.js'])
</head>
<body class="login-page">
    <div class="login-shell" x-data="loginPage()">

        <div class="login-brand">
            <div class="login-brand-inner">
                <div class="login-brand-logo">
                    <span class="login-brand-logo-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                        </svg>
                    </span>
                    <span class="login-brand-name">{{ config('app.name') }}</span>
                </div>

                <h2 class="login-brand-title">Kelola keuangan Anda<br>dengan lebih cerdas.</h2>
                <p class="login-brand-desc">
                    Pantau transaksi, atur anggaran, dan capai target tabungan Anda dalam satu aplikasi.
                </p>

                <ul class="login-brand-features">
                    <li class="login-brand-feature">
                        <span class="login-brand-feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 3v18h18M7 14l4-4 3 3 5-6" />
                            </svg>
                        </span>
                        <span>Laporan keuangan real-time</span>
                    </li>
                    <li class="login-brand-feature">
                        <span class="login-brand-feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="16" rx="2" />
                                <path d="M3 10h18" />
                            </svg>
                        </span>
                        <span>Kontrol anggaran per kategori</span>
                    </li>
                    <li class="login-brand-feature">
                        <span class="login-brand-feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2l3.5 7 7.5 1-5.5 5 1.5 7.5L12 18.5 5 22.5 6.5 15 1 10l7.5-1z" />
                            </svg>
                        </span>
                        <span>Target tabungan yang terpantau</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="login-panel">
            <div class="login-card">
                <div class="login-header">
                    <h1 class="login-title">Selamat Datang Kembali</h1>
                    <p class="login-subtitle">Masuk untuk melanjutkan ke {{ config('app.name') }}</p>
                </div>

                @if ($errors->any())
                    <div class="login-alert login-alert--error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form
                    method="POST"
                    action="{{ route('login.store') }}"
                    class="login-form"
                    x-ref="form"
                >
                    @csrf

                    <div class="login-field">
                        <label for="email" class="login-label">Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            x-model="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            :disabled="loading"
                            class="login-input"
                        >
                    </div>

                    <div class="login-field" x-data="{ show: false }">
                        <label for="password" class="login-label">Password</label>
                        <div class="login-input-wrapper">
                            <input
                                :type="show ? 'text' : 'password'"
                                id="password"
                                name="password"
                                x-model="password"
                                required
                                :disabled="loading"
                                class="login-input"
                            >
                            <button type="button" @click="show = !show" class="login-toggle-password">
                                <span x-text="show ? 'Sembunyikan' : 'Lihat'"></span>
                            </button>
                        </div>
                    </div>

                    <div class="login-field login-field--inline">
                        <label class="login-checkbox-label">
                            <input type="checkbox" name="remember" class="login-checkbox" :disabled="loading">
                            <span>Ingat saya</span>
                        </label>
                    </div>

                    <button type="submit" class="login-button" :disabled="loading">
                        <span x-show="!loading">Masuk</span>
                        <span x-show="loading" x-cloak>Memproses...</span>
                    </button>
                </form>

                <div class="login-divider">
                    <span>atau coba akun demo</span>
                </div>

                <div class="login-demo-list">
                    <template x-for="account in demoAccounts" :key="account.email">
                        <button
                            type="button"
                            class="login-demo-btn"
                            @click="loginAsDemo(account)"
                            :disabled="loading"
                        >
                            <span class="login-demo-avatar" x-text="account.initial"></span>
                            <span class="login-demo-info">
                                <span class="login-demo-name" x-text="account.name"></span>
                                <span class="login-demo-role" x-text="account.role"></span>
                            </span>
                            <span class="login-demo-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 18l6-6-6-6" />
                                </svg>
                            </span>
                        </button>
                    </template>
                </div>
            </div>
        </div>
    </div>
</body>
</html>