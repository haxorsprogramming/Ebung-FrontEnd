<footer>
            <div class="footer-top section-pb section-pt-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="widget-footer mt-20">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{ asset('ladun/homepage/pic_asset/logo/logo.png') }}" alt=""></a>
                                </div>
                                <p>long established fact that a reader will be distracted by the readable content by the readable content established fact that</p>
                                <div class="newsletter-footer">
                                    <input type="text" placeholder="You Email">
                                    <div class="subscribe-button">
                                        <button class="subscribe-btn">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="widget-footer mt-30">
                                <h6 class="title-widget">QUICK LINK</h6>
                                <ul class="footer-list">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Quick Contact</a></li>
                                    <li><a href="#">Blog Pages</a></li>
                                    <li><a href="#">Concord History</a></li>
                                    <li><a href="#">Client Feed</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget-footer mt-30">
                                <h6 class="title-widget">QUICK CONTACT</h6>
                                <ul class="footer-contact">
                                    <li>
                                        <label>Phone</label>
                                        <a href="#">+88013678456313</a>
                                    </li>
                                    <li>
                                        <label>Email</label>
                                        <a href="#">fultala11@gmail.com</a>
                                    </li>
                                    <li>
                                        <label>Address</label>
                                        34/5 evergreen road, concord city <br> New work, United States
                            </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget-footer mt-30">
                                <h6 class="title-widget">LATEST BLOG</h6>
                                <ul class="footer-blog">
                                    <li>
                                        <div class="widget-blog-wrap">
                                            <div class="widget-blog-image">
                                                <a href="#"><img src="https://demo.hasthemes.com/fultala-preview-v2/fultala/assets/images/blog/small-blog.jpg" alt=""></a>
                                            </div>
                                            <div class="widget-blog-content">
                                                <h6><a href="#">Some patience for the modern market</a></h6>
                                                <div class="widget-blog-meta">
                                                    <span>21 Aug 2019</span> <span>By <a href="#">Admin</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="widget-blog-wrap">
                                            <div class="widget-blog-image">
                                                <a href="#"><img src="https://demo.hasthemes.com/fultala-preview-v2/fultala/assets/images/blog/small-blog.jpg" alt=""></a>
                                            </div>
                                            <div class="widget-blog-content">
                                                <h6><a href="#">Modern market Some patience for the </a></h6>
                                                <div class="widget-blog-meta">
                                                    <span>13 Aug 2019</span> <span>By <a href="#">Admin</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copy-right-text text-center">
                                    <span>Copyright</span><i class="far fa-copyright"></i><span class="engo">2020 PT Ebunga Sukses Makmur</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- Modernizer JS -->
    <script src="{{ asset('ladun/account_asset/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <!-- <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script> -->
    <!-- jQuery JS -->
    <script src="{{ asset('ladun/account_asset/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <!-- <script src="assets/js/vendor/jquery-3.3.1.min.js"></script> -->
    <!-- Bootstrap JS -->
    <script src="{{ asset('ladun/account_asset/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('ladun/account_asset/js/vendor/bootstrap.min.js') }}"></script>

    <!-- <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script> -->

    <!-- Slick Slider JS -->
    <script src="{{ asset('ladun/account_asset/js/plugins/slick.min.js') }}"></script>
    <!-- <script src="assets/js/plugins/slick.min.js"></script> -->
    <!--  Jquery ui JS -->
    <script src="{{ asset('ladun/account_asset/js/plugins/jqueryui.min.js') }}"></script>
    <!-- <script src="assets/js/plugins/jqueryui.min.js"></script> -->
    <!--  Scrollup JS -->
    <script src="{{ asset('ladun/account_asset/js/plugins/scrollup.min.js') }}"></script>
    <script src="{{ asset('ladun/account_asset/js/plugins/ajax-contact.js') }}"></script>
    <!-- <script src="assets/js/plugins/scrollup.min.js"></script> -->
    <!-- <script src="assets/js/plugins/ajax-contact.js"></script> -->

    <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
    <!--
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main JS -->
    <script>
        const server = "{{ url('') }}/";
    </script>
    <script src="{{ asset('ladun/account_asset/js/main.js') }}"></script>
    @if($page == 'customer_dashboard')
    <script src="{{ asset('ladun/account_asset/js_custom/dashboard_customer.js') }}"></script> 
    @else
    <script src="{{ asset('ladun/account_asset/js_custom/dashboard_seller.js') }}"></script> 
    @endif

</body>

</html>