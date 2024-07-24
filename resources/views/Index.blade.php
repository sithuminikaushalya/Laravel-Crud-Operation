<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SRM</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('CSS/custom.css') }}"/>
        <style>
            .custom-navbar {
                background-color: #007bff; 
            }
            .navbar-brand {
                width: 100%;
                text-align: center;
            }
            .centered-form {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-light custom-navbar">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Student Registration Application</span>
            </div>
        </nav>

        <div class="centered-form">
            <div class="card p-4 col-6">
                <div>
                    @if (Session::has('message'))
                        <p>{{ Session::get('message') }}</p>
                    @endif
                </div>

                <h1>Student Add</h1>

                <form method="post" action="{{ route('student.save') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="studentName" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="studentName" name="studentName" placeholder="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="studentEmail" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Student DOB</label>
                        <input type="date" class="form-control" id="dob" name="dob" placeholder="date of birth">
                    </div>

                    <input type="submit" class="btn btn-success" value="Add Student"/>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>
