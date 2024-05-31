<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assetsDash/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsDash/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsDash/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsDash/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsDash/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsDash/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsDash/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsDash/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assetsDash/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsDash/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assetsDash/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assetsDash/images/favicon.png') }}" />
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">


    <style>
        /* .table-responsive {
            overflow-x: auto;
        }

        td h5 {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 150px;
        } */
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    @livewireStyles()

</head>

<body class="with-welcome-text">
    <div class="container-scroller">
        {{ $slot }}
    </div>
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('hideModal', function(modalId) {
                var myModalEl = document.getElementById(modalId);
                var modal = bootstrap.Modal.getInstance(myModalEl);
                if (!modal) {
                    modal = new bootstrap.Modal(myModalEl);
                }
                modal.hide();
            });
        });
    </script>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+z50OzIQqFcqZl/Oq5J/zk BreFGDg8E64LGvWGJ" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"
        integrity="sha384-rs/bAgM9LXdsi1Ejj9eCeJexuA9Su3MQJvsVrjRqBKsEECGr5GwSqwXa2Rz/pCjc" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"
        integrity="sha384-QFiQDRfYWCvbW1pZKnFmIln4Zn3H4x9TLuZ9BKCex7te5iFXb3PIwWusGUF9F9V6" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <!-- Your custom JavaScript files -->
    <script src="{{ asset('assetsDash/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assetsDash/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assetsDash/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assetsDash/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('assetsDash/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assetsDash/js/template.js') }}"></script>
    <script src="{{ asset('assetsDash/js/settings.js') }}"></script>
    <script src="{{ asset('assetsDash/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assetsDash/js/todolist.js') }}"></script>
    <script src="{{ asset('assetsDash/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assetsDash/js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    {{-- <!-- <script src="{{ asset('assetsDash/js/Chart.roundedBarCharts.js') }}"></script> --> --}}
    <!-- End custom js for this page-->
    @livewireScripts()
</body>

</html>
