<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-light" style="height: 100vh; display: flex; justify-content: center; align-items: center;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card bg-dark text-light shadow">
                    <div class="card-header text-center">
                        <h2>Create Account</h2>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form method="POST" action="/register">
                            @csrf
                            <div class="mb-3">
                                <input name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="mb-3">
                                <input name="email" type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <input name="password" type="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="mb-3">
                                <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Register</button>
                        </form>

                        <div class="text-center mt-3">
                            <small>Already have an account? <a href="/login" class="text-primary">Login</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
