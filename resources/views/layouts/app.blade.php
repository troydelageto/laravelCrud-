<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href=  "{{asset('css/app.css')}}">
    <title>Posty</title>
</head>

<body>
    <div class="container-fluid bg-primary">
        <div class="container my-3 py-3">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#">Laravel Blogs</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('dashboard')}}"> Dashboard</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('posts')}}">Post</a>
                        </li>

                    </ul>

                    <!-- <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Roy Tambe <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="#"> Login</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href=" {{ route('register') }} " class="p-3">Register</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="#">Logout</a>
                        </li>

                    </ul> -->


                </div>
            </nav>
        </div>
    </div>



    @yield('content')
</body>


</html>
