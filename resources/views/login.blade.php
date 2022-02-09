<!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    <head>
        <meta charset="UTF-8">
        <title>Pick Admin</title>
        <link rel="shortcut icon" href="{{ asset('PenitipanHewan/dist/images/favicon.ico') }}" />
        <meta name="viewport" content="width=device-width,initial-scale=1"> 

        <!-- START: Template CSS-->
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/jquery-ui/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/jquery-ui/jquery-ui.theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/simple-line-icons/css/simple-line-icons.css') }}">        
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/flags-icon/css/flag-icon.min.css') }}"> 

        <!-- END Template CSS-->     

        <!-- START: Page CSS-->   
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/vendors/social-button/bootstrap-social.css') }}"/>   
        <!-- END: Page CSS-->

        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="{{ asset('PenitipanHewan/dist/css/main.css') }}">
        <!-- END: Custom CSS-->
    </head>
    <!-- END Head-->

    <!-- START: Body-->
    <body id="main-container" class="default">
        <!-- START: Main Content-->
        <div class="container">
            <div class="row vh-100 justify-content-between align-items-center">
                <div class="col-12">
                    <form action="log" method="post" class="row row-eq-height lockscreen">
                        @csrf
                        <div class="login-form col-12">
                            <h5>LOGIN</h5>
                            <div class="form-group mb-3">
                                <label for="emailaddress">Email address</label>
                                <input class="form-control" type="email" name="email" id="emailaddress"  placeholder="Enter your email">
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password"  id="password" placeholder="Enter your password">
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-primary" type="submit" href="log"> Log In </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- END: Content-->

        <!-- START: Template JS-->
        <script src="{{ asset('PenitipanHewan/dist/vendors/jquery/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/moment/moment.js') }}"></script>
        <script src="{{ asset('PenitipanHewan/dist/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>    
        <script src="{{ asset('PenitipanHewan/dist/vendors/slimscroll/jquery.slimscroll.min.js') }}"></script>

        <!-- END: Template JS-->  
    </body>
    <!-- END: Body-->
</html>
