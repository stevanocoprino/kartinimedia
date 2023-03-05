@extends('layouts.apps')
@section('content')

<section class="section mt-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h3 class="text-b-56">@if($cat=='hot')
                    Hot News
                    @else
                    {{ $category[0]->newsTypes->news_type }}
                    @endif</h3>
            </div>
        </div>
        @foreach($category as $key=>$fs)
        @if($key==0)
        <div class="row">
            <div class="col-12">
                <a href="#" class="d-block card__thumbnail card__thumbnail-large overlay-full position-relative mb-4 mt-4"  style="background-image: url('{{ ENV("IMAGE_URL").$fs["pic"] }}');">
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
                <a href="#" class="button-main c-black">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>

@endsection