@extends('templates.general')


@section('content')

<!-- banner -->
<div class="banner">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->	<ol class="carousel-indicators" style="margin-bottom: 20px;">
		@foreach($banners as $index=>$indikator)

		  <li data-target="#carousel-example-generic" data-slide-to="{{$index}}" @if($index== 0) class="active" @endif ></li>

		@endforeach
		</ol>


		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			@foreach($banners as $index=>$banner)
		  <div class="item @if($index == 0 ) active @endif">
			<img src="{{$banner->image}}" class="img-hp slider-bg" style="filter: brightness(35%);">
			<div class="carousel-caption">
				<h4 style="font-weight: 300; font-size: 20pt;">{{$banner->name}}</h4>
				<h5 class="text-size">PERUMDA ANEKA USAHA</h5>
				<h5 class="text-size">KABUPATEN JEPARA</h5>
				<button href="" class="btn btn-lg hvr-sweep-to-top chat-btn text-white">
					<img src="{{asset('images/icon/whatsapp (1).png') }}" alt="" style="width: 30px; height: 30px; display: inline-flex; margin-right: 10px;">Chat With Us
				</button>
			</div>
		  </div>
		  @endforeach
		</div>

		<!-- Controls -->
		<!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a> -->
	  </div>
</div>
	<!-- end banner -->
<!-- banner-bottom -->
	<div class="banner-bottom animated wow zoomIn" data-wow-delay=".5s" style="margin-top: 2rem;">
		<div class="container">
			<div class="text-center">
				<h2 class="fw-normal" style="font-size: 18pt; margin-bottom: 6px;">Selamat Datang</h2>
				<h2 style="margin-bottom: 6px;">Bidang <span class="text-green">AGRI</span> Bisnis</h2>
				<h3 class=""><span>Perumda Aneka Usaha Jepara</span></h3>
			</div>
			<div class="banner-bottom-grids">
				<div class="banner-bottom-grid" role="tablist" id="myTab">
					<div class="col-md-4 banner-bottom-grid-left animated wow slideInLeft" data-wow-delay=".5s">
						<img src="{{asset('images/16.jpg') }}" alt=" " class="img-responsive" />
						<div class="">
							<div class="banner-bottom-grid-left-pos">
								<div class="banner-bottom-grid-left-pos1" style="padding: 4.2em !important; padding-top: 10px !important;">
									<ul class="nav nav-pills " role="tablist">
										<li role="presentation" class="active"  style="padding: 6px;" >
											<a href="#smartFarming" class="btn chat-btn1" aria-controls="smartFarming" role="tab" data-toggle="tab">
												<img src="{{asset('images/icon/gear.svg') }}" class="img-responsive" alt="" style="width: 157px; height: 143px; padding-bottom: 23px; display: block;">
												<span class="fw-bold" style="font-size: medium; color: white;">Smart Farming</span>
											</a>
										</li>
										<li role="presentation"  style="padding: 6px;" >
											<a href="#localCommodity" class="btn chat-btn1 " aria-controls="loxalCommodity" role="tab" data-toggle="tab">
												<img src="{{asset('images/icon/leaf.svg') }}" alt="" style="width: 153px; height: 126px; padding-bottom: 10px; display: block;">
												<span class="fw-bold" style="font-size: medium;">Local Commodity</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-8 banner-bottom-grid-right tab-content">
						<div class="tab-pane active" role="tabpanel" id="smartFarming">
							<h5 style="font-size: large;">Pertanian Modern Berbasis Pembangunan Ekonomi Lokal (PEL) Bidang Agri Bisnis Perumda Aneka Usaha Jepara</h5>
							<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, reprehenderit enim esse consequuntur quas velit fugiat aliquid earum, possimus vel debitis ab magni culpa repellat alias nisi, blanditiis tempora sint!</p>
						</div>
						<div class="tab-pane" role="tabpanel" id="localCommodity">
							<h5 style="font-size: large;">Local Commodity</h5>
							<p>Komoditas pertanian. Produk pertanian, peternakan, pembibitan, dan hutan serta perairan alami dan buatan manusia yang belum diolah, yang telah dibudidayakan, dibesarkan, atau dipanen oleh Produsen Independen dengan hak akses yang sah.</p>
						</div>

						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span><i class="glyphicon glyphicon-chevron-up" aria-hidden="true"></i><label class="horse1" style="background:url(assets/images/img-sp.png) no-repeat -7px -52px;">assumenda est cliche repreh</label>
									</a>
								</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body panel_text" style="background: white;">
									<div class="scrollbar" id="style-2">
										Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum, enim!
									</div>
								</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span><i class="glyphicon glyphicon-chevron-up" aria-hidden="true"></i><label class="horse2" style="background:url(assets/images/img-sp.png) no-repeat -8px -98px;">Itaque earum rerum</label>
									</a>
								</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body panel_text" style="background: white;">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
								</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span><i class="glyphicon glyphicon-chevron-up" aria-hidden="true"></i><label class="horse3" style="background:url(assets/images/img-sp.png) no-repeat -1px -153px;">autem accusamus terry richa</label>
									</a>
								</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body panel_text" style="background: white;">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- services -->
	<div class="services mb-2 animated wow zoomIn" data-wow-delay=".5s" style="background-image: url({{asset('images/banner2.jpg') }});">
		<div class="container services-font">
			<h2 class="fs-2">Komoditi Lokal Sebagai <span class="fw-bold">REGION BRAND</span></h2>
			<p class="fw-normal">Bidang Agri Bisnis Perumda Aneka Usaha Kabupaten Jepara mengembangkan produk komoditi lokal singkong PANDESI yang dikelola dengan sistem manajement pertanian modern sebagai produk peningkatan daya saing daerah (Region Brand) Kabupaten Jepara</p>
		</div>
	</div>
