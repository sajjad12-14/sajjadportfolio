 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login | Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

      <link rel="stylesheet" href="{{ asset('css/Admin-login.css') }}">
</head>

<body>

    <div class="login-wrapper">

        <div class="login-card">

            <div class="login-icon">
                <i class="bi bi-shield-lock-fill"></i>
            </div>

            <div class="text-center mb-4">

                <h2 class="login-title mb-2">
                    Admin Login
                </h2>

                <p class="text-muted mb-0">
                    Sign in to access your admin panel.
                </p>

            </div>


            {{-- Validation Errors --}}
            @if ($errors->any())
                <div class="alert alert-danger border-0 rounded-3 mb-4">
                    <i class="bi bi-exclamation-circle-fill me-2"></i>

                    {{ $errors->first() }}
                </div>
            @endif


            <form action="{{ route('admin.login.submit') }}"
                  method="POST">

                @csrf

                {{-- Email --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Email Address
                    </label>

                    <div class="input-group">

                        <span class="input-group-text bg-white"
                              style="border-color:#e2d8d3;">
                            <i class="bi bi-envelope"
                               style="color:#b9795c;"></i>
                        </span>

                        <input type="email"
                               name="email"
                               class="form-control"
                               value="{{ old('email') }}"
                               placeholder="Enter admin email"
                               required>

                    </div>

                </div>


                {{-- Password --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Password
                    </label>

                    <div class="input-group">

                        <span class="input-group-text bg-white"
                              style="border-color:#e2d8d3;">
                            <i class="bi bi-lock"
                               style="color:#b9795c;"></i>
                        </span>

                        <input type="password"
                               name="password"
                               class="form-control"
                               placeholder="Enter password"
                               required>

                    </div>

                </div>


                <button type="submit" class="login-btn">
                    <i class="bi bi-box-arrow-in-right me-2"></i>
                    Login to Admin Panel
                </button>

            </form>


            <div class="text-center mt-4">

                <a href="{{ route('home') }}" class="back-link">
                    <i class="bi bi-arrow-left me-1"></i>
                    Back to Website
                </a>

            </div>

        </div>

    </div>

</body>

</html>

