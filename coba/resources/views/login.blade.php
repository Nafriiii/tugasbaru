<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial;
            background: #f3f4f6;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background: white;
            padding: 25px;
            width: 300px;
            border-radius: 10px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
        }
        button {
            background: #16a34a;
            color: white;
            padding: 8px;
            border: none;
            width: 100%;
        }
        .link {
            text-align: center;
            margin-top: 10px;
        }
        .error { color: red; }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Login</h2>

        @if(session('error'))
            <p class="error">{{ session('error') }}</p>
        @endif

        <form method="POST" action="/login">
            @csrf
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">

            <button type="submit">Login</button>
        </form>

        <div class="link">
            <a href="/register">Belum punya akun? Register</a>
        </div>
    </div>
</div>

</body>
</html>