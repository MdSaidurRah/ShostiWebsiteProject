<?php
    $organization = DB::table('system_information')
        ->where('information_key','Organization Name')
        ->select('*')->first();
    $orgName = $organization->information_value ?? 'Shosti Arc Studio';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sign in — {{ $orgName }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{ static_asset('/assets/images/favicon.png') }}" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ static_asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ static_asset('/assets/css/custom-style.css') }}" rel="stylesheet">
</head>

<body class="admin-login">
<div class="login-stage">
    <div class="login-stage-bg"></div>
    <div class="login-stage-shade"></div>

    <header class="login-topbar">
        <a class="login-brand" href="{{ url('/') }}">
            <img src="{{ static_asset('/assets/images/logo.svg') }}" alt="{{ $orgName }}">
            <span>{{ $orgName }}</span>
        </a>
        <a class="login-site-link" href="{{ url('/') }}">Visit website</a>
    </header>

    <main class="login-main">
        <section class="login-intro">
            <p class="login-eyebrow">Staff access</p>
            <h1>Architecture, interior &amp; studio control.</h1>
            <p class="login-lead">Sign in to manage projects, services, gallery, and client enquiries.</p>
            <ul class="login-points">
                <li>Project pipeline</li>
                <li>Website CMS</li>
                <li>Consultation CRM</li>
            </ul>
        </section>

        <section class="login-card">
            <h2>Sign in</h2>
            <p class="login-sub">Use your studio email and password.</p>

            @if(session('message'))
                <div class="login-alert login-alert-ok">{{ session('message') }}</div>
            @endif
            @if(session('login_error'))
                <div class="login-alert">{{ session('login_error') }}</div>
            @endif
            @if($errors->any())
                <div class="login-alert">{{ $errors->first() }}</div>
            @endif

            <form id="loginform" action="{{ url('/login-post') }}" method="post" autocomplete="on">
                @csrf
                <div class="login-field">
                    <label for="email">Email address</label>
                    <div class="login-input">
                        <i class="fas fa-envelope"></i>
                        <input type="email" class="form-control" required name="email" id="email" value="{{ old('email') }}" placeholder="name@studio.com" autocomplete="username">
                    </div>
                </div>
                <div class="login-field">
                    <label for="password">Password</label>
                    <div class="login-input">
                        <i class="fas fa-lock"></i>
                        <input type="password" class="form-control" name="password" required id="password" placeholder="Enter password" autocomplete="current-password">
                        <button type="button" class="login-eye" id="togglePassword" aria-label="Show password">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
                <button type="submit" class="btn btn-login">Continue to dashboard</button>
            </form>
        </section>
    </main>

    <footer class="login-foot">© {{ date('Y') }} {{ $orgName }}. Authorized staff only.</footer>
</div>

<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        var field = document.getElementById('password');
        var icon = this.querySelector('i');
        var hidden = field.type === 'password';
        field.type = hidden ? 'text' : 'password';
        icon.classList.toggle('fa-eye', !hidden);
        icon.classList.toggle('fa-eye-slash', hidden);
    });
</script>
</body>
</html>
