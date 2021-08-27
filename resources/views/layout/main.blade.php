<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $title }}</title>

    <!-- Bootstrap core CSS -->
    <link type="text/css" href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="/assets/dashboard/assets/css/nucleo-icons.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Custom styles for this template -->
    <link href="/assets/css/modern-business.css" rel="stylesheet">
    <link href="/assets/css/aji.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/login.css">
    <link rel="shortcut icon" href="/assets/img/logo.PNG">

</head>

<body>
    
    @include('partials/navbar')

    @yield('container')

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy;2020 All right reserved | This website made by Ryuken</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/assets/jquery/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="/assets/bootstrap/js/jqBootstrapValidation.js"></script>
    <script src="/assets/bootstrap/js/contact_me.js"></script>

</body>

</html>