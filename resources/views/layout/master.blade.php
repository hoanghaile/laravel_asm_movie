<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Raven</title>
    <base href="{{asset('/')}}">
    <link rel="icon" href="img/logo2.png" type="image" sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/detail.css" />
    <link rel="stylesheet" href="css/movie.css" />
    <link rel="stylesheet" href="css/showall.css" />
</head>

<body>
    <!-- === opening header === -->
    @include('inc.header')
    <!-- === close header === -->

    <!-- === opening content === -->
    @yield('content')

    <!-- -----opening footer -----  -->
    @include('inc.footer')
    <!-- -----close footer -----  -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/app.js"></script>
<script src="js/detail.js"></script>
<script src="js/showall.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(".owl-carousel").owlCarousel({
        items: 5,
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 5,
            },
        },
    });
</script>

</html>