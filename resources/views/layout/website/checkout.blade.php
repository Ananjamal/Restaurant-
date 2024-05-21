<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('webassets/images/food.png') }}">

    <title>Checkout</title>
    @livewireStyles()
    <style>
       body {
            background: #dbd8d8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 50px;
            border: 2px solid #a2d9ff;
            border-radius: 15px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-group label {
            font-weight: bold;
            color: #007bff;
        }

        .summary {
            border-top: 2px solid #e0e0e0;
            padding-top: 20px;
        }

        .summary h5 {
            font-weight: bold;
            margin-bottom: 10px;
            color: #007bff;
        }

        .summary .row {
            margin-bottom: 10px;
        }

        .summary .total {
            font-weight: bold;
            font-size: 1.2em;
            color: #28a745;
        }

        .checkout-header {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff;
        }

        .form-section,
        /* Order Summary Section Styling */
.summary-section {
    padding: 20px;
    border-radius: 10px;
    background-color: #f8f9fa;
    transition: background-color 0.3s, box-shadow 0.3s;
}

.summary-section:hover {
    background-color: #e2e6ea;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.summary-header {
    color: #333;
    font-size: 1.2em;
    margin-bottom: 15px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
}

.summary-items {
    margin-bottom: 20px;
}

.summary-items .row {
    margin-bottom: 10px;
}

.summary-items .row div {
    color: #666;
}

.summary-totals {
    border-top: 1px solid #ccc;
    padding-top: 10px;
}

.summary-totals .total {
    display: flex;
    justify-content: space-between;
    margin-bottom: 5px;
}

.summary-totals .total div {
    color: #333;
    font-weight: bold;
}

.btn-dark {
    background-color: #007bff;
    border-color: #007bff;
    transition: background-color 0.3s, border-color 0.3s;
}

.btn-dark:hover {
    background-color: #0056b3;
    border-color: #004085;
}
    </style>
    @livewireStyles()
</head>

<body>
    {{ $slot }}

    @livewireScripts()
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('alert', event => {
                swal({
                    title: event.detail.type === 'success' ? 'Good job!' : 'Oops!',
                    text: event.detail.message,
                    icon: event.detail.type,
                    button: 'OK',
                });
            });
        });
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>
