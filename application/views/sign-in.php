
    <link href="<?php echo base_url(); ?>assets/css/authentication.css" rel="stylesheet">

<body class="theme-blue" id="authentication">
    <div class="authentication">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xl-9 col-lg-8 col-md-12 p-l-0">
                    <div class="l-detail">
                        <h5 class="position">Welcome</h5>
                        <h1 class="position">admin</h1>
                        <h3 class="position">Sign in to start your session</h3>
                        <p class="position">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>                            
                        <ul class="list-unstyled l-social position">
                            <li><a href="#"><i class="zmdi zmdi-facebook-box"></i></a></li>                                
                            <li><a href="#"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-pinterest-box"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>                            
                            <li><a href="#"><i class="zmdi zmdi-google-plus-box"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-behance"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>                            
                        </ul>
                        <ul class="list-unstyled l-menu">
                            <li><a href="#">Contact Us</a></li>                                
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12 p-r-0">
                    <div class="card position">
                        <h4 class="l-login">Login</h4>
                        <form class="col-md-12" id="sign_in" method="POST">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">First Name</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Password</label>
                                </div>
                            </div>
                            <div>
                                <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-cyan">
                                <label for="rememberme">Remember Me</label>
                            </div>
                            <a href="index.html" class="btn btn-raised g-bg-blue waves-effect" title="">SIGN IN </a>
                            <a href="sign-up.html" class="btn btn-raised waves-effect" title="">SIGN UP</a>
                            <div class="text-left"> <a href="forgot-password.html">Forgot Password?</a> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="<?php echo base_url(); ?>assets/plugins/sketch/sketch.min.js"></script><!-- sketch Animation Js --> 
<script src="<?php echo base_url(); ?>assets/js/pages/authentication/sketch.js"></script><!-- sketch Js -->