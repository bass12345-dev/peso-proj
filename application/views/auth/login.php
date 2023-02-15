<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('includes/meta.php') ?>
    <?php $this->load->view('includes/css.php') ?> 


</head>

<body>
   
    <!-- preloader area start -->
     <?php $this->load->view('includes/preloader.php') ?> 

    <div class="login-area login-b">
        <div class="container">
            <div class="login-box ptb--100">
                <form id="login_form">
                    <div class="login-form-head">
                        <h4>Sign In</h4>
                        <img src="peso_logo.png" width="150" height="200">
                    </div>
                        <div class="login-form-body">
                            <div class="form-gp">
                                <label for="exampleInputEmail1">Username</label>
                                    <input type="text" id="exampleInputUsername" name="username" >
                                        <i class="ti-user"></i>
                            </div>
                            <div class="form-gp">
                                <label for="exampleInputPassword1">Password</label>
                                    <input type="password" id="exampleInputPassword1" name="password">
                                        <i class="ti-lock"></i>
                            </div>
                            <!-- <div class="row mb-4 rmber-area">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="#">Forgot Password?</a>
                                </div>
                            </div> -->
                            <div class="submit-btn-area">
                                <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                            </div>
                           <!--  <div class="form-footer text-center mt-5">
                                <p class="text-muted">Don't have an account? <a href="register.html">Sign up</a></p>
                            </div> -->
                        </div>
                </form>
            </div>
        </div>
    </div>
     <?php $this->load->view('includes/scripts.php') ?> 
   
</body>

</html>
