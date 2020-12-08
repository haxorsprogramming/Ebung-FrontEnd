@include('layout.header_account')

        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area section-ptb" id="divBreadcumb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="breadcrumb-title">@{{ titleForm }}</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">dashboard</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->

        <!-- main-content-wrap start -->
        <div class="main-content-wrap section-ptb my-account-page" id="divUtama">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="account-dashboard">
                            <div class="dashboard-upper-info">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-lg-3 col-md-12">
                                        <div class="d-single-info">
                                            <p class="user-name">Hi, <span>{{ $user_login }}</span></p>
                                            <p>( you? please <a href="{{ url('/logout') }}">Log Out</a>)</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="d-single-info">
                                            <p>Need Assistance? Customer service at.</p>
                                            <p>admin@devitems.com.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                        <div class="d-single-info">
                                            <p>E-mail them at </p>
                                            <p>support@yoursite.com</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-12">
                                        <div class="d-single-info text-lg-center">
                                            <a href="cart.html" class="view-cart"><i class="fa fa-cart-plus"></i>view cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-2">
                                    <!-- Nav tabs -->
                                    <ul role="tablist" class="nav flex-column dashboard-list">
                                        <li><a href="#!" data-toggle="tab" @click="dashboardAtc" class="nav-link active">Dashboard</a></li>
                                        <li> <a href="#!" data-toggle="tab" class="nav-link">Orders</a></li>
                                        <li><a href="#!" data-toggle="tab" class="nav-link">Downloads</a></li>
                                        <li><a href="#!" data-toggle="tab" class="nav-link">Addresses</a></li>
                                        <li><a href="#!" data-toggle="tab" class="nav-link">Account details</a></li>
                                        <li><a href="{{ url('/logout') }}" class="nav-link">logout</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-12 col-lg-10">
                                    <!-- Tab panes -->
                                    
                                    <div class="tab-content dashboard-content">
                                        <div style="font-weight:300px;font-family:Poppins;font-size:14px;line-height:20px;display:none;" id="loaderPage">
                                            <img src="{{ asset('ladun/ebunga_asset/others/loading.svg') }}" style="width: 40px;"> loading page ...
                                        </div>
                                        <div id="divContainerUtama">

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

@include('layout.footer_account');