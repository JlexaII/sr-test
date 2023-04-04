<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="images/x-icon" href="favicon.ico">
    <script src="https://use.fontawesome.com/releases/v6.2.0/js/all.js"></script>
    <title>@yield('title-block')</title>
</head>

<body>
    <div class="p-3">
        <div class="row">
            <div class="col-4">
                @include('include.header')
            </div>
            <div class="position-sticky mt-5 p-5">
                @include('include.Reklama')
            </div>
            <div class="mt-5 p-3">
                @yield('content')
            </div>
        </div>
        <div class="p2 m-3">
            @include('include.footer')
        </div>
        @include('include.turkums')

        @include('include.Loves')

        @include('include.savats')

        @include('include.Kirish')

        @include('include.SR')
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="js/app.js"></script>
</body>

</html>
