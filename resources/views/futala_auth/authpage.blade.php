@include('futala_layout.header')

<!-- breadcrumb-area start -->
        <div class="breadcrumb-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="breadcrumb-title">Login &amp; Register</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Login &amp; Register</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->

        <!-- main-content-wrap start -->
        <div class="main-content-wrap section-ptb lagin-and-register-page" id="divAuth">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <!-- login-register-tab-list start -->
                            <div class="login-register-tab-list nav">
                                <a class="active" data-toggle="tab" href="#lg1" @click="loginFormOpen">
                                    <h4> login </h4>
                                </a>
                                <a data-toggle="tab" href="#lg2"  @click="registerFormOpen">
                                    <h4> register </h4>
                                </a>
                            </div>
                            <!-- login-register-tab-list end -->
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">

                                                <div class="login-input-box">
                                                    <input type="text" id="txtEmail" placeholder="Email / Phonenumber">
                                                    <input type="password" id="txtPassword" placeholder="Password">
                                                </div>
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <a href="{{ url('/auth/forgot/password') }}">Forgot Password?</a>
                                                    </div>
                                                    <div style="margin-top:20px;" id="capchaGoogle">
                                                        {!! NoCaptcha::display(['data-theme' => 'white', 'data-callback' => 'recaptcha_callback']) !!}
                                                    </div>
                                                    <div class="button-box">
                                                        <a class="login-btn btn" @click="loginAtc()"><span>Login</span></a>
                                                    </div>
                                                </div>

                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                                <div class="login-input-box">
                                                    <input type="text" placeholder="Full Name">
                                                    <input class="form-control" type="text" placeholder="Your phone number" id="txtPhoneNumber" value="(62)">
                                                    <input name="user-email" placeholder="Email" type="email">
                                                    <input type="password" name="user-password" placeholder="Password">
                                                </div>
                                                <div style="margin-top:20px;" id="capchaGoogle">
                                                    {!! NoCaptcha::display(['data-theme' => 'white', 'data-callback' => 'recaptcha_callback']) !!}
                                                </div>
                                                <div class="button-box">
                                                    <a class="register-btn btn"><span>Register</span></a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-content-wrap end -->

{!! NoCaptcha::renderJs() !!}

@include('futala_layout.footer')
