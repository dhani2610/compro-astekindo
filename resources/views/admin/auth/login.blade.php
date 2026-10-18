<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator - LSP ASTEKINDO</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(135deg, #0A192F 0%, #0F2D59 50%, #172A46 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 20px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.45);
            max-width: 440px;
            width: 100%;
            overflow: hidden;
        }
    </style>
</head>
<body>

    <div class="login-card p-4 p-md-5">
        <div class="text-center mb-4">
            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 58px; height: 58px; background: #1D4ED8 !important;">
                <i class="bi bi-shield-lock-fill fs-3"></i>
            </div>
            <h4 class="fw-bold text-dark mb-1">LSP ASTEKINDO</h4>
            <p class="text-muted small">Portal Manajemen Administrator</p>
        </div>

        @if($errors->any())
        <div class="alert alert-danger rounded-3 py-2 px-3 small mb-3">
            <i class="bi bi-exclamation-triangle-fill me-1"></i> {{ $errors->first() }}
        </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label small fw-bold text-dark">Alamat Email</label>
                <div class="input-group">
                    <span class="input-group-text bg-light text-muted border-end-0"><i class="bi bi-envelope"></i></span>
                    <input type="email" class="form-control border-start-0 py-2" id="email" name="email" value="{{ old('email', 'admin@astekindo.com') }}" placeholder="admin@astekindo.com" required autofocus>
                </div>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label small fw-bold text-dark">Kata Sandi</label>
                <div class="input-group">
                    <span class="input-group-text bg-light text-muted border-end-0"><i class="bi bi-key"></i></span>
                    <input type="password" class="form-control border-start-0 py-2" id="password" name="password" placeholder="••••••••" required>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" checked>
                    <label class="form-check-label small text-muted" for="remember">
                        Ingat sesi login
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary fw-bold w-100 py-2 rounded-3 shadow-sm" style="background: #1D4ED8; border-color: #1D4ED8;">
                <i class="bi bi-box-arrow-in-right me-2"></i>Masuk ke Admin Panel
            </button>
        </form>

        <div class="text-center mt-4 pt-3 border-top">
            <a href="{{ route('home') }}" class="text-decoration-none small text-muted">
                <i class="bi bi-arrow-left me-1"></i> Kembali ke Halaman Utama
            </a>
        </div>
    </div>

</body>
</html>
