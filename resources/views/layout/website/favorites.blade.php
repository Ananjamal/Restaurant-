<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Wishlist</title>
    <link rel="stylesheet" href="{{ asset('webassets/css/favorites.css') }}">
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
