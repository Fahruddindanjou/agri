<!DOCTYPE html>
<html>
<head>
<title>Agri Bisnis</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- //for-mobile-apps -->
<link href="{{asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!--FlexSlider-->
<link rel="stylesheet" href="{{asset('css/flexslider.css') }}" type="text/css" media="screen" />
<!--End-slider-script-->
<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
<!-- custom css -->
<link rel="stylesheet" href="{{asset('css/custom.css') }}">

<link href="{{asset('css/animate.min.css') }}" rel="stylesheet">
<script src="{{asset('js/wow.min.js') }}"></script>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap');
</style>
</head>

<body>
<!-- navbar -->
<nav class="navbar navbar-default navbar-fixed-top nav menu menu--horatio" >
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" style="margin-top:15px; " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="" href="#" style="width: 200px; display: inline-flex; align-items: center; justify-items: center;">
				<img href="#" alt="" src="https://perumdajepara.co.id/public/assets/front/img/logo%20PERUMDA%20JEPARA.png"  class="img-brand">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right text-center" style="align-items: center;">

           {{-- @foreach(\App\Models\Menu::where('type' ,'ya')->orderBy('urutan','asc')->get() as $menu)
                <li class="menu__item @if(Request::is($menu->url)) menu__item--current @endif">
                    <a href="{{$menu->url}}" @if(Request::is($menu->url)) style="color: #c59c45;" @endif>{{$menu->name}}</a>

                </li>
            @endforeach --}}
            <li class="menu__item @if (Request::is('/')) menu__item--current @endif">
                <a href="{{ url('/') }}" style="color: @if (Request::is('/'))#c59c45; @endif">Beranda</a>
            </li>
            <li class="menu__item @if (Request::is('tentang_kami'))menu__item--current @endif">
                <a href="{{ url('/tentang_kami') }}" style="color: @if (Request::is('tentang_kami'))#c59c45; @endif">Tentang Kami</a>
            </li>
            <li class="menu__item @if (Request::is('produk'))menu__item--current @endif">
                <a href="{{ url('/produk') }}" style="color: @if (Request::is('produk'))#c59c45; @endif">Produk</a>
            </li>
            <li class="menu__item @if (Request::is('informasi'))menu__item--current @endif">
                <a href="{{ url('/informasi') }}" style="color: @if (Request::is('informasi')) color: #c59c45; @endif">Informasi</a>
            </li>
            <li class="menu__item @if (Request::is('partner'))menu__item--current @endif">
                <a href="{{ url('/partner') }}" style="color: @if (Request::is('partner'))#c59c45; @endif">Partner</a>
            </li>
            <li class="menu__item @if (Request::is('contact'))menu__item--current @endif">
                <a href="{{ url('/contact') }}" style="color: @if (Request::is('contact'))#c59c45; @endif ">Contact</a>
            </li>

				<form action="" class="search-input1" style="margin-left: 10px; padding-top: 10px;">
					<input type="text" class="form-control input_search" placeholder="Cari Berita ...">
					<button class="btn btn-sm input-icon"><i class="fa fa-magnifying-glass" style="color: gold;"></i> </button>
				</form>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
<!-- end navbar -->
