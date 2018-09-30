<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="{{ asset('js/home.js') }}"></script>
</head>
<body>
<div class="navigation">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="https://www.ieee.org">IEEE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active header-link">
                    <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item header-link">
                    <a class="nav-link" href="{{ url('/reg-form') }}">Registration</a>
                </li>
                <li class="nav-item header-link">
                    <a class="nav-link" href="#">Call For Papers</a>
                </li>
                <li class="nav-item header-link">
                    <a class="nav-link" href="#">Comittee</a>
                </li>
                <li class="nav-item dropdown header-link">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Programs
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Day1</a>
                        <a class="dropdown-item" href="#">Day2</a>
                    </div>
                </li>
                <li class="nav-item dropdown header-link">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Sponsership Details</a>
                        <a class="dropdown-item" href="#">Organiser Details</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
   @yield('content')
   @yield('formreg')
   @yield('final')
<div class="footer h-50"></div>
</body>
</html>