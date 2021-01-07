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
                <h3>Returning customer? <span class="coupon" id="showlogin">Click here to login</span></h3>
                <div class="coupon-content" id="checkout-login">
                    <div class="coupon-info">
                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                        <form action="#">
                            <p class="coupon-input form-row-first">
                                <label>Username or email <span class="required">*</span></label>
                                <input type="text" name="email">
                            </p>
                            <p class="coupon-input form-row-last">
                                <label>password <span class="required">*</span></label>
                                <input type="password" name="password">
                            </p>
                            <div class="clear"></div>
                            <p>
                                <button type="submit" class="button-login btn" name="login" value="Login">Login</button>
                                <label class="remember"><input type="checkbox" value="1"><span>Remember</span></label>
                            </p>
                            <p class="lost-password">
                                <a href="#">Lost your password?</a>
                            </p>
                        </form>
                    </div>
                </div>
                @endif

            </div>
            <!-- coupon-accordion end -->
            <!-- coupon-accordion start -->
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
        </div>
    </div>
</div>