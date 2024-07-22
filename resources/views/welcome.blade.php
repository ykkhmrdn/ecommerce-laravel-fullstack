@extends('layouts.app')
@section('title', 'Welcome')
@section('content')

    <!-- start hero section -->
    <div class="hero-image">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/banner-1.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Selamat Datang di Toko Soember Baru</h5>
                        <p>Temukan berbagai produk berkualitas untuk semua kebutuhan Anda.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/banner-2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Penawaran Eksklusif</h5>
                        <p>Penawaran spesial dan diskon hanya tersedia di Toko Soember Baru.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/banner-3.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Produk Berkualitas</h5>
                        <p>Kepuasan terjamin dengan rangkaian produk pilihan kami.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- end hero section -->
    <!-- start page content -->
    <div class="container">
        <div class="content-head">
            <h2 style="text-align:center; font-weight: bold">Toko Soember Baru</h2>
            <p style="text-align: center">Selamat datang di Toko Soember Baru, tempat terbaik untuk menemukan berbagai produk berkualitas yang memenuhi semua kebutuhan Anda. Nikmati pengalaman belanja yang tak terlupakan bersama kami.</p>
        </div>
        <h2 class="header text-center">Produk Unggulan</h2>
        <!-- start products row -->
        <div class="row">
            @foreach ($products as $product)
                <!-- start single product -->
                <div class="col-md-6 col-sm-12 col-lg-4 product">
                    <a href="{{ route('shop.show', $product->slug) }}" class="custom-card">
                        <div class="card view overlay zoom">
                            <img src="{{ productImage($product->image) }}" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}<span class="float-right">Rp.
                                        {{ format($product->price) }}</span></h5>
                                {{-- <div class="product-actions" style="display: flex; align-items: center; justify-content: center">
                                <a class="cart" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fas fa-cart-plus"></i></a>
                                <a class="like" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fa fa-thumbs-up"></i></a>
                                <a class="heart" href="#"><i style="color:blue; font-size: 1.3em" class="fa fa-heart-o"></i></a>
                            </div> --}}
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single product -->
            @endforeach
        </div>
        <!-- end products row -->
        <div class="show-more">
            <a href="{{ route('shop.index') }}">
                <button class="btn custom-border-n">Tampilkan Lebih Banyak</button>
            </a>
        </div>
        <hr>
        <h2 class="header text-center">Penjualan Teratas</h2>
        <!-- start products row -->
        <div class="row">
            @foreach ($hotProducts as $product)
                <!-- start single product -->
                <div class="col-md-6 col-sm-12 col-lg-4 product">
                    <a href="{{ route('shop.show', $product->slug) }}" class="custom-card">
                        <div class="card view overlay zoom">
                            <img src="{{ productImage($product->image) }}" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}<span class="float-right">Rp.
                                        {{ format($product->price) }}</span></h5>
                                {{-- <div class="product-actions" style="display: flex; align-items: center; justify-content: center">
                                <a class="cart" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fas fa-cart-plus"></i></a>
                                <a class="like" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fa fa-thumbs-up"></i></a>
                                <a class="heart" href="#"><i style="color:blue; font-size: 1.3em" class="fa fa-heart-o"></i></a>
                            </div> --}}
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single product -->
            @endforeach
        </div>
        <!-- end products row -->
    </div>
    <!-- end page content -->

@endsection
