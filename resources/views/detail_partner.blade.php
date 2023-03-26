@extends('templates.general')

@section('content')

    <!-- banner -->


	<div class="banner1 mb-2" style="background-image:url('https://images.unsplash.com/photo-1560693225-b8507d6f3aa9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
		<div class="py-lg-5">
            <div class="container pb-sm-4 pt-4">
                <div class="banner-main" style="padding-top: 15%; margin-top: 20px;">
                    <h3 class="fw-bold" style="color: white;">Tentang Agri Bisnis</h3>
                    <ul class="breadcrumb" style="padding-top: 5px;">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="partner.html">Partner</a>
                        </li>
                        <li>
                            {{$detail->name}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
	</div>
    <!-- banner -->
    <!-- content -->
    <div class="container">

        <div  class="mb-1" style="align-items: center;">
            <h2 style="margin-bottom: 6px;">{{$detail->name}}</h2>
            <h4 class="text-green">{{ \Carbon\Carbon::parse($detail->created_at)->format('l, d F Y') }}</h4>
        </div>

        <div class="services mb-1 animated wow zoomIn" data-wow-delay=".5s" style="background-image: url({{$detail->image}}); border-radius: 5px; filter: brightness(60%);">
            <div class="container services-font">

            </div>
        </div>
        <div class="mb-2">
            <p>{{$detail->deskripsi}}</p><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto deleniti praesentium molestias numquam quam! Doloremque voluptate impedit minus nesciunt recusandae error cupiditate doloribus maiores architecto tempore! Sit eveniet quaerat esse!</p>
        </div>
    </div>
    <!-- end content -->
<!-- footer -->
@endsection
