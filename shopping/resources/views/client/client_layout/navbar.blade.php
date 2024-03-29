<!DOCTYPE html>
<html lang="fr">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>@yield('titre')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="frontend/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="frontend/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="frontend/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="frontend/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="frontend/css/custom.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Start Main Top -->
{{---------------------------------------------------------start header-------------------------------------}}
 @include('client/client_layout.header')
{{---------------------------------------------------------end header-------------------------------------}}


{{---------------------------------------------------Start Content--------------------------------------------}}

@yield('content')


{{--------------------------------------------------start footer-------------------------------------------------}}
@include('client/client_layout.footer')
{{--------------------------------------------------end footer-------------------------------------------------}}
</body>

</html>

{{--End Content--}}
