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
						<a href="index.html">Home</a>
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
<!-- Detail Berita -->
<div class="single">
    <div class="container">
        <div class="col-md-8 single-left">
            <div class="single-left1">
                <img src="assets/images/tembakau2.jpg" alt=" " class="img-responsive animated wow slideInUp" data-wow-delay=".5s" />
                <h3 class="animated wow slideInLeft" data-wow-delay=".5s" style="margin: 0em;">Sed ut perspiciatis unde omnis iste natus error sit</h3>
                <ul class="animated wow slideInUp" data-wow-delay=".5s">
                    <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="#">Michael Smith</a></li>
                    <li><span class="glyphicon glyphicon-tag" aria-hidden="true"></span><a href="#">5 Tags</a></li>
                    <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="#">5 Comments</a></li>
                </ul>
                <p class="animated wow slideInUp" data-wow-delay=".5s">But I must explain to you how all this mistaken idea of denouncing 
                    pleasure and praising pain was born and I will give you a complete 
                    account of the system, and expound the actual teachings of the great 
                    explorer of the truth, the master-builder of human happiness. 
                    No one rejects, dislikes, or avoids pleasure itself, because it is 
                    pleasure, but because those who do not know how to pursue pleasure 
                    rationally encounter consequences that are extremely painful. 
                    Nor again is there anyone who loves or pursues or desires to obtain 
                    pain of itself, because it is pain, but because occasionally 
                    circumstances occur in which toil and pain can procure him some great 
                    pleasure.</p>
            </div>
            <div class="comments">
                <h3 class="animated wow slideInUp text-left" style="background: none;" data-wow-delay=".5s">Recent Comments</h3>
                <div class="comments-grids">
                    <div class="comments-grid animated wow slideInUp" data-wow-delay=".5s">
                        <div class="comments-grid-left">
                            <img src="assets/images/3.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="comments-grid-right">
                            <h4><a href="#">Adam Smith</a></h4>
                            <ul>
                                <li>25 March 2016 <i>|</i></li>
                                <li><a href="#">Reply</a></li>
                            </ul>
                            <p>I will give you a complete 
                                account of the system, and expound the actual teachings of the great 
                                explorer of the truth, the master-builder of human happiness. 
                                No one rejects, dislikes, or avoids pleasure itself.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="leave-coment-form">
                <h3 class="animated wow slideInUp" data-wow-delay=".5s">Leave Your Comment</h3>
                <form class="animated wow slideInUp" data-wow-delay=".5s">
                    <input type="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                    <input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
                    <input type="submit" value="Submit Comment" >
                </form>
            </div>
        </div>
        <div class="col-md-4 event-right">
            <div class="event-right1">
            <div class="search1 animated wow slideInUp" data-wow-delay=".5s">
                <form action="" class="search-input1">
					<input type="text" class="form-control input_search" placeholder="Cari Berita ...">
					<button class="fa fa-magnifying-glass border-0"></button>
				</form>
            </div>
            <div class="categories animated wow slideInUp" data-wow-delay=".5s">
                <h3>Categories</h3>
                <ul>
                    <li style="background: url(assets/images/img-sp.png) no-repeat -204px -221px;"><a href="#">At vero eos et accusamus et iusto</a></li>
                    <li style="background: url(assets/images/img-sp.png) no-repeat -204px -221px;"><a href="#">Sed ut perspiciatis unde omnis iste</a></li>
                    <li style="background: url(assets/images/img-sp.png) no-repeat -204px -221px;"><a href="#">Accusantium doloremque laudantium</a></li>
                    <li style="background: url(assets/images/img-sp.png) no-repeat -204px -221px;"><a href="#">Vel illum qui dolorem eum fugiat quo</a></li>
                    <li style="background: url(assets/images/img-sp.png) no-repeat -204px -221px;"><a href="#">Quis autem vel eum iure reprehenderit</a></li>
                    <li style="background: url(assets/images/img-sp.png) no-repeat -204px -221px;"><a href="#">Neque porro quisquam est, qui dolorem</a></li>
                </ul>
            </div>
            <div class="posts animated wow slideInUp mb-1" data-wow-delay=".5s">
                <h3>Blog Posts</h3>
                <div class="posts-grids">
                    <div class="posts-grid">
                        <div class="posts-grid-left">
                            <a href="#"><img src="assets/images/10.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="posts-grid-right">
                            <h4><a href="#">Sed ut perspiciatis unde omnis iste natus</a></h4>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="posts-grid">
                        <div class="posts-grid-left">
                            <a href="#"><img src="assets/images/6.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="posts-grid-right">
                            <h4><a href="#">Neque porro quisquam est, qui dolorem</a></h4>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="posts-grid">
                        <div class="posts-grid-left">
                            <a href="#"><img src="assets/images/7.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="posts-grid-right">
                            <h4><a href="#">Nemo enim ipsam voluptatem quia</a></h4>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
                <!-- produk best seller -->
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
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //single -->

@endsection