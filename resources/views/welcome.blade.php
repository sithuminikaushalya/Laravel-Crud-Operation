<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Youtube Demo Application</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('CSS/custom.css')}}"/>

        <style>
            .custom-navbar {
                background-color: #007bff; 
            }
            .navbar-brand {
                width: 100%;
                text-align: center;
            }
        </style>
    </head>

    <body>

        <nav class="navbar navbar-light custom-navbar">
            <div class="container-fluid d-flex justify-content-between">
                <span class="navbar-brand mb-0 h1 mx-auto">Student Registration System</span>
                <div class="d-flex">
                    <a class="nav-link text-white" href="/login">Login</a>
                    <a class="nav-link text-white" href="/register">Register</a>
                </div>
            </div>
        </nav>

        <div class="d-flex flex-column align-items-center mt-5">
            <a href="/StudentSavePage" class="btn btn-primary">Add Student</a>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>

</html>
