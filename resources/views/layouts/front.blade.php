<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBK Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="/front/css/style.css" rel="stylesheet">

    @yield('style')

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body style=" margin: auto">
    <!-- Header -->
    <div class="bg-primary text-white text-center py-3 " style="background-color: #251339 !important;">
        <h2><img src="/logo.png" alt="" style="width:80%"></h2>

    @yield('content')

    <!-- Footer Navigation -->
    <nav class="navbar fixed-bottom navbar-dark main-bg-color" style=" margin: auto">
        <div class="container d-flex justify-content-around">
            <a href="/" class="text-light text-center"><i class="fas fa-home"></i> <br>Home</a>
            <a href="/user-task" class="text-light text-center"><i class="fas fa-tasks"></i> <br>Task</a>
            <a href="/vip" class="text-light text-center"><i class="fas fa-gem"></i> <br>VIP</a>
            <a href="/profile" class="text-light text-center"><i class="fas fa-wallet"></i> <br>Me</a>
        </div>
    </nav>
    @yield('scripts')
</body>
</html>
