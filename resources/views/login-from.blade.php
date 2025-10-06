<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Login</title>
    <style>
        body {
            background: #f2f2f2;
            font-family: Arial;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        input {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
        }
        button {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
        }
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>
    <form method="POST" action="/auth/login">
        @csrf
        <h2>Login Form</h2>

        @if(session('error'))
            <p class="error">{{ session('error') }}</p>
        @endif

        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</body>
</html>
