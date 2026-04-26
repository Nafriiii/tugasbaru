<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
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
            background: green;
            color: white;
            padding: 8px;
            border: none;
            width: 100%;
        }
        .link {
            text-align: center;
            margin-top: 10px;
        }
        .error { color: red; font-size: 13px; }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Register</h2>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="error">{{ $error }}</p>
            @endforeach
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="name" placeholder="Nama">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">

            <button type="submit">Register</button>
        </form>

        <div class="link">
            <a href="/login">Sudah punya akun? Login</a>
        </div>
    </div>
</div>

</body>
</html>