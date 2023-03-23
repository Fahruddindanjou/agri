@extends('templates.general')

@section('content')
    <!-- banner -->
    <div class="banner1 mb-1"
        style="background-image:url('https://images.unsplash.com/photo-1560693225-b8507d6f3aa9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
        <div class="py-lg-5">
            <div class="container pb-sm-4 pt-4">
                <div class="banner-main" style="padding-top: 15%; margin-top: 20px;">
                    <h3 class="fw-bold" style="color: white;">Struktur Organisasi</h3>
                    <ul class="breadcrumb" style="padding-top: 5px;">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="tentang_kami.php">Tentang Kami</a>
                        </li>
                        <li>
                            Struktur Organisasi
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- banner -->

    <!-- content -->
    <div class="container">
        <div class="mb-1" style="align-items: center;">
            <h2 style="margin-bottom: 6px;">Struktur Organisasi</h2>
            <h4 class="text-green">Kamis, 17 Maret 2023</h4>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="treeDiv">
                    <div class="tree">
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="sotk-title"> Kepala</span>
                                    <i style="margin:0 auto;margin-top:5px;border:1px solid #CCCCCC;background:url({{asset('images/man.jpg')}})
                                    no-repeat center center;background-size:100% 100%;width:70px;height:80px;display:block;border-radius:5px;"></i>
                                    <div class="sotk-nip">12352223</div>
                                    <div class="sotk-nama">John Doe</div>
                                </a>
                                <ul>
                                    <li class="up-31"><a><span class="sotk-title">Sekretariat</span><i
                                                style="margin:0 auto;margin-top:5px;border:1px solid #CCCCCC;background:url({{asset('images/man.jpg')}}) no-repeat center center;background-size:100% 100%;width:70px;height:80px;display:block;border-radius:5px;"></i>
                                            <div class="sotk-nip">1246245243</div>
                                            <div class="sotk-nama">Joe</div>
                                        </a>
                                        <ul>
                                            <li>
                                                <a><span class="sotk-title">Subbagian Umum dan Kepegawaian</span><i
                                                        style="margin:0 auto;margin-top:5px;border:1px solid #CCCCCC;background:url({{asset('images/women.jpg')}}) no-repeat center center;background-size:100% 100%;width:70px;height:80px;display:block;border-radius:5px;"></i>
                                                    <div class="sotk-nip">123524624</div>
                                                    <div class="sotk-nama">Mrs. Jay</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="up-32"><a><span class="sotk-title">Bidang Ketahanan Pangan</span><i
                                                style="margin:0 auto;margin-top:5px;border:1px solid #CCCCCC;background:url({{asset('images/women2.jpg')}})
                                                no-repeat center center;background-size:100% 100%;width:70px;height:80px;display:block;border-radius:5px;"></i>
                                            <div class="sotk-nip">1234234235</div>
                                            <div class="sotk-nama">Mrs. Eci</div>
                                        </a>
                                        <ul></ul>
                                    </li>
                                    <li class="up-32"><a><span class="sotk-title">Bidang Tanaman Pangan Dan
                                                Hortikultura</span><i
                                                style="margin:0 auto;margin-top:5px;border:1px solid #CCCCCC;background:url({{asset('images/man.jpg')}})
                                                no-repeat center center;background-size:100% 100%;width:70px;height:80px;display:block;border-radius:5px;"></i>
                                            <div class="sotk-nip">1234232</div>
                                            <div class="sotk-nama">Sulaiman</div>
                                        </a>
                                        <ul></ul>
                                    </li>
                                    <li class="up-32"><a><span class="sotk-title">Bidang Perkebunan</span><i
                                                style="margin:0 auto;margin-top:5px;border:1px solid #CCCCCC;background:url({{asset('images/man1.jpg')}})
                                                    no-repeat center center;background-size:100% 100%;width:70px;height:80px;display:block;border-radius:5px;"></i>
                                            <div class="sotk-nip">1134135244</div>
                                            <div class="sotk-nama">Gunadi</div>
                                        </a>
                                        <ul></ul>
                                    </li>
                                    <li class="up-32"><a><span class="sotk-title">Bidang Peternakan Dan Kesehatan
                                                Hewan</span><i
                                                style="margin:0 auto;margin-top:5px;border:1px solid #CCCCCC;background:url({{asset('images/man.jpg')}})
                                                no-repeat center center;background-size:100% 100%;width:70px;height:80px;display:block;border-radius:5px;"></i>
                                            <div class="sotk-nip">1123123123</div>
                                            <div class="sotk-nama">Joe</div>
                                        </a>
                                        <ul></ul>
                                    </li>
                                    <li class="up-32">
                                        <a><span class="sotk-title">Bidang Sarana Dan Prasarana</span><i style="margin:0 auto;margin-top:5px;border:1px solid #CCCCCC;background:url({{asset('images/women.jpg')}}) no-repeat center center;background-size:100% 100%;width:70px;height:80px;display:block;border-radius:5px;"></i>
                                            <div class="sotk-nip">1123124124134</div>
                                            <div class="sotk-nama">Apri</div>
                                        </a>
                                        <ul></ul>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->
@endsection
