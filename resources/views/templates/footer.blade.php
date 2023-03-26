</div>
<!-- footer -->

<div class="footer">
	<div class="container">
		<div class="col-md-4 footer-grid animated wow slideInLeft" data-wow-delay=".5s" >
			<h3 style="margin: 0 0 1em;">About Us</h3>
			<p style="margin: 0em !important;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
				nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
				deserunt mollit anim id est laborum.</p>
		</div>
		<div class="col-md-5 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
			<div class="col-sm-6 column footer-grid">
				<h3 style="margin: 0 0 1em;">Navigasi</h3>
				<ul class="footer-address" style="padding: 0em; border-bottom: none; border-top: none; ">
					<li>Tentang Kami</li>
					<li>Produk</li>
					<li>Berita & Informasi</li>
				</ul>
			</div>
			<div class="col-sm-5 column footer-grid">
				<h3 style="margin: 0 0 1em;">Layanan</h3>
				<ul class="footer-address" style="padding: 0em; border-bottom: none; border-top: none; ">
					<li>Tentang Kami</li>
					<li>Produk</li>
					<li>Berita & Informasi</li>
				</ul>
			</div>
		</div>
		<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
			<h3 style="margin: 0 0 1em;">Contact Info</h3>
			<ul class="footer-address" style="padding: 0em; border-bottom: none; border-top: none; ">
				<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 738 Diamond Road, New York City, USA.</li>
				<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +7683 928 829</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="footer-copy">
	<div class="container">
		<p class="animated wow slideInLeft" data-wow-delay=".5s">© 2023 Agri Bisnis PERUMDA JEPARA <a href="#"></a></p>
	</div>
</div>
<!-- //footer -->

    <!-- JS -->
    <!-- js -->
    <script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js') }}"></script>
    <!-- //js -->
    <!-- for bootstrap working -->
        <script src="{{asset('js/bootstrap.js') }}"></script>
    <!-- //for bootstrap working -->
    <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function() {
                $().UItoTop({ easingType: 'easeOutQuart' });
                });
        </script>
    <!-- //here ends scrolling icon -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- slider -->
    <script defer src="{{asset('js/jquery.flexslider.js') }}"></script>
    <script type="text/javascript">
            $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                $('body').removeClass('loading');
                }
            });
            });
    </script>
    <!-- end slider -->

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>

    <script>
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function(){
            if(window.pageYOffset > 100){
                nav.classList.add('bg-navbar', 'shadow');
            }else{
                nav.classList.remove('bg-navbar', 'shadow');
            }
        });
    </script>
    <!-- kit fontawesome -->
    <script src="https://kit.fontawesome.com/7ac3fca741.js" crossorigin="anonymous"></script>
</body>
</html>
