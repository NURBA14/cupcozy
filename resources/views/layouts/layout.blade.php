<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cup & Cozy @yield("title")</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Template" name="keywords">
    <meta content="Template" name="description">
    <link href="{{ asset("img/favicon.ico") }}" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset("lib/owlcarousel/assets/owl.carousel.min.css") }}" rel="stylesheet">
    <link href="{{ asset("lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css") }}" rel="stylesheet" />
    <link href="{{ asset("css/style.min.css") }}" rel="stylesheet">
</head>
<body>
    @include("layouts.navbar")
    @yield("body")
    @include("layouts.footer")
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset("lib/easing/easing.min.js") }}"></script>
    <script src="{{ asset("lib/waypoints/waypoints.min.js") }}"></script>
    <script src="{{ asset("lib/owlcarousel/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("lib/tempusdominus/js/moment.min.js") }}"></script>
    <script src="{{ asset("lib/tempusdominus/js/moment-timezone.min.js") }}"></script>
    <script src="{{ asset("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js") }}"></script>
    <script src="{{ asset("js/main.js") }}"></script>
</body>

</html>