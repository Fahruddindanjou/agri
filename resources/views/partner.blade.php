@extends('templates.general')


@section('content')

    <!-- banner -->
	<div class="banner1 mb-2" style="background-image:url('https://images.unsplash.com/photo-1560693225-b8507d6f3aa9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
		<div class="py-lg-5">
            <div class="container pb-sm-4 pt-4">
                <div class="banner-main" style="padding-top: 15%; margin-top: 20px;">
                    <h3 class="fw-bold" style="color: white;">Partner</h3>
                    <ul class="breadcrumb" style="padding-top: 5px;">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            Partner
                        </li>
                    </ul>
                </div>
            </div>
        </div>
	</div>
    <!-- end banner -->

    <div class="container">
        <div class="row1">
            <div class="col-md-4 col-12 mb-2">
                <img src="{{asset('images/5.jpg')}}" alt="" class="img-responsive rounded-3" width="100%">
            </div>
            <div class="col-md-8 col-12 mb-2">
                <div class="card-body">
                    <h1 class="pb-sm-4 fw-normal">What lorem Ipsum?</h1>
                    <p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(29, 39, 59); padding: 0px; text-align: justify; font-family: 'Segoe UI', Arial, sans-serif">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quae rem aspernatur debitis libero animi sequi explicabo qui molestiae dolorum numquam dolore, assumenda exercitationem reiciendis ullam voluptate fugit itaque possimus ipsam ex illum. Molestiae ab ipsam quos amet voluptas expedita minima omnis at ullam saepe, dolores id deleniti itaque ratione neque, autem debitis enim? Doloremque incidunt, quaerat quibusdam dolorum itaque vitae. Suscipit cum tempore beatae assumenda. Dolores laudantium, veniam enim architecto quidem facilis numquam aut officia blanditiis expedita doloribus eligendi, debitis perferendis autem voluptates maiores officiis minus. Eius, corporis aperiam?</p>
                </div>
            </div>
        </div>
        <h3 class="text-center mb-1">PARTNER KAMI</h3>
        <div style="padding-bottom: 40px;">
            <div class="row1">

                @foreach($part as $par)
                <div class="col-lg-4 mb-3">
                    <div class="card shadow-sm ">
                        <div class="card-header text-center" style="margin-top: 10px;">
                            <img src="{{$par->image}}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body text-center">
                            <h4>{{$par->name}}</h4>
                            <p class="mb-1">  {{substr(strip_tags($par->deskripsi),0,30)}}...<br>
                                <a href="#" class="text-green">{{$par->url}}</a>
                            </p>
                            <a href="/detail_partner/{{$par->id}}" class="text-green fw-bold">Show Partner <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
    <!-- maps -->
@endsection
