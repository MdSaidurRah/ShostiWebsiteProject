<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AccSys - Accounting Management System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{static_asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{static_asset('/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
<div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <?php
    $organization =  DB::table('system_information')
        ->where('information_key','Organization Name')
        ->select('*')->first();

    ?>


    <!-- Sign In Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;background-image: url('http://127.0.0.1:8000/website/assets/img/bg.jpg');    background-repeat: no-repeat;">
            <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"></div>
            <div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                       <h3 class="text-primary">{{$organization->information_value}}</h3>
                       <h3>Sign In</h3>
                    </div>

                    @if(isset($message))
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @endif
                    <form id="loginform" action="{{url('/login-post')}}" method="post" enctype="" >
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control"  required name="email" id="email" placeholder="User Email">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" name="password" required id="password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In End -->
</div>

<!-- JavaScript Libraries -->
<script src="{{static_asset('/assets/lib/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{static_asset('/assets/lib/js/bootstrap.bundle.min.js')}}"></script>
<!-- Template Javascript -->
<script src="{{static_asset('/assets/js/main.js')}}"></script>
</body>

</html>
