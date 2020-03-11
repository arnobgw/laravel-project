<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <title>Project</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="{{route('index')}}">Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Setup
                    </a>
                    <div class="dropdown-menu force-size" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('company')}}">Company</a>
                        <a class="dropdown-item" href="{{route('section')}}">Section</a>
                        <a class="dropdown-item" href="{{route('wdaysholidays')}}">Working Days & Holidays</a>
                        <a class="dropdown-item" href="{{route('designation')}}">Designation</a>
                        <a class="dropdown-item" href="{{route('department')}}">Department</a>
                        <a class="dropdown-item" href="{{route('sdepartment')}}">Sub Department</a>
                        <a class="dropdown-item" href="{{route('otstatus')}}">OT Status</a>
                        <a class="dropdown-item" href="{{route('pscale')}}">Pay Scale</a>
                        <a class="dropdown-item" href="{{route('empcatagory')}}">Employee Catagory</a>
                        <a class="dropdown-item" href="{{route('religion')}}">Religion</a>
                        <a class="dropdown-item" href="{{route('educatagory')}}">Eduation Catagory</a>
                        <a class="dropdown-item" href="{{route('wexperience')}}">Working Experience</a>
                        <a class="dropdown-item" href="{{route('sex')}}">Sex</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Entities
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('employee')}}">Employee</a>
                        <a class="dropdown-item" href="#">OT, Attendance & Others</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Changed OfficeTime (Line wise)</a>
                        <a class="dropdown-item" href="#">Changed OfficeTime (Section wise)</a>
                        <a class="dropdown-item" href="#">Changed OfficeTime (Designation wise)</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tools
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Report
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="margin-top-30"></div>

    @yield('content')
    @yield('css')        

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
    <script src="{{asset('js/global.js')}}"></script>
    @yield('js')
</body>

</html>