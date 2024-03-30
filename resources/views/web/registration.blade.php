<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Webex | Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/reg.css') }}">

</head>

<body>
    <div class="container">
        <center>
            <img class="logo" src="{{ asset('assets/images/logo.png') }}" alt="Logo"
                class="mx-auto d-block mb-4" />
        </center>
        <hr>
        <h2>Registration</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="upline_number">Upline Number</label>
                <input type="text" id="upline_number" name="upline_number" class="form-control" required />
            </div>
            <div class="form-group">
                <label for="smart_contract_address">Smart Contract Address</label>
                <input type="text" id="smart_contract_address" name="smart_contract_address" class="form-control"
                    required />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required />
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required />
            </div>
            <input type="submit" value="Register" class="btn btn-primary" />
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
