<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            font-family: Arial;
            background: #f3f4f6;
        }
        .container {
            padding: 40px;
        }
        .card {
            background: white;
            padding: 20px;
            width: 500px;
            border-radius: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 12px;
            background: rgb(26, 243, 1);
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Data User</h2>

        <table>
            <tr>
                <th>Nama</th>
                <th>Email</th>
            </tr>

            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach

        </table>

        <a href="/logout" class="btn">Logout</a>
    </div>
</div>

</body>
</html>