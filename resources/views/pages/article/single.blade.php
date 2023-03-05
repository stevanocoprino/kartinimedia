@extends('layouts.apps')
@section('content')

<section class="section pb-0 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="article">
                    <img src="{{ ENV("IMAGE_URL").$fs["pic"] }}" class="w-100 mb-3" alt="">
                    <center><small>{{ $fs->pic_title }}</small></center>
                    <h3>{{ $fs->title }}</h3>
                    <p>{!! $fs->description !!}</p>
                   
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="row">
                    @foreach($terbaru as $key=>$fs)
                    <div class="col-12">
                        <a href="{{ URL::to('/'.$fs->newsTypes->news_type.'/'.$fs->slug) }}" class="d-block card__article card__article-with-border">
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
                    @endforeach
                    
                    <div class="col-12">
                        <a href="{{ URL::to('/hot') }}" class="link mt-4">Lihat Selengkapnya ></a>
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
                <h3 class="text-b-56">Artikel Terkait</h3>
            </div>
        </div>
        <div class="row">
            @foreach($terkait as $key=>$fs)
            <div class="col-12 col-lg-4">
                <a href="{{ URL::to('/'.$fs->newsTypes->news_type.'/'.$fs->slug) }}" class="d-block card__thumbnail card__thumbnail-medium overlay-full position-relative mb-4 mt-4"  style="background-image: url('{{ ENV("IMAGE_URL").$fs["pic"] }}');">
                    <div class="h-100">
                        <span class="card__thumbnail-wrapper">
                            <span class="text-reg-12 tag c-l-blue mb-3">{{ $fs->newsTypes->news_type }}</span>
                        </span>
                    </div>
                </a>
                <a href="{{ URL::to('/'.$fs->newsTypes->news_type.'/'.$fs->slug) }}"><h3 class="text-sb-30 c-black">{{ $fs->title }}</h3></a>
            </div>
            @endforeach
            
           
        </div>
    </div>
</section>

@endsection