<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- IMPORT LIBRARY -->
    <link rel="stylesheet" href="./assets/vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./assets/vendor/fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/mystyle.css">
    <title>About</title>
</head>
<body>
    <!-- NAVIGATION BAR -->
    <nav class="mynav">
    <div class="container  d-flex justify-content-end">
            <a href="{{url('/')}}" class="mynav-link">About</a>
            <a href="{{url('education')}}" class="mynav-link">Education</a>
            <a href="{{url('skill')}}" class="mynav-link">Skill</a>
            <a href="{{url('experience')}}" class="mynav-link">Experience</a>
            <a href="{{url('contact')}}" class="mynav-link active">Contact</a>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero contact">
        <div class="container">
            <div class="row">
                <div class="hero-pic col-3 offset-1">
                    <div class="hero-fa  d-flex flex-column justify-content-center align-items-center">
                        <h1><i class="fa fa-phone fa-4x"></i></h1>
                    </div>
                </div>
                <div class="hero-text spaced col-7 mt-5 text-right">
                    <h2>Contact</h2> 
                    <br>
                    <div class="row">
                        <div class="col-12"><h4>Nomor Telepon: <b>0821-8455-7736</b><h4></div>
                        <div class="col-12"><h4>Email: <b>aqilfarras023@gmail.com</b><h4></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="more d-flex justify-content-center align-items-center">More</div> -->
    </section>

    <!-- SCRIPT -->
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/vendor/popper/popper.min.js"></script>
    <script src="./assets/vendor/bootstrap/bootstrap.js"></script>
    <script src="./assets/vendor/fontawesome-free-5.11.2-web/js/all.min.js"></script>
</body>
</html>