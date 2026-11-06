
@extends('layouts.guest')

@section('title', 'Login')

@section('content')

    <h5 class="mb-1">Masuk</h5>

    <p class="text-muted small mb-4">
        Gunakan email dan password akun Anda.
    </p>

    <form method="POST" action="{{ route('login.store') }}">
        @csrf

        {{-- Email --}}
        <div class="mb-3">
            <label for="email" class="form-label">
                Email
            </label>

            <input
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="nama@email.com"
                required
                autofocus
                autocomplete="username"
            >

            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Password --}}
        <div class="mb-3">
            <label for="password" class="form-label">
                Password
            </label>

            <div class="input-group has-validation">

                <input
                    type="password"
                    class="form-control @error('password') is-invalid @enderror"
                    id="password"
                    name="password"
                    required
                    autocomplete="current-password"
                >

                <button
                    type="button"
                    class="btn btn-outline-secondary"
                    data-toggle-password="password"
                    aria-label="Tampilkan password"
                >
                    <i class="bi bi-eye"></i>
                </button>

                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>
        </div>

        {{-- Remember Me --}}
        <div class="mb-4 form-check">
            <input
                type="checkbox"
                class="form-check-input"
                id="remember"
                name="remember"
                value="1"
            >

            <label class="form-check-label" for="remember">
                Ingat saya
            </label>
        </div>

        {{-- Tombol Login --}}
        <button type="submit" class="btn btn-primary w-100">
            Masuk
        </button>

    </form>

    {{-- Link Registrasi --}}
    <p class="text-center small text-muted mt-4 mb-0">
        Belum punya akun?
        <a href="{{ route('register') }}">Daftar di sini</a>
    </p>

@endsection