<!-- //services -->
<!-- information and ig -->
	<div class="container mb-1 animated wow zoomIn" data-wow-delay=".5s">
		<div class="row">
			<div class="col-md-8 col-lg-8">
				<h4 class="fw-normal">Informasi Umum</h4>
				<h3 class="fw-bold">Info & <span class="text-green">Pengumuman</span></h3>
				<hr class="hr-row">
				<div class="categories" style="border-radius: 5px;">
						@foreach($mainBerita as $b)
						<div class="card" style="padding-bottom: 0; border: none; margin-top: 10px;">
							<div class="card-body" style="padding-bottom: 0rem; padding-top: 0rem;">
								<div class="card border-0">
									<div class="row g-1">
										<div class="col-12 col-md-4 col-lg-4" style="padding:0px 0px 5px 0px;">
											<img src="{{$b->image}}" class="rounded-3 shadow-sm img-fluid w-100" style="height: 160px; object-fit: cover;filter:brightness(70%)">
										</div>
										<div class="col-12 col-md-8 col-lg-8 " style="height: 180px; padding:0px 15px;">
											<div class="card-body mb-3 text-media " style="padding:0px;">
												<p class="card-text">
													<a href="#" class="text-decoration-none pe-3 text-muted" style="font-size: 10pt; padding-bottom: 10px; padding-top:0px;">
														<span class="fw-bold" style="color: #90B82D;">Bidang</span> Bisnis</a>
													<span class="float-end"><i class="fa fa-ellipsis-vertical"></i></span>
												</p>
												<h4 class="" style="font-weight: 700;">
													<a href="detail_berita.php" class="text-decoration-none hover-costume text-overflow: ellipsis;" style="font-weight: bold; padding-top: 10px;">{{$b->title}}
													</a>
												</h4>
												<p class="text-truncate">{{substr(strip_tags($b->content),0,100)}}...</p>
												<a href="detail_berita.php" class="hover-costume"><small><b>Lanjutkan membaca »</b></small></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			<div class="col-md-4 col-12">
				<h4 class="fw-normal">Media Sosial</h4>
				<h3 class="fw-bold">Media <span class="text-green">Instagram</span></h3>
				<hr class="hr-row">
				<div class="categories" style="border-radius: 5px;">
					<!-- coba instagram -->
					<div class="card scroll-news" style="background-color: white; padding-top: 10px; border: none;">
						<div class="" style="display: inline-flex; justify-content: center;">
							<a href="" style=" width: 19%; margin-right: 20px; margin-top: 8px;">
								<img src="{{asset('images/2.png')}}" alt="" class="img-fluid img-rounded">
							</a>
							<div class="" style="display: inline-flex; margin-top: 15px;">
								<a href="#" style="margin:10px;">
									<h5 class="text-center  text-dark" style="font-weight: bolder;">36</h6>
									<span class="text-dark" style="font-size: 10pt;">Post</span>
								</a>
								<a href="#" style="margin:10px;">
									<h5 class="text-center text-dark">359</h6>
									<span class="text-dark" style="font-size: 10pt; ">Followers</span>
								</a>
								<a href="#" style="margin:10px;">
									<h5 class="text-center text-dark">4</h6>
									<span class="text-dark" style="font-size: 10pt;">Following</span>
								</a>
							</div>
						</div>
						<span class="text-ig">Yulia_109</span>
						<span class="text-ig" style="color: rgb(175, 175, 175);">Blog</span>
						<span class="text-ig" style="font-weight: normal; margin-bottom:10px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas, voluptate.</span>
						<div class="" style="padding: 0; margin-bottom: 15px; justify-content: space-around; display: inline-flex;">
							<div class="">
								<button href="" class="text-dark btn-2 btn-primary" type="button" style="color: white;">Following</button>
							</div>
							<div class="">
								<button href="" class="text-dark btn-2 btn-primary" type="button" style="color: white;">Message</button>
							</div>
						</div>
						<hr class="hr-row" style="width: 95%;">
						<div class="" style="margin: 5px; justify-content: center;">
							<div class="footer-grid" data-wow-delay=".6s">
								<div class="footer-grid-left">
									<a href="single.html"><img src="{{asset('images/6.jpg')}}" alt=" " class="img-responsive" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="single.html"><img src="{{asset('images/7.jpg')}}" alt=" " class="img-responsive" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="single.html"><img src="{{asset('images/8.jpg')}}" alt=" " class="img-responsive" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="single.html"><img src="{{asset('images/10.jpg')}}" alt=" " class="img-responsive" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="single.html"><img src="{{asset('images/11.jpg')}}" alt=" " class="img-responsive" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="single.html"><img src="{{asset('images/12.jpg')}}" alt=" " class="img-responsive" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="single.html"><img src="{{asset('images/7.jpg')}}" alt=" " class="img-responsive" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="single.html"><img src="{{asset('images/8.jpg')}}" alt=" " class="img-responsive" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="single.html"><img src="{{asset('images/10.jpg')}}" alt=" " class="img-responsive" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="single.html"><img src="{{asset('images/7.jpg')}}" alt=" " class="img-responsive" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="single.html"><img src="{{asset('images/6.jpg')}}" alt=" " class="img-responsive" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="single.html"><img src="{{asset('images/10.jpg')}}" alt=" " class="img-responsive" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="single.html"><img src="{{asset('images/7.jpg')}}" alt=" " class="img-responsive" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="single.html"><img src="{{asset('images/11.jpg')}}" alt=" " class="img-responsive" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="single.html"><img src="{{asset('images/12.jpg')}}" alt=" " class="img-responsive" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="single.html"><img src="{{asset('images/7.jpg')}}" alt=" " class="img-responsive" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="single.html"><img src="{{asset('images/6.jpg')}}" alt=" " class="img-responsive" /></a>
								</div>
								<div class="footer-grid-left">
									<a href="single.html"><img src="{{asset('images/8.jpg')}}" alt=" " class="img-responsive" /></a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<!-- end coba instagram -->
				</div>
			</div>
			</div>
		</div>
	</div>
