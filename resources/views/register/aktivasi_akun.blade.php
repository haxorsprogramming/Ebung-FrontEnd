@include('layout.header_aktivasi_akun')

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
	
<div class="container">
            <div class="page-404">
                <!-- End images -->
                <div class="text center">
                    <div class="icon-box box">
                        <img src="img/icon-page404.png" alt="icon">
                    </div>
                    <h3>THIS IS NOT THE WEB PAGE YOU ARE LOOKING FOR</h3>
                    <p>Please try one of the following pages <a href="#" title="link">home page <i class="fa fa-angle-double-right"></i></a></p>
                    <form action="#" method="get" accept-charset="utf-8">
                        <input type="text" onblur="if (this.value == '') {this.value = 'Search here...';}" onfocus="if(this.value != '') {this.value = '';}" value="Search here..." class="input-text required-entry validate-email" title="Sign up for our newsletter" id="newsletter" name="email"> 
                        <button class="button" title="Search" type="submit">Search</button>
                    </form>
                </div>
                <!-- End text -->
            </div>
            <!-- End page404 -->
        </div>
        <!-- End container -->
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
				<p>CONNECT WITH US:</p>
				<a href="#" id="link-insta"></a>
				<a href="#" id="link-fb"></a>
				<a href="#" id="link-tw"></a>
				<a href="#" id="link-sky"></a>
				<h1>Newsletter</h1>
				<h2>Sign up for our mailing list to get latest updates and offers</h2>
				<form class="form-group" action="mail" method="post">
					<input type="text" name="input-mail" placeholder="Your mail here" class="input-lg">
					<button type="submit"><img src="img/Send.png" alt="img-holiwood"></button>
				</form>
			</div>
		</div>
	</div>
</div>
</main>


@include('layout.footer_aktivasi_akun')