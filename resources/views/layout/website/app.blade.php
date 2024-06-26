<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Food Funday Restaurant</title>
    <meta name="keywords" content="food, funday, restaurant">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('webassets/images/food.png') }}">


    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('webassets/images/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('webassets/images/apple-touch-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('webassets/css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('webassets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('webassets/css/responsive.css') }}">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="{{ asset('webassets/css/colors/orange.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Modernizer -->
    <script src="{{ asset('webassets/js/modernizer.js') }}"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .dropdown-menu {
            list-style: none;
            padding: 0;
            margin: 0;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 150px;
            /* Adjust width as needed */
            position: absolute;
            z-index: 1;
        }

        .dropdown-menu li {
            display: block;
        }

        .dropdown-menu li a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
            transition: color 0.3s ease;
        }

        .dropdown-menu li a:hover {
            background-color: #f5f5f5;
        }

        .dropdown-menu li:not(:last-child) {
            border-bottom: 1px solid #ccc;
            /* Add border between items */
        }
/*
        .reservation-form {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .reservation-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .reservation-form input,
        .reservation-form select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .reservation-form input:focus,
        .reservation-form select:focus {
            border-color: #007bff;
            outline: none;
        }

        .selectpicker {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: url('data:image/svg+xml;utf8,<svg fill="none" height="24" stroke="currentColor" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m6 9 6 6 6-6"/></svg>') no-repeat right 10px center;
            background-color: #fff;
            padding-right: 30px;
        }

        .reservation-form .text-center {
            text-align: center;
        }

        .reservation-form .reserve-book-btn button {
            background-color: #007bff;
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .reservation-form .reserve-book-btn button:hover {
            background-color: #0056b3;
        } */
        .hover-effect:hover {
        background-color: #0056b3;
    }

        /* .card-body:hover {
            background-color: #e75b1e;
            transition: background-color 0.7s ease;
        } */
        .card {
            background-color: #f8f9fa;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            background-color: #e75b1e;

            transform: translateY(-5px);
        }

        .category {
            padding: 20px;
        }
        .enlarged-image-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.8);
        cursor: pointer;
        z-index: 9999;
    }

    .enlarged-image {
        max-width: 90%;
        max-height: 90%;
    }
    .footer-news {
    background-color: #f8f8f8;
    padding-top: 100px;
    padding-bottom: 70px;
}

.ft-title {
    font-size: 36px;
    margin-bottom: 20px;
}

.subscribe-form {
    max-width: 500px;
    margin: 0 auto;
}

.subscribe-form .form-group {
    margin-bottom: 20px;
}

.btn-orange {
    background-color: #ff8c00;
    color: #fff;
}

.btn-orange:hover {
    background-color: #ff6a00;
}

    </style>
    @livewireStyles
</head>

<body>
    {{ $slot }}
    <a href="#" class="scrollup" style="display: none;">Scroll</a>
    {{--
    <section id="color-panel" class="close-color-panel">
        <a class="panel-button gray2"><i class="fa fa-cog fa-spin fa-2x"></i></a>
        <!-- Colors -->
        <div class="segment">
            <h4 class="gray2 normal no-padding">Color Scheme</h4>
            <a title="orange" class="switcher orange-bg"></a>
            <a title="strong-blue" class="switcher strong-blue-bg"></a>
            <a title="moderate-green" class="switcher moderate-green-bg"></a>
            <a title="vivid-yellow" class="switcher vivid-yellow-bg"></a>
        </div>
    </section> --}}
    <!-- ALL JS FILES -->

    <script src="{{ asset('webassets/js/all.js') }}"></script>
    <script src="{{ asset('webassets/js/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('webassets/js/custom.js') }}"></script>
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

    @livewireScripts
</body>

</html>
