@extends('templates.general')

@section('content')
    <!-- banner -->
	<div class="banner1 mb-1" style="background-image:url('https://images.unsplash.com/photo-1560693225-b8507d6f3aa9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
		<div class="py-lg-5">
            <div class="container pb-sm-4 pt-4">
                <div class="banner-main" style="padding-top: 15%; margin-top: 20px;">
                    <h3 class="fw-bold" style="color: white;">Informasi</h3>
                    <ul class="breadcrumb" style="padding-top: 5px;">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            Informasi
                        </li>
                    </ul>
                </div>
            </div>
        </div>
	</div>
    <!-- banner -->

    <!-- information and ig -->
	<div class="container mb-1 animated wow zoomIn" data-wow-delay=".5s" style="margin-top: 2rem;">
        <div class="row">
        <div class="col-md-8 col-lg-8">
				<h3 class="fw-normal"> Informasi Umum</h3>
				<h2 class="fw-bold">Info & <span class="text-green">Pengumuman</span></h2>
				<hr class="hr-row">
				<br style="padding-bottom: 0px; padding-top: 0px;">

                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <h5 class="fs-normal">Berita dan Pengumuman</h5>
                        <div class="input-group" style="margin-bottom: 5px;">
                            <div class="input-group-btn">
                              <button class="form-control dropdown-toggle" placeholder="" style="border-radius: 5px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cari Berita... <span class="caret"></span></button>
                              <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                            </div><!-- /btn-group -->
                        </div><!-- /input-group -->
                    </div>
                <hr style="margin:0px;">
                @foreach($informasiBerita as $i)
				<div class="card" style="padding-bottom: 0; border: none; margin-top: 10px;">
					<div class="card-body" style="padding-bottom: 0rem; padding-top: 0rem;">
						<div class="card border-0">
							<div class="row g-1">
								<div class="col-12 col-md-4 col-lg-4" style="padding:0px 0px 5px 0px;">
									<img src="{{$i->image}}" class="rounded-3 shadow-sm img-fluid w-100" style="height: 160px; object-fit: cover;filter:brightness(70%)">
								</div>
								<div class="col-12 col-md-8 col-lg-8 " style="height: 180px; padding:0px 15px;">
									<div class="card-body mb-3 text-media " style="padding:0px;">
										<p class="card-text">
											<a href="#" class="text-decoration-none pe-3 text-muted" style="font-size: 10pt; padding-bottom: 10px; padding-top:0px;">
												<span class="fw-bold" style="color: #90B82D;">Bidang</span> {{$i->kategori?->name}}</a>
											<span class="float-end"><i class="fa fa-ellipsis-vertical"></i></span>
										</p>
										<h4 class="" style="font-weight: 700;">
											<a href="/berita/{{$i->id}}" class="text-decoration-none hover-costume text-overflow: ellipsis;" style="font-weight: bold; padding-top: 10px;">
											{{substr(strip_tags($i->title),0,150)}}...
                                            </a>
										</h4>
										<p class="text-truncate">{{substr(strip_tags($i->content),0,100)}}...</p>
										<a href="/berita/{{$i->id}}" class="hover-costume"><small><b>Lanjutkan membaca »</b></small></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                @endforeach
		</div>
			<div class="col-md-4 col-12">
				<!-- popular post -->
				<h3 class="fw-normal">Advertisement</h3>
				<h2 class="fw-bold">Media <span class="text-green">Iklan</span></h2>
				<hr class="hr-row">
				<img src="https://perumdajepara.co.id/public/assets/front/img/Screenshot 2022-09-24 124718.png" alt="" class="img-responsive mb-3" style="padding-top: 10px; border-radius: 5px;">
				<!-- end advetisem -->
                <!-- produk -->
                <div class="posts border-0">
                    <h3>Produk Best Seller</h3>
                        <a href="">
                            <div class="card shadow-sm  mb-1">
                                <div class="media">
                                    <div class="media-left">
                                      <a href="#">
                                        <img class="media-object shadow-sm" src="assets/images/apel.jpg" alt="..." style="max-width:100px; max-height: 100px;">
                                      </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="" class="text-dark hover-costume">
                                            <h4 class="media-heading">Apple</h4>
                                            <p>Seller : Pertanian Makmur</p>
                                            <div class="text-warning" style="display:flex;">
                                              <i class="fa fa-star" style="color: gold;"></i>
                                              <i class="fa fa-star" style="color: gold;"></i>
                                              <i class="fa fa-star" style="color: gold;"></i>
                                              <i class="fa fa-star" style="color: gold;"></i>
                                              <i class="fa fa-star-half" style="color: gold;"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="card shadow-sm mb-1">
                                <div class="media">
                                    <div class="media-left">
                                      <a href="#">
                                        <img class="media-object shadow-sm" src="assets/images/pepaya.png" alt="..." style="max-width:100px; max-height: 100px;">
                                      </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="" class="text-dark hover-costume">
                                            <h4 class="media-heading">Apple</h4>
                                            <p>Seller : Pertanian Makmur</p>
                                            <div class="text-warning" style="display:flex;">
                                                <i class="fa fa-star" style="color: gold;"></i>
                                                <i class="fa fa-star" style="color: gold;"></i>
                                                <i class="fa fa-star" style="color: gold;"></i>
                                                <i class="fa fa-star" style="color: gold;"></i>
                                                <i class="fa fa-star-half" style="color: gold;"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                </div>
			</div>
		</div>
	</div>
    <!-- end information -->
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
