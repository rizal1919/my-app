<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS from bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- my logo icon -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/my-black-logo.png" />

    <!-- my css file -->
    <link rel="stylesheet" href="/css/app.css">

    <!-- my font-awsome link -->
    <script src="https://kit.fontawesome.com/9dd10fc461.js" crossorigin="anonymous"></script>

    <title>Rizal De Studio</title>
</head>
<body>
    
    <!-- your content belongs here -->
    @yield('container')
    
    <!-- JavaScript from bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- place your javascript functional here -->
    @stack('javascript')
</body>
</html>