<!-- end information -->
<!-- channel -->
	<div class="container mb-1 animated wow zoomIn" data-wow-delay=".5s">
		<h4 class="fw-normal">Channel Kami</h4>
		<h3 class="fw-bold">YouTube<span class="text-green"> Channel</span></h3>
		<hr class="hr-row">
		<div class="bg-channel" style="margin-top: 10px; border-radius: 5px;">

            @foreach ($youtubeBerita as $yt)

			<div class="card" style="padding-top:10px; background:none; border: none;">
				<div class="" style="border-radius: 5px;">
					<div class="row1" style="padding: 10px;">
						<div class="col-lg-3 col-md-3 col-6">
							<div class="card mb-3">
								<iframe class="img-rounded" src="{{$yt->url_yt}}" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" frameborder="0"></iframe>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-6">
							<div class="card mb-3">
								<iframe class="img-rounded" src="https://www.youtube.com/embed/yZHkqzYAA8Y" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" frameborder="0"></iframe>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-6">
							<div class="card mb-3">
								<iframe class="img-rounded" src="https://www.youtube.com/embed/yZHkqzYAA8Y" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" frameborder="0"></iframe>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-6">
							<div class="card mb-3">
								<iframe class="img-rounded" src="https://www.youtube.com/embed/yZHkqzYAA8Y" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" frameborder="0"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
            @endforeach
		</div>
	</div>
<!-- end channel -->
<!-- news -->
	<div class="latest-post mb-3">
		<div class="container">
			<h4 class="fw-normal">Berita Pertanian</h4>
			<h3 class="fw-bold">Berita & <span class="text-green">Artikel</span></h3>
			<hr class="hr-row">
			<div class="latest-posts-grids">
                @foreach($pertanianBerita as $p)
				<div class="col-md-3 latest-posts-grid animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
					<div class="latest-posts-grid-left">
						<ul class="post-date">
							<li>25 <span>april</span></li>
						</ul>
						<ul class="post-date1">
							<li><a href="#"><i class="glyphicon glyphicon-heart" aria-hidden="true"></i></a></li>
						</ul>
						<ul class="post-date2">
							<li><a href="#"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="latest-posts-grid-right">
						<a href="#"><img src="{{$p->image}}" name="image" alt=" " class="img-responsive"></a>
						<h4><a href="/berita/{{$p->id}}">{{$p->title}}</a></h4>
						<ul>
							<li>{{$p->created_at}} <i>|</i></li>
							<li><a href="#">5 Comments</a> <i>|</i></li>
							<li><a href="#">15 Views</a></li>
						</ul>
						<p>{{substr(strip_tags($p->title),0,150)}}...</p>
						<div class="more">
							<a href="/berita/{{$p->id}}" class="hvr-sweep-to-top">Read More...</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
				@endforeach
			</div>
		</div>
	</div>
<!-- end news -->

<!-- pagination -->
	<nav style="text-align: center;">
		<ul class="pagination">
		<li>
			<a href="#" aria-label="Previous">
			<span aria-hidden="true">&laquo;</span>
			</a>
		</li>
		<li class="active"><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#">.</a></li>
		<li><a href="#">.</a></li>
		<li>
			<a href="#" aria-label="Next">
			<span aria-hidden="true">&raquo;</span>
			</a>
		</li>
		</ul>
	</nav>
<!-- end pagination -->

@endsection



