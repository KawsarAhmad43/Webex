<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Webex</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">

</head>

<body>
    <div class="container">
        <img class="logo" src="{{ asset('assets/images/logo.png') }}" alt="Dummy Logo" class="logo mb-4" />
        <div class="button-group">
            <a href="login.html" class="btn btn-primary">Login</a>
            <div style="width: 10px"></div>
            <!-- Add a space between buttons -->
            <a href="{{ route('register.index') }}" class="btn btn-primary">Registration</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
