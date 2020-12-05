@include('layout.header_register')

<main>
    <div class="content-search">

        <div class="container container-100">
            <i class="far fa-times-circle" id="close-search"></i>
            <h3 class="text-center">what are your looking for ?</h3>
            <form method="get" action="/search" role="search" style="position: relative;">
                <input type="text" class="form-control control-search" value="" autocomplete="off" placeholder="Enter Search ..." aria-label="SEARCH" name="q">

                <button class="button_search" type="submit">search</button>
            </form>
        </div>

    </div>
    <div class="banner">
        <div class="container">
            <figure id="banner-about"><a href="#"><img src="{{ asset('ladun/ebunga_asset/image/others/cs.jpg') }}" class="img-responsive" alt="img-holiwood"></a></figure>
            <div class="title-banner">
                <h1>Login/Register</h1>
                <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i>Login/Register</p>
            </div>

        </div>

    </div>
    <div class="container container-ver2">
        <div class="page-login box space-50">
            <div class="row">
                <div class="col-md-6 sign-in space-30">
                    <h3>sign in</h3>
                    <p>Hello, welcome to your account.</p>
                    <div class="social space-30 box">
                        <a class="float-left" href="#" title="facebook">
                            <i class="fab fa-facebook-f"></i>
                            SIGN IN WITH FACEBOOK
                        </a>
                        <a class="float-right" href="#" title="TWITTER">
                            <i class="fab fa-twitter"></i>
                            SIGN IN WITH TWITTER
                        </a>
                    </div>
                    <!-- End social -->
                    <form class="form-horizontal" method="POST">
                        <div class="group box space-20">
                            <label class="control-label" for="inputemail">EMAIL ADDRESS *</label>
                            <input class="form-control" type="text" placeholder="Your email" id="inputemail">
                        </div>
                        <div class="group box">
                            <label class="control-label" for="inputemail">PASSWORD *</label>
                            <input class="form-control" type="text" placeholder="Password" id="inputpass">
                        </div>
                        <div class="remember">
                            <input id="remeber" type="checkbox" name="check" value="remeber">
                            <label for="remeber" class="label-check">remember me!</label>
                            <a class="help" href="#" title="help ?">Fogot your password?</a>
                        </div>
                        <button type="submit" class="link-v1 rt">LOGIN NOW</button>
                    </form>
                    <!-- End form -->
                </div>
                <!-- End col-md-6 -->
                <div class="col-md-6">
                    <div class="register box space-50">
                        <h3>Create A New Account</h3>
                        <p>Create your own Rimbus account.</p>
                        <form class="form-horizontal" method="POST">
                            <div class="group box space-20">
                                <label class="control-label" for="inputemailres">Email Adress *</label>
                                <input class="form-control" type="text" placeholder="Your email" id="inputemailres">
                            </div>
                            <button type="submit" class="link-v1 rt">Sign Up</button>
                        </form>
                    </div>
                    <!-- End register -->
                    <div class="sigg-to-day box">
                        <h3>SIGN UP TODAY</h3>
                        <form class="form-horizontal" method="POST">
                            <div class="checkbox">
                                <input id="check1" type="checkbox" name="check" value="check1">
                                <label class="label-check" for="check1">Speed your way through the checkout.</label>
                                <input id="check2" type="checkbox" name="check" value="check2">
                                <label class="label-check" for="check2">Track your orders easily.</label>
                                <input id="check3" type="checkbox" name="check" value="check3">
                                <label class="label-check" for="check3">Keep a record of all purchases.</label>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End col-md-6 -->
            </div>
        </div>
    </div>
    
</main>

@include('layout.footer_register')