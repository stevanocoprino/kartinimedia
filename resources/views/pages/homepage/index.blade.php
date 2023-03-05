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
        
    </div>
</section>



@if(!$news->isEmpty()) 
<section class="section pb-0">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h3 class="text-b-56">News</h3>
            </div>
        </div>
        <div class="row">
            @foreach($news as $key=>$fs)
            @if($key==0)
            <div class="col-12 col-lg-7">
                <a href="{{ URL::to('/'.$fs->newsTypes->slug.'/'.$fs->slug) }}" class="d-block card__thumbnail card__thumbnail-large overlay-full position-relative mb-4 mt-4" style="background-image: url('{{ ENV("IMAGE_URL").$fs["pic"] }}');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">{{ $fs->newsTypes->news_type }}</span>
                            <h3 class="text-sb-30 c-white">{{ $fs->title }}</h3>
                            <div class="position-relative mb-3"><label class="text-reg-12 c-white me-2">{{ date('Y-m-d', strtotime($fs->publish_on)) }}</label></div>
                            <p class="c-white">{{ substr(strip_tags($fs->short_desc),0,100) }}</p>
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-5">
                <div class="row">
            @else
            <div class="col-12">
                <a href="#" class="d-block card__article card__article-with-border">
                    <div class="row">
                        <div class="col-4">
                            <div class="card__article-thumbnail card__article-thumbnail-small position-relative overlay-full mb-4" style="background-image:url('{{ ENV("IMAGE_URL").$fs["pic"] }}');"></div>
                        </div>
                        <div class="col-8">
                            <div class="card__article-content">
                                <span class="text-b-12 c-purple d-block">{{ $fs->newsTypes->news_type }}</span>
                                <h3 class="text-b-20 c-black">{{ $fs->title }}</h3>
                                <label class="text-b-12 c-black mb-2 d-block">{{ date('Y-m-d', strtotime($fs->publish_on)) }}</label>
                                <p>{{ substr(strip_tags($fs->short_desc),0,100) }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @endforeach
            
                    <div class="col-12">
                        <a href="{{ URL::to('/hot') }}" class="link mt-4">Lihat Selengkapnya ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if(!$ohmama->isEmpty()) 
<section class="section pb-0">
    <div class="container">
        <div class="section-video">
            <div class="row mb-4">
                <div class="col-6">
                    <h3 class="text-b-56 c-white">Oh Mama Oh Papa</h3>
                </div>
                <div class="col-6 text-right">
                    <a href="{{ URL::to('/video/'.$ohmama[0]->vidTypes->slug) }}" class="c-white mt-2">Lihat Selengkapnya <img src="{{ asset('assets/images/play.svg') }}" style="width: 18px;" alt=""></a>
                </div>
            </div>
            @foreach($ohmama as $key=>$fs)
            @if($key==0)
            <div class="row">
                <div class="col-12 col-lg-9">

                    <a href="{{ URL::to('/'.$fs->vidTypes->slug.'/'.$fs->slug) }}" class="d-block card__thumbnail card__thumbnail-xmedium overlay-full position-relative mb-4 mt-4"  style="background-image: url('{{ ENV("IMAGE_URL").$fs["pic"] }}');">
                        <div class="h-100">
                            <span class="card__thumbnail-wrapper">
                                <span class="text-reg-12 tag c-l-blue mb-3">{{ $fs->vidTypes->vid_type }}</span>
                                <h3 class="text-sb-30 c-white">{{ $fs->title }}</h3>
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
            @else
            <div class="slider-video-item">
                <a href="{{ URL::to('/'.$fs->vidTypes->slug.'/'.$fs->slug) }}" class="d-block card__thumbnail card__thumbnail-small overlay-full position-relative mb-4 mt-4"  style="background-image: url('{{ ENV("IMAGE_URL").$fs["pic"] }}');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">{{ $fs->vidTypes->vid_type }}</span>
                        </span>
                    </div>
                    <img src="{{ asset('assets/images/play.svg') }}" class="play" alt="">
                </a>
                <a href="{{ URL::to('/'.$fs->vidTypes->slug.'/'.$fs->slug) }}"><h3 class="text-b-20 c-white">{{ $fs->title }}</h3></a>
                <label class="text-b-12 c-white mb-2 d-block">{{ date('Y-m-d', strtotime($fs->publish_on)) }}</label>
            </div>
            @endif
            @endforeach
            
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if(!$royal->isEmpty()) 
<section class="section pb-0">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h3 class="text-b-56">Royal Family</h3>
            </div>
        </div>
        @foreach($royal as $key=>$fs)
        @if($key==0)
        <div class="row">
            <div class="col-12">
                <a href="{{ URL::to('/'.$fs->newsTypes->slug.'/'.$fs->slug) }}" class="d-block card__thumbnail card__thumbnail-large overlay-full position-relative mb-4 mt-4"  style="background-image: url('{{ ENV("IMAGE_URL").$fs["pic"] }}');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">{{ $fs->newsTypes->news_type }}</span>
                            <h3 class="text-sb-30 c-white">{{ $fs->title }}</h3>
                            <div class="position-relative mb-3"><label class="text-reg-12 c-white me-2">{{ date('Y-m-d', strtotime($fs->publish_on)) }}</label></div>
                            <p class="c-white">{{ substr(strip_tags($fs->short_desc),0,100) }}</p>
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
        @else
        <div class="col-12 col-lg-4">
            <a href="#" class="d-block card__thumbnail card__thumbnail-medium overlay-full position-relative mb-4 mt-4"  style="background-image: url('{{ ENV("IMAGE_URL").$fs["pic"] }}');">
                <div class="h-100">
                    <span class="card__thumbnail-wrapper">
                        <span class="text-reg-12 tag c-l-blue mb-3">{{ $fs->newsTypes->news_type }}</span>
                    </span>
                </div>
            </a>
            <a href="#"><h3 class="text-sb-30 c-black">{{ $fs->title }}</h3></a>
        </div>
        @endif
        @endforeach
        
            
            
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="{{ URL::to('/'.$fs->newsTypes->slug) }}" class="button-main c-black">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
@endif

@if(!$fashion->isEmpty()) 
<section class="section pb-0">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h3 class="text-b-56">Fashion</h3>
            </div>
        </div>
        <div class="row">
            @foreach($fashion as $key=>$fs)
            @if($key==0)
            <div class="col-12 col-lg-7">
                <a href="{{ URL::to('/'.$fs->newsTypes->slug.'/'.$fs->slug) }}" class="d-block card__thumbnail card__thumbnail-large overlay-full position-relative mb-4 mt-4" style="background-image: url('{{ ENV("IMAGE_URL").$fs["pic"] }}');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">{{ $fs->newsTypes->news_type }}</span>
                            <h3 class="text-sb-30 c-white">{{ $fs->title }}</h3>
                            <div class="position-relative mb-3"><label class="text-reg-12 c-white me-2">{{ date('Y-m-d', strtotime($fs->publish_on)) }}</label></div>
                            <p class="c-white">{{ substr(strip_tags($fs->short_desc),0,100) }}</p>
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-5">
                <div class="row">
            @else
            <div class="col-12">
                <a href="#" class="d-block card__article card__article-with-border">
                    <div class="row">
                        <div class="col-4">
                            <div class="card__article-thumbnail card__article-thumbnail-small position-relative overlay-full mb-4" style="background-image:url('{{ ENV("IMAGE_URL").$fs["pic"] }}');"></div>
                        </div>
                        <div class="col-8">
                            <div class="card__article-content">
                                <span class="text-b-12 c-purple d-block">{{ $fs->newsTypes->news_type }}</span>
                                <h3 class="text-b-20 c-black">{{ $fs->title }}</h3>
                                <label class="text-b-12 c-black mb-2 d-block">{{ date('Y-m-d', strtotime($fs->publish_on)) }}</label>
                                <p>{{ substr(strip_tags($fs->short_desc),0,100) }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @endforeach
            
                    <div class="col-12">
                        <a href="{{ URL::to('/'.$fs->newsTypes->news_type) }}" class="link mt-4">Lihat Selengkapnya ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif


@if(!$kepo->isEmpty()) 
<section class="section pb-0">
    <div class="container">
        <div class="section-video">
            <div class="row mb-4">
                <div class="col-6">
                    <h3 class="text-b-56 c-white">Kepo-in Dulu</h3>
                </div>
                <div class="col-6 text-right">
                    <a href="{{ URL::to('/video/'.$kepo[0]->vidTypes->slug) }}" class="c-white mt-2">Lihat Selengkapnya <img src="{{ asset('assets/images/play.svg') }}" style="width: 18px;" alt=""></a>
                </div>
            </div>
            @foreach($kepo as $key=>$fs)
            @if($key==0)
            <div class="row">
                <div class="col-12 col-lg-9">

                    <a href="{{ URL::to('/'.$fs->vidTypes->slug.'/'.$fs->slug) }}" class="d-block card__thumbnail card__thumbnail-xmedium overlay-full position-relative mb-4 mt-4"  style="background-image: url('{{ ENV("IMAGE_URL").$fs["pic"] }}');">
                        <div class="h-100">
                            <span class="card__thumbnail-wrapper">
                                <span class="text-reg-12 tag c-l-blue mb-3">{{ $fs->vidTypes->vid_type }}</span>
                                <h3 class="text-sb-30 c-white">{{ $fs->title }}</h3>
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
            @else
            <div class="slider-video-item">
                <a href="{{ URL::to('/'.$fs->vidTypes->slug.'/'.$fs->slug) }}" class="d-block card__thumbnail card__thumbnail-small overlay-full position-relative mb-4 mt-4"  style="background-image: url('{{ ENV("IMAGE_URL").$fs["pic"] }}');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">{{ $fs->vidTypes->vid_type }}</span>
                        </span>
                    </div>
                    <img src="{{ asset('assets/images/play.svg') }}" class="play" alt="">
                </a>
                <a href="{{ URL::to('/'.$fs->vidTypes->slug.'/'.$fs->slug) }}"><h3 class="text-b-20 c-white">{{ $fs->title }}</h3></a>
                <label class="text-b-12 c-white mb-2 d-block">{{ date('Y-m-d', strtotime($fs->publish_on)) }}</label>
            </div>
            @endif
            @endforeach
            
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if(!$beauty->isEmpty()) 
<section class="section pb-0">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h3 class="text-b-56">Beauty & Health</h3>
            </div>
        </div>
        <div class="row">
            @foreach($beauty as $key=>$fs)
            @if($key==0)
            <div class="col-12 col-lg-7">
                <a href="{{ URL::to('/'.$fs->newsTypes->slug.'/'.$fs->slug) }}" class="d-block card__thumbnail card__thumbnail-large overlay-full position-relative mb-4 mt-4" style="background-image: url('{{ ENV("IMAGE_URL").$fs["pic"] }}');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">{{ $fs->newsTypes->news_type }}</span>
                            <h3 class="text-sb-30 c-white">{{ $fs->title }}</h3>
                            <div class="position-relative mb-3"><label class="text-reg-12 c-white me-2">{{ date('Y-m-d', strtotime($fs->publish_on)) }}</label></div>
                            <p class="c-white">{{ substr(strip_tags($fs->short_desc),0,100) }}</p>
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-5">
                <div class="row">
            @else
            <div class="col-12">
                <a href="#" class="d-block card__article card__article-with-border">
                    <div class="row">
                        <div class="col-4">
                            <div class="card__article-thumbnail card__article-thumbnail-small position-relative overlay-full mb-4" style="background-image:url('{{ ENV("IMAGE_URL").$fs["pic"] }}');"></div>
                        </div>
                        <div class="col-8">
                            <div class="card__article-content">
                                <span class="text-b-12 c-purple d-block">{{ $fs->newsTypes->news_type }}</span>
                                <h3 class="text-b-20 c-black">{{ $fs->title }}</h3>
                                <label class="text-b-12 c-black mb-2 d-block">{{ date('Y-m-d', strtotime($fs->publish_on)) }}</label>
                                <p>{{ substr(strip_tags($fs->short_desc),0,100) }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @endforeach
            
                    <div class="col-12">
                        <a href="{{ URL::to('/'.$fs->newsTypes->news_type) }}" class="link mt-4">Lihat Selengkapnya ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif


@if(!$life->isEmpty()) 
<section class="section pb-0">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h3 class="text-b-56">Life & Inspiration</h3>
            </div>
        </div>
        @foreach($life as $key=>$fs)
        @if($key==0)
        <div class="row">
            <div class="col-12">
                <a href="{{ URL::to('/'.$fs->newsTypes->slug.'/'.$fs->slug) }}" class="d-block card__thumbnail card__thumbnail-large overlay-full position-relative mb-4 mt-4"  style="background-image: url('{{ ENV("IMAGE_URL").$fs["pic"] }}');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">{{ $fs->newsTypes->news_type }}</span>
                            <h3 class="text-sb-30 c-white">{{ $fs->title }}</h3>
                            <div class="position-relative mb-3"><label class="text-reg-12 c-white me-2">{{ date('Y-m-d', strtotime($fs->publish_on)) }}</label></div>
                            <p class="c-white">{{ substr(strip_tags($fs->short_desc),0,100) }}</p>
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
        @else
        <div class="col-12 col-lg-4">
            <a href="#" class="d-block card__thumbnail card__thumbnail-medium overlay-full position-relative mb-4 mt-4"  style="background-image: url('{{ ENV("IMAGE_URL").$fs["pic"] }}');">
                <div class="h-100">
                    <span class="card__thumbnail-wrapper">
                        <span class="text-reg-12 tag c-l-blue mb-3">{{ $fs->newsTypes->news_type }}</span>
                    </span>
                </div>
            </a>
            <a href="#"><h3 class="text-sb-30 c-black">{{ $fs->title }}</h3></a>
        </div>
        @endif
        @endforeach
        
            
            
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="{{ URL::to('/'.$fs->newsTypes->slug) }}" class="button-main c-black">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
@endif


@if(!$selera->isEmpty()) 
<section class="section pb-0">
    <div class="container">
        <div class="section-video">
            <div class="row mb-4">
                <div class="col-6">
                    <h3 class="text-b-56 c-white">Selera Nusantara</h3>
                </div>
                <div class="col-6 text-right">
                    <a href="{{ URL::to('/video/'.$selera[0]->vidTypes->slug) }}" class="c-white mt-2">Lihat Selengkapnya <img src="{{ asset('assets/images/play.svg') }}" style="width: 18px;" alt=""></a>
                </div>
            </div>
            @foreach($selera as $key=>$fs)
            @if($key==0)
            <div class="row">
                <div class="col-12 col-lg-9">

                    <a href="{{ URL::to('/'.$fs->vidTypes->slug.'/'.$fs->slug) }}" class="d-block card__thumbnail card__thumbnail-xmedium overlay-full position-relative mb-4 mt-4"  style="background-image: url('{{ ENV("IMAGE_URL").$fs["pic"] }}');">
                        <div class="h-100">
                            <span class="card__thumbnail-wrapper">
                                <span class="text-reg-12 tag c-l-blue mb-3">{{ $fs->vidTypes->vid_type }}</span>
                                <h3 class="text-sb-30 c-white">{{ $fs->title }}</h3>
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
            @else
            <div class="slider-video-item">
                <a href="{{ URL::to('/'.$fs->vidTypes->slug.'/'.$fs->slug) }}" class="d-block card__thumbnail card__thumbnail-small overlay-full position-relative mb-4 mt-4"  style="background-image: url('{{ ENV("IMAGE_URL").$fs["pic"] }}');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">{{ $fs->vidTypes->vid_type }}</span>
                        </span>
                    </div>
                    <img src="{{ asset('assets/images/play.svg') }}" class="play" alt="">
                </a>
                <a href="{{ URL::to('/'.$fs->vidTypes->slug.'/'.$fs->slug) }}"><h3 class="text-b-20 c-white">{{ $fs->title }}</h3></a>
                <label class="text-b-12 c-white mb-2 d-block">{{ date('Y-m-d', strtotime($fs->publish_on)) }}</label>
            </div>
            @endif
            @endforeach
            
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif


@if(!$food->isEmpty()) 
<section class="section pb-0">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h3 class="text-b-56">Food</h3>
            </div>
        </div>
        @foreach($food as $key=>$fs)
        @if($key==0)
        <div class="row">
            <div class="col-12">
                <a href="{{ URL::to('/'.$fs->newsTypes->slug.'/'.$fs->slug) }}" class="d-block card__thumbnail card__thumbnail-large overlay-full position-relative mb-4 mt-4"  style="background-image: url('{{ ENV("IMAGE_URL").$fs["pic"] }}');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">{{ $fs->newsTypes->news_type }}</span>
                            <h3 class="text-sb-30 c-white">{{ $fs->title }}</h3>
                            <div class="position-relative mb-3"><label class="text-reg-12 c-white me-2">{{ date('Y-m-d', strtotime($fs->publish_on)) }}</label></div>
                            <p class="c-white">{{ substr(strip_tags($fs->short_desc),0,100) }}</p>
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
        @else
        <div class="col-12 col-lg-4">
            <a href="#" class="d-block card__thumbnail card__thumbnail-medium overlay-full position-relative mb-4 mt-4"  style="background-image: url('{{ ENV("IMAGE_URL").$fs["pic"] }}');">
                <div class="h-100">
                    <span class="card__thumbnail-wrapper">
                        <span class="text-reg-12 tag c-l-blue mb-3">{{ $fs->newsTypes->news_type }}</span>
                    </span>
                </div>
            </a>
            <a href="#"><h3 class="text-sb-30 c-black">{{ $fs->title }}</h3></a>
        </div>
        @endif
        @endforeach
        
            
            
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="{{ URL::to('/'.$fs->newsTypes->slug) }}" class="button-main c-black">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
@endif

@endsection