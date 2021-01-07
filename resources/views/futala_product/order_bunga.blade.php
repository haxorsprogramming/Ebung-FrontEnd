@php
$userLogin = session('userLogin');
if($userLogin === null){
$sessionUser = 'no';
}else{
$sessionUser = 'yes';
}
@endphp
<div class="row" id="divOrder">
    <hr />
    <div class="col">
        <div class="coupon-area">
            <!-- coupon-accordion start -->
            <div class="coupon-accordion">
                @if($sessionUser == 'yes')
                <h3>You login with account <b>{{ $userLogin }}</b>. If this account not you,
                    <a href="{{ ENV('JSVOID') }}" class="coupon" @click="silentLogout">Click here to logout</a>
                </h3>
                @else
                <h3>You need login to continue order? <span class="coupon" id="showlogin" onclick="showLogin()">Click here to login</span></h3>
                <div class="coupon-content" id="checkout-login">
                    <div id="divLoading" style="text-align:center;display:none;">
                        <lottie-player src="{{ env('LOTTIE_LOADING_LOGIN') }}" mode="bounce" background="transparent" speed="1" style="width: 300px; height: 300px;margin:auto;" loop autoplay></lottie-player>
                        <h5>Login to ebunga ... </h5>
                    </div>
                    <div class="coupon-info" id="divFormLogin">
                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>

                        <p class="coupon-input form-row-first">
                            <label>Username or email <span class="required">*</span></label>
                            <input type="text" name="email" id="txtUsername">
                        </p>
                        <p class="coupon-input form-row-last">
                            <label>password <span class="required">*</span></label>
                            <input type="password" name="password" id="txtPassword">
                        </p>
                        <div class="clear"></div>
                        {!! NoCaptcha::display(['data-theme' => 'white', 'data-callback' => 'recaptcha_callback']) !!}
                        <p style="margin-top:20px;">
                            <a class="button-login btn" name="login" id="btnLoginSilent" @click="loginSilentAtc">Login</a>
                            <label class="remember"><input type="checkbox" value="1"><span>Remember</span></label>
                        </p>
                        <p class="lost-password">
                            <a href="#">Lost your password?</a>
                        </p>

                    </div>
                </div>
                @endif

            </div>
            <!-- coupon-accordion end -->
            <!-- coupon-accordion start -->


            <div class="checkout-details-wrapper">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="billing-details-wrap">
                            <h3 class="shoping-checkboxt-title">Order Details</h3>
                            <div class="form-group">
                                <label>Sender Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Receiver Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Receiver Email</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Receiver Phone Number</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Caption on greeting card</label>
                                <textarea class="form-control" style="resize: none;"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Delivery Date</label>
                                <input type="date" class="form-control" min="<?php echo date("Y-m-d"); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="billing-details-wrap">
                            <h3 class="shoping-checkboxt-title">Order Preview</h3>
                            
                        </div>
                    </div>
                </div>
            </div>


            @if($sessionUser == 'yes')
            <div class="coupon-accordion">
                <h3>Have a coupon? <span class="coupon" id="showcoupon">Click here to enter your code</span></h3>
                <div class="coupon-content" id="checkout-coupon">
                    <div class="coupon-info">
                        <form action="#">
                            <p class="checkout-coupon">
                                <input type="text" placeholder="Coupon code">
                                <button type="submit" class="btn button-apply-coupon" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <!-- coupon-accordion end -->
            @else

            @endif

        </div>
    </div>
</div>