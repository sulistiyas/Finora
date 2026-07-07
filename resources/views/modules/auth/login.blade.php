<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - {{ config('app.name') }}</title>
    @vite(['resources/css/login.css', 'resources/js/login.js'])
</head>
<body class="login-page">
    <div class="login-container">
        <div class="login-card">
            <h1 class="login-title">Masuk</h1>

            @if ($errors->any())
                <div class="login-alert login-alert--error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login.store') }}" class="login-form">
                @csrf

                <div class="login-field">
                    <label for="email" class="login-label">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
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
                            required
                            class="login-input"
                        >
                        <button type="button" @click="show = !show" class="login-toggle-password">
                            <span x-text="show ? 'Sembunyikan' : 'Lihat'"></span>
                        </button>
                    </div>
                </div>

                <div class="login-field login-field--inline">
                    <label class="login-checkbox-label">
                        <input type="checkbox" name="remember" class="login-checkbox">
                        <span>Ingat saya</span>
                    </label>
                </div>

                <button type="submit" class="login-button">Masuk</button>
            </form>
        </div>
    </div>
</body>
</html>