<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="container">


        <div class="row">


            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">


                            <li class="nav-item">
                                <a class="nav-link" href="{{route('product.main')}}">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('about.main')}}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact.main')}}">Contacts</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>




        </div>
        @yield('content')
    </div>
</body>

</html>
