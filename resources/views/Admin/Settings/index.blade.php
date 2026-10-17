@extends('Layouts.Adminlayouts')

@section('content')

    <div class="container-fluid py-4">

        {{-- Page Header --}}
        <div class="mb-4">
            <h2 class="fw-bold mb-1" style="color:#3b2a24;">
                Account Settings
            </h2>

            <p class="text-muted mb-0">
                Manage your administrator email and password securely.
            </p>
        </div>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert"
                style="border-radius:12px;">

                <i class="bi bi-check-circle-fill me-2"></i>
                {{ session('success') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        {{-- General Validation Errors --}}
        @if ($errors->any())
            <div class="alert alert-danger border-0 shadow-sm" style="border-radius:12px;">

                <div class="fw-semibold mb-2">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    Please fix the following errors:
                </div>

                <ul class="mb-0 ps-4">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row g-4">

            {{-- Email Settings --}}
            <div class="col-12 col-lg-6">

                <div class="card border-0 shadow-sm h-100" style="border-radius:18px;">

                    <div class="card-body p-4">

                        {{-- Card Header --}}
                        <div class="d-flex align-items-center mb-4">

                            <div class="d-flex align-items-center justify-content-center me-3"
                                style="
                                width:52px;
                                height:52px;
                                min-width:52px;
                                background:#f4e7e1;
                                color:#b9795c;
                                border-radius:14px;
                             ">

                                <i class="bi bi-envelope-fill fs-4"></i>
                            </div>

                            <div>
                                <h5 class="fw-bold mb-1" style="color:#3b2a24;">
                                    Email Address
                                </h5>

                                <p class="text-muted small mb-0">
                                    Update your administrator login email.
                                </p>
                            </div>

                        </div>

                        {{-- Email Update Form --}}
                        <form action="{{ route('admin.settings.update') }}" method="POST">

                            @csrf
                            @method('PUT')

                            <div class="mb-4">

                                <label for="email" class="form-label fw-semibold">
                                    Admin Email
                                </label>

                                <input type="email" id="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email', $admin->email ?? '') }}" placeholder="Enter admin email"
                                    maxlength="255" required autocomplete="email"
                                    style="
                                    border-radius:10px;
                                    padding:12px 14px;
                                ">

                                @error('email')
                                    <div class="text-danger small mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <button type="submit" class="btn text-white px-4 py-2"
                                style="
                                    background:#b9795c;
                                    border-radius:10px;
                                ">

                                <i class="bi bi-check2-circle me-1"></i>
                                Update Email
                            </button>

                        </form>

                    </div>
                </div>

            </div>

            {{-- Password Settings --}}
            <div class="col-12 col-lg-6">

                <div class="card border-0 shadow-sm h-100" style="border-radius:18px;">

                    <div class="card-body p-4">

                        {{-- Card Header --}}
                        <div class="d-flex align-items-center mb-4">

                            <div class="d-flex align-items-center justify-content-center me-3"
                                style="
                                width:52px;
                                height:52px;
                                min-width:52px;
                                background:#f4e7e1;
                                color:#b9795c;
                                border-radius:14px;
                             ">

                                <i class="bi bi-shield-lock-fill fs-4"></i>
                            </div>

                            <div>
                                <h5 class="fw-bold mb-1" style="color:#3b2a24;">
                                    Change Password
                                </h5>

                                <p class="text-muted small mb-0">
                                    Choose a new password for your account.
                                </p>
                            </div>

                        </div>

                        {{-- Password Update Form --}}
                        <form action="{{ route('admin.settings.update') }}" method="POST">

                            @csrf
                            @method('PUT')

                            {{-- Current Password --}}
                            <div class="mb-3">

                                <label for="current_password" class="form-label fw-semibold">
                                    Current Password
                                </label>

                                <input type="password" id="current_password" name="current_password"
                                    class="form-control @error('current_password') is-invalid @enderror"
                                    placeholder="Enter current password" autocomplete="current-password"
                                    style="
                                    border-radius:10px;
                                    padding:12px 14px;
                                ">

                                @error('current_password')
                                    <div class="text-danger small mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            {{-- New Password --}}
                            <div class="mb-3">

                                <label for="new_password" class="form-label fw-semibold">
                                    New Password
                                </label>

                                <input type="password" id="new_password" name="new_password"
                                    class="form-control @error('new_password') is-invalid @enderror"
                                    placeholder="Enter new password (minimum 8 characters)" minlength="8"
                                    autocomplete="new-password"
                                    style="
                                    border-radius:10px;
                                    padding:12px 14px;
                                ">

                                @error('new_password')
                                    <div class="text-danger small mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            {{-- Confirm New Password --}}
                            <div class="mb-4">

                                <label for="new_password_confirmation" class="form-label fw-semibold">
                                    Confirm New Password
                                </label>

                                <input type="password" id="new_password_confirmation" name="new_password_confirmation"
                                    class="form-control" placeholder="Confirm your new password" minlength="8"
                                    autocomplete="new-password"
                                    style="
                                    border-radius:10px;
                                    padding:12px 14px;
                                ">

                            </div>

                            <button type="submit" class="btn text-white px-4 py-2"
                                style="
                                    background:#b9795c;
                                    border-radius:10px;
                                ">

                                <i class="bi bi-key-fill me-1"></i>
                                Update Password
                            </button>

                        </form>

                    </div>
                </div>

            </div>

        </div>

        {{-- Security Note --}}
        <div class="mt-4 p-3"
            style="
            background:#f4e7e1;
            border-radius:12px;
            color:#5c4035;
         ">

            <i class="bi bi-info-circle-fill me-2"></i>

            <strong>Security Tip:</strong>
            Use a strong password with at least 8 characters.
            You must enter your current password to change it.

        </div>

    </div>

@endsection
