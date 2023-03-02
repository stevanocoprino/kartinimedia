@extends('layouts.apps')
@section('content')

<section>
    <div class="slider-home">
        @foreach($hotNews as $hn)
        <div class="slider-home-item" style="background-image: url('{{ ENV("IMAGE_URL").$hn["pic"] }}');">
            <div class="slider-home-item-bottom">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-6 text-center">
                            <span class="title-tag d-block">{{ $hn["kategori"] }}</span>
                            <h2 class="title-banner mb-5">{{ $hn["title"] }}</h2>
                            <a href="#" class="button-main">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{-- <div class="slider-home-item" style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
            <div class="slider-home-item-bottom">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-6 text-center">
                            <span class="title-tag d-block">Royal Family</span>
                            <h2 class="title-banner mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                            <a href="#" class="button-main">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-home-item" style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
            <div class="slider-home-item-bottom">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-6 text-center">
                            <span class="title-tag d-block">Fashion</span>
                            <h2 class="title-banner mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                            <a href="#" class="button-main">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>

<section class="section pb-0">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h3 class="text-b-56">Fashion</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-7">
                <a href="#" class="d-block card__thumbnail card__thumbnail-large overlay-full position-relative mb-4 mt-4" style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                            <h3 class="text-sb-30 c-white">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3>
                            <div class="position-relative mb-3"><label class="text-reg-12 c-white me-2">2023-01-22</label></div>
                            <p class="c-white">Retail is constantly evolving and technology is playing a big role in shaping the future of shopping. Virtual and augmented reality (VR and AR) are  two technologies that </p>
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-5">
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="d-block card__article card__article-with-border">
                            <div class="row">
                                <div class="col-4">
                                    <div class="card__article-thumbnail card__article-thumbnail-small position-relative overlay-full mb-4" style="background-image:url('https://via.placeholder.com/1600.png/09f/fff');"></div>
                                </div>
                                <div class="col-8">
                                    <div class="card__article-content">
                                        <span class="text-b-12 c-purple d-block">Royal Family</span>
                                        <h3 class="text-b-20 c-black">Inside the World of the Royal Family: A Glimpse into their Lives and Responsibilities</h3>
                                        <label class="text-b-12 c-black mb-2 d-block">2023-01-21</label>
                                        <p>Retail is constantly evolving and technology is playing a big role in shaping the future of shopping. </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12">
                        <a href="#" class="d-block card__article card__article-with-border">
                            <div class="row">
                                <div class="col-4">
                                    <div class="card__article-thumbnail card__article-thumbnail-small position-relative overlay-full mb-4" style="background-image:url('https://via.placeholder.com/1600.png/09f/fff');"></div>
                                </div>
                                <div class="col-8">
                                    <div class="card__article-content">
                                        <span class="text-b-12 c-purple d-block">Royal Family</span>
                                        <h3 class="text-b-20 c-black">Inside the World of the Royal Family: A Glimpse into their Lives and Responsibilities</h3>
                                        <label class="text-b-12 c-black mb-2 d-block">2023-01-21</label>
                                        <p>Retail is constantly evolving and technology is playing a big role in shaping the future of shopping. </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12">
                        <a href="#" class="d-block card__article card__article-with-border">
                            <div class="row">
                                <div class="col-4">
                                    <div class="card__article-thumbnail card__article-thumbnail-small position-relative overlay-full mb-4" style="background-image:url('https://via.placeholder.com/1600.png/09f/fff');"></div>
                                </div>
                                <div class="col-8">
                                    <div class="card__article-content">
                                        <span class="text-b-12 c-purple d-block">Royal Family</span>
                                        <h3 class="text-b-20 c-black">Inside the World of the Royal Family: A Glimpse into their Lives and Responsibilities</h3>
                                        <label class="text-b-12 c-black mb-2 d-block">2023-01-21</label>
                                        <p>Retail is constantly evolving and technology is playing a big role in shaping the future of shopping. </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12">
                        <a href="#" class="link mt-4">Lihat Selengkapnya ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section pb-0">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h3 class="text-b-56">Beauty & Health</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="d-block card__thumbnail card__thumbnail-large overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                            <h3 class="text-sb-30 c-white">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3>
                            <div class="position-relative mb-3"><label class="text-reg-12 c-white me-2">2023-01-22</label></div>
                            <p class="c-white">Retail is constantly evolving and technology is playing a big role in shaping the future of shopping. Virtual and augmented reality (VR and AR) are  two technologies that </p>
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4">
                <a href="#" class="d-block card__thumbnail card__thumbnail-medium overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                        </span>
                    </div>
                </a>
                <a href="#"><h3 class="text-sb-30 c-black">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3></a>
            </div>
            <div class="col-12 col-lg-4">
                <a href="#" class="d-block card__thumbnail card__thumbnail-medium overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                        </span>
                    </div>
                </a>
                <a href="#"><h3 class="text-sb-30 c-black">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3></a>
            </div>
            <div class="col-12 col-lg-4">
                <a href="#" class="d-block card__thumbnail card__thumbnail-medium overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                        </span>
                    </div>
                </a>
                <a href="#"><h3 class="text-sb-30 c-black">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3></a>
            </div>
            <div class="col-12 col-lg-4">
                <a href="#" class="d-block card__thumbnail card__thumbnail-medium overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                        </span>
                    </div>
                </a>
                <a href="#"><h3 class="text-sb-30 c-black">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3></a>
            </div>
            <div class="col-12 col-lg-4">
                <a href="#" class="d-block card__thumbnail card__thumbnail-medium overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                        </span>
                    </div>
                </a>
                <a href="#"><h3 class="text-sb-30 c-black">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3></a>
            </div>
            <div class="col-12 col-lg-4">
                <a href="#" class="d-block card__thumbnail card__thumbnail-medium overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                        </span>
                    </div>
                </a>
                <a href="#"><h3 class="text-sb-30 c-black">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3></a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="#" class="button-main c-black">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>

<section class="section pb-0">
    <div class="container">
        <div class="section-video">
            <div class="row mb-4">
                <div class="col-6">
                    <h3 class="text-b-56 c-white">Selera Nusantara</h3>
                </div>
                <div class="col-6 text-right">
                    <a href="#" class="c-white mt-2">Lihat Selengkapnya <img src="{{ asset('assets/images/play.svg') }}" style="width: 18px;" alt=""></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-9">
                    <a href="#" class="d-block card__thumbnail card__thumbnail-xmedium overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                        <div class="h-100">
                            <span class="card__thumbnail-wrapper">
                                <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                                <h3 class="text-sb-30 c-white">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3>
                            </span>
                        </div>
                        <img src="{{ asset('assets/images/play.svg') }}" class="play" alt="">
                    </a>
                </div>
                <div class="col-12 col-lg-3">

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-video">
                        <div class="slider-video-item">
                            <a href="#" class="d-block card__thumbnail card__thumbnail-small overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                                <div class="h-100">
                                    <span class="card__thumbnail-wrapper">
                                        <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                                    </span>
                                </div>
                                <img src="{{ asset('assets/images/play.svg') }}" class="play" alt="">
                            </a>
                            <a href="#"><h3 class="text-b-20 c-white">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3></a>
                            <label class="text-b-12 c-white mb-2 d-block">2023-01-21</label>
                        </div>
                        <div class="slider-video-item">
                            <a href="#" class="d-block card__thumbnail card__thumbnail-small overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                                <div class="h-100">
                                    <span class="card__thumbnail-wrapper">
                                        <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                                    </span>
                                </div>
                                <img src="{{ asset('assets/images/play.svg') }}" class="play" alt="">
                            </a>
                            <a href="#"><h3 class="text-b-20 c-white">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3></a>
                            <label class="text-b-12 c-white mb-2 d-block">2023-01-21</label>
                        </div>
                        <div class="slider-video-item">
                            <a href="#" class="d-block card__thumbnail card__thumbnail-small overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                                <div class="h-100">
                                    <span class="card__thumbnail-wrapper">
                                        <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                                    </span>
                                </div>
                                <img src="{{ asset('assets/images/play.svg') }}" class="play" alt="">
                            </a>
                            <a href="#"><h3 class="text-b-20 c-white">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3></a>
                            <label class="text-b-12 c-white mb-2 d-block">2023-01-21</label>
                        </div>
                        <div class="slider-video-item">
                            <a href="#" class="d-block card__thumbnail card__thumbnail-small overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                                <div class="h-100">
                                    <span class="card__thumbnail-wrapper">
                                        <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                                    </span>
                                </div>
                                <img src="{{ asset('assets/images/play.svg') }}" class="play" alt="">
                            </a>
                            <a href="#"><h3 class="text-b-20 c-white">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3></a>
                            <label class="text-b-12 c-white mb-2 d-block">2023-01-21</label>
                        </div>
                        <div class="slider-video-item">
                            <a href="#" class="d-block card__thumbnail card__thumbnail-small overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                                <div class="h-100">
                                    <span class="card__thumbnail-wrapper">
                                        <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                                    </span>
                                </div>
                                <img src="{{ asset('assets/images/play.svg') }}" class="play" alt="">
                            </a>
                            <a href="#"><h3 class="text-b-20 c-white">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3></a>
                            <label class="text-b-12 c-white mb-2 d-block">2023-01-21</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h3 class="text-b-56">Life & Inspirations</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="d-block card__thumbnail card__thumbnail-large overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                            <h3 class="text-sb-30 c-white">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3>
                            <div class="position-relative mb-3"><label class="text-reg-12 c-white me-2">2023-01-22</label></div>
                            <p class="c-white">Retail is constantly evolving and technology is playing a big role in shaping the future of shopping. Virtual and augmented reality (VR and AR) are  two technologies that </p>
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4">
                <a href="#" class="d-block card__thumbnail card__thumbnail-medium overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                        </span>
                    </div>
                </a>
                <a href="#"><h3 class="text-sb-30 c-black">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3></a>
            </div>
            <div class="col-12 col-lg-4">
                <a href="#" class="d-block card__thumbnail card__thumbnail-medium overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                        </span>
                    </div>
                </a>
                <a href="#"><h3 class="text-sb-30 c-black">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3></a>
            </div>
            <div class="col-12 col-lg-4">
                <a href="#" class="d-block card__thumbnail card__thumbnail-medium overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                        </span>
                    </div>
                </a>
                <a href="#"><h3 class="text-sb-30 c-black">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3></a>
            </div>
            <div class="col-12 col-lg-4">
                <a href="#" class="d-block card__thumbnail card__thumbnail-medium overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                        </span>
                    </div>
                </a>
                <a href="#"><h3 class="text-sb-30 c-black">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3></a>
            </div>
            <div class="col-12 col-lg-4">
                <a href="#" class="d-block card__thumbnail card__thumbnail-medium overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                        </span>
                    </div>
                </a>
                <a href="#"><h3 class="text-sb-30 c-black">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3></a>
            </div>
            <div class="col-12 col-lg-4">
                <a href="#" class="d-block card__thumbnail card__thumbnail-medium overlay-full position-relative mb-4 mt-4"  style="background-image: url('https://via.placeholder.com/1600.png/09f/fff');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">Sepak Bola</span>
                        </span>
                    </div>
                </a>
                <a href="#"><h3 class="text-sb-30 c-black">Dewa United Menang 2 Kali Beruntung Berkat Strategi Pergantian Pemain</h3></a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="#" class="button-main c-black">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>

@endsection