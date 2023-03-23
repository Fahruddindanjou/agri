@extends('templates.general')


@section('content')

    <!-- banner -->
	<div class="banner1 mb-1" style="background-image:url('https://images.unsplash.com/photo-1560693225-b8507d6f3aa9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
		<div class="py-lg-5">
            <div class="container pb-sm-4 pt-4">
                <div class="banner-main" style="padding-top: 15%; margin-top: 20px;">
                    <h3 class="fw-bold" style="color: white;">Tentang Kami</h3>
                    <ul class="breadcrumb" style="padding-top: 5px;">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            Tentang Kami
                        </li>
                    </ul>
                </div>
            </div>
        </div>
	</div>
    <!-- banner -->

    <div class="container" style="margin-top: 3rem;">
        <div class="row1"  style="padding-bottom: 40px;">
            <div class="col-md-4 col-12 mb-4">
                <img src="{{asset('images/5.jpg')}}" alt="" class="img-responsive img-rounded" width="100%">
            </div>
            <div class="col-md-8 col-12 mb-3">
                <div class="card-body">
                    <h1 class="pb-sm-4 fw-normal">What lorem Ipsum?</h1>
                    <p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(29, 39, 59); padding: 0px; text-align: justify; font-family: 'Segoe UI', Arial, sans-serif">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quae rem aspernatur debitis libero animi sequi explicabo qui molestiae dolorum numquam dolore, assumenda exercitationem reiciendis ullam voluptate fugit itaque possimus ipsam ex illum. Molestiae ab ipsam quos amet voluptas expedita minima omnis at ullam saepe, dolores id deleniti itaque ratione neque, autem debitis enim? Doloremque incidunt, quaerat quibusdam dolorum itaque vitae. Suscipit cum tempore beatae assumenda. Dolores laudantium, veniam enim architecto quidem facilis numquam aut officia blanditiis expedita doloribus eligendi, debitis perferendis autem voluptates maiores officiis minus. Eius, corporis aperiam?</p>
                </div>
            </div>
        </div>
        <div style="padding-bottom: 40px;">
            <div class="row1">
                <div class="col-lg-4 mb-3">
                    <div class="card shadow-sm ">
                        <div class="card-header text-center" style="margin-top: 10px;">
                            <i class="fa fa-exclamation-circle text-green" style="font-size: 30pt;"></i>
                        </div>
                        <div class="card-body text-center">
                            <h4>TENTANG AGRI BISNIS</h4>
                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, est.</p>
                            <a href="sejarah.php" class="text-green fw-bold">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card shadow-sm ">
                        <div class="card-header text-center" style="margin-top: 10px;">
                            <i class="fa fa-file-contract text-green" style="font-size:30pt;"></i>
                        </div>
                        <div class="card-body text-center">
                            <h4>STRUKTUR ORGANISASI</h4>
                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, est.</p>
                            <a href="struktur_organisasi.php" class="text-green fw-bold">Read More  <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card shadow-sm ">
                        <div class="card-header text-center" style="margin-top: 10px;">
                            <i class="fa fa-chart-line text-green" style="font-size: 30pt;"></i>
                        </div>
                        <div class="card-body text-center">
                            <h4>VISI & MISI</h4>
                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, est.</p>
                            <a href="visi_misi.php" class="text-green fw-bold">Read More  <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services -->
    <!-- Team -->
	<div class="about-bottom" style="background-image:url('https://images.unsplash.com/photo-1560693225-b8507d6f3aa9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
		<div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s"><span>Dewan Pengawas & Dewan Direksi</span></h3>
            <div class="about-bottom-grids">
                <div class="row1">
                    <div class="col-md-3 col-6 about-bottom-grid animated wow slideInLeft" data-wow-delay=".5s">
                        <div class="about-bottom-grid1">
                            <img src="{{asset('images/2.png')}}" alt=" " class="img-responsive" />
                            <h4 style="color: white;">Laura Allen</h4>
                            <h5>Ketua Dewa Direksi</h5>
                         </div>
                    </div>
                    <div class="col-md-3 col-6 about-bottom-grid animated wow slideInLeft" data-wow-delay=".6s" style="margin-top: 0px;">
                        <div class="about-bottom-grid1" z>
                            <img src="{{asset('images/3.png')}}" alt=" " class="img-responsive" />
                            <h4 style="color: white;">Chris Won</h4>
                            <h5>Ketua Dewa Pengawas</h5>
                         </div>
                    </div>
                    <div class="col-md-3 col-6 about-bottom-grid animated wow slideInLeft" data-wow-delay=".7s">
                        <div class="about-bottom-grid1">
                            <img src="{{asset('images/4.png')}}" alt=" " class="img-responsive" />
                            <h4 style="color: white;">James Alley</h4>
                            <h5>Ketua Dewa Direksi</h5>
                         </div>
                    </div>
                    <div class="col-md-3 col-6 about-bottom-grid animated wow slideInLeft" data-wow-delay=".8s" style="margin-top: 0px;">
                        <div class="about-bottom-grid1">
                            <img src="{{asset('images/5.png')}}" alt=" " class="img-responsive" />
                            <h4 style="color: white;">Michael Smith</h4>
                            <h5>Ketua Dewa Pengawas</h5>
                         </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
		</div>
	</div>
    <!-- //Team -->

    <!-- about-bottom1 -->
	<div class="about-bottom1">
		<div class="container">
			<div class="col-md-6 about-bottom1-left animated wow slideInLeft" data-wow-delay=".5s">
				<img src="{{asset('images/5.jpg')}}" alt="" class="img-responsive">
			</div>
			<div class="col-md-6 about-bottom1-right">
				<h3>Quis autem vel eum iure repreh enderit</h3>
				<div class='bar_group'>
                    <div class="" style="justify-content:space-between;">
                        <div style="display: inline-flex; justify-content: space-between;">
                            <h5>Farming</h5>
                        </div>
                        <h5 style="float: right;">90%</h5>
                    </div>
					<div class="progress" style="height: 10px;">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="20" style="width: 90%; height:10px;" label="Quality" show_values="true" tooltip="true">
                        </div>
                    </div>
					<div class="" style="justify-content:space-between;">
                        <div style="display: inline-flex; justify-content: space-between;">
                            <h5>Quality</h5>
                        </div>
                        <h5 style="float: right;">80%</h5>
                    </div>
					<div class="progress" style="height: 10px;">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="20" style="width: 80%; height:10px;" label="Quality" show_values="true" tooltip="true">
                        </div>
                    </div>
                    <div class="" style="justify-content:space-between;">
                        <div style="display: inline-flex; justify-content: space-between;">
                            <h5>Amount</h5>
                        </div>
                        <h5 style="float: right;">60%</h5>
                    </div>
					<div class="progress" style="height: 10px;">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="20" style="width: 60%; height:10px;" label="Quality" show_values="true" tooltip="true">
                        </div>
                    </div>
                    <div class="" style="justify-content:space-between;">
                        <div style="display: inline-flex; justify-content: space-between;">
                            <h5>Rating</h5>
                        </div>
                        <h5 style="float: right;">40%</h5>
                    </div>
					<div class="progress" style="height: 10px;">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="20" style="width: 40%; height:10px;" label="Quality" show_values="true" tooltip="true">
                        </div>
                    </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
    <!-- about-bottom1 -->
@endsection
