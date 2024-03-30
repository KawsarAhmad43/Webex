<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connect Wallet</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/wallets.css') }}">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Logo -->
                <div class="text-center">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="max-width: 400px"
                        class="img-fluid" />
                </div>
            </div>
            <div class="col-md-6">
                <!-- Connect Wallet Buttons -->
                <div class="connect-wallet">
                    <h3>Connect Wallets</h3>
                    <button class="btn btn-primary wallet-button">
                        <img src="{{ asset('assets/images/trust.png') }}" alt="Wallet Icon"
                            style="max-width: 30px; vertical-align: middle" />
                        Trust Wallet
                    </button>
                    <button class="btn btn-primary wallet-button">
                        <img src="{{ asset('assets/images/meta.png') }}" alt="Wallet Icon"
                            style="max-width: 30px; vertical-align: middle" />
                        Metamask
                    </button>
                    <button class="btn btn-primary wallet-button">
                        <img src="{{ asset('assets/images/tp.png') }}" alt="Wallet Icon"
                            style="max-width: 30px; vertical-align: middle" />
                        Tockenpocket
                    </button>
                    <button class="btn btn-primary wallet-button">
                        <img src="{{ asset('assets/images/tp.png') }}" alt="Wallet Icon"
                            style="max-width: 30px; vertical-align: middle" />
                        AnyWallet
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
