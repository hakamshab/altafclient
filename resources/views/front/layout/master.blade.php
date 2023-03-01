<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Front/css/bootsrab.css')}}">
    <link rel="stylesheet" href="{{asset('Front/css/custom.css')}}">
    <link rel="stylesheet"
        href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <title>Himaliyas</title>
</head>

<body>
    <!-- Header Sec Start  -->
    <section class="header bg-dark text-light fixed-top">
        <div class="container">
            <div class="row text-center">
                <div class="col-3">
                    <h3>
                        <a href="{{url('home')}}">
                            <i class="fa fa-home"></i> <br>
                            <span>Home</span>
                        </a>
                    </h3>
                </div>
                <div class="col-3">
                    <h3>
                        <i class="fa fa-mobile" aria-hidden="true"></i> <br>
                        <span>Download</span>
                    </h3>
                </div>
                <div class="col-3">
                    <h3>
                        <a href="{{url('team')}}">
                            <i class="fa fa-users" aria-hidden="true"></i> <br>
                            <span>Team</span>
                        </a>
                    </h3>
                </div>
                <div class="col-3">
                    <h3>
                        <a href="{{url('profile')}}">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i> <br>
                            <span>My</span>
                        </a>

                    </h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Sec End  -->
    @yield('content')
</body>
<script src="{{asset('Front/js/jquery.js')}}"></script>
<script src="{{asset('Front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Front/js/popper.min.js')}}"></script>

</html>