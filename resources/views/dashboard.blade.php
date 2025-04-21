<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white" style="height: 100vh; display: flex; justify-content: center; align-items: center;">

    <div class="container text-center" style="max-width: 600px;">
        <div class="p-4 bg-secondary rounded-3 shadow">
            <h2>Welcome, {{ auth()->user()->name }}!</h2>
            <p>You are logged in as <strong>{{ auth()->user()->email }}</strong></p>

            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="btn btn-danger mt-3 w-100">Logout</button>
            </form>
        </div>
    </div>

</body>

</html>
