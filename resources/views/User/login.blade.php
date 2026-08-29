<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $pageTitle ?? 'Sign In' }} | Shosti Arc Studio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ static_asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        :root {
            --sas-navy: #1b3a4b;
            --sas-teal: #2a7b9b;
            --sas-gold: #c4a574;
            --sas-sand: #f4f1ea;
        }
        body {
            font-family: Inter, "Segoe UI", sans-serif;
            margin: 0;
            min-height: 100vh;
            background: #122033;
        }
        .login-shell {
            min-height: 100vh;
            display: flex;
            background:
                linear-gradient(135deg, rgba(18,32,51,.82), rgba(27,58,75,.72)),
                url('https://shostiarcstudio.com/public/website/assets/img/bg.jpg') center/cover no-repeat;
        }
        .login-brand {
            flex: 1;
            display: none;
            color: #fff;
            padding: 64px;
            align-items: flex-end;
        }
        .login-brand h1 {
            font-size: 2.4rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .login-brand p {
            max-width: 420px;
            color: rgba(255,255,255,.72);
            margin: 0;
        }
        .login-panel {
            width: 100%;
            max-width: 460px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 28px;
        }
        .login-card {
            width: 100%;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 18px 50px rgba(0,0,0,.22);
            padding: 36px 32px;
        }
        .login-kicker {
            color: var(--sas-gold);
            font-size: .75rem;
            letter-spacing: .12em;
            text-transform: uppercase;
            font-weight: 700;
            margin-bottom: 8px;
        }
        .login-card h2 {
            margin: 0 0 6px;
            color: var(--sas-navy);
            font-weight: 700;
        }
        .login-card .sub {
            color: #6b7a8d;
            margin-bottom: 22px;
            font-size: .92rem;
        }
        .form-control {
            min-height: 48px;
            border-radius: 12px;
            border-color: #d9e0e6;
        }
        .form-control:focus {
            border-color: var(--sas-teal);
            box-shadow: 0 0 0 .2rem rgba(42,123,155,.16);
        }
        .btn-login {
            background: var(--sas-navy);
            border: 0;
            border-radius: 12px;
            min-height: 48px;
            font-weight: 600;
        }
        .btn-login:hover { background: var(--sas-teal); color: #fff; }
        @media (min-width: 992px) {
            .login-brand { display: flex; }
        }
    </style>
</head>

<body>
@php
    $organization = DB::table('system_information')
        ->where('information_key', 'Organization Name')
        ->select('*')
        ->first();
    $orgName = $organization->information_value ?? 'Shosti Arc Studio';
@endphp

<div class="login-shell">
    <div class="login-brand">
        <div>
            <div class="login-kicker">Interior · Architecture · Studio</div>
            <h1>{{ $orgName }}</h1>
            <p>Sign in to manage projects, website content, visitor messages, and consultation queries.</p>
        </div>
    </div>
    <div class="login-panel">
        <div class="login-card">
            <div class="login-kicker">Admin access</div>
            <h2>Sign in</h2>
            <p class="sub">Use your studio credentials to continue.</p>

            @if(isset($message))
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @endif

            <form id="loginform" action="{{ url('/login-post') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="email">Email address</label>
                    <input type="email" class="form-control" required name="email" id="email" placeholder="you@studio.com">
                </div>
                <div class="mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" class="form-control" name="password" required id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-login w-100">Sign In</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
