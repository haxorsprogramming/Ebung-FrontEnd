<div class="info-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <h3>About</h3>
                            <ul>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">News & Stories</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">History</a> </li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Our Studio</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Shop</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Stockists</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <h3>Customer sevices</h3>
                            <ul>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Contact Us</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Trade Services</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Login/Register</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Delivery & Returns</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <h3>Store</h3>
                            <ul>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Shop</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Wedding</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Birthday</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Women's day</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <h3>Shop collection</h3>
                            <ul>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">New Arrivals</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Hot</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Sale</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Deal of the day</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 social">
                        <p>Payment Method</p>
                        <img src="https://www.ebunga.com/assets/images/media/bank_transfer-512.png" style="width: 70px;">
                        <img src="https://www.ebunga.com/assets/images/media/logo-gopay.jpg" style="width: 70px;">
                        <img src="https://www.ebunga.com/assets/images/media/VisaLogo.jpg" style="width: 70px;">
                        <br/>
                        <img src="https://www.ebunga.com/assets/images/media/mastercard-logo-400x400.png" style="width: 70px;">
                        <img src="https://www.ebunga.com/assets/images/media/JCB_logo.svg_.png" style="width: 70px;">
                        <img src="https://www.ebunga.com/assets/images/media/1200px-American_Express_logo_(2018).svg_.png" style="width: 70px;">
                        <h1>Newsletter</h1>
                        <h2>Sign up for our mailing list to get latest updates and offers</h2>
                        <form class="form-group" action="mail" method="post">
                            <input type="text" name="input-mail" placeholder="Your mail here" class="input-lg">
                            <button type="submit"><img src="{{ asset('ladun/homepage/pic_asset/util/Send.png') }}" alt="holiwood"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 logo-footer">
                    <a href="#" class="logo-bot"></a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 copy">
                    <span>Copyright</span><i class="far fa-copyright"></i><span class="engo">2020 PT Ebunga Sukses Makmur</span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gmail-footer">
                    <span id="gmail-footer"><a href="#">hi@ebunga.co.id</a></span>
                </div>
            </div>
        </div>
        <div class="hidden-lg hidden-md back-to-top fade"><i class="fas fa-caret-up"></i></div>
        <div class="BG-menu"></div>
    </footer>

    <!-- boostrap & jquery -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
	<script src="{{ asset('ladun/registerpage/js/jquery.min_af.js') }}"></script>
	<script src="{{ asset('ladun/registerpage/js/bootstrap.min_0028.js') }}"></script>
	
	<!-- js file -->
	<script src="{{ asset('ladun/registerpage/js/function-back-top.js') }}"></script>
	<script src="{{ asset('ladun/registerpage/js/function-sidebar.js') }}"></script>
	<script src="{{ asset('ladun/registerpage/js/funtion-header-v3.js') }}"></script>
    <script src="{{ asset('ladun/registerpage/js/function-search-v2.js') }}"></script>
    <script>
        const server = "{{ url('') }}/";
    </script>
    <script src="{{ asset('ladun/homepage/js_custom/ebunga-register.js') }}"></script>
</body>
</html>