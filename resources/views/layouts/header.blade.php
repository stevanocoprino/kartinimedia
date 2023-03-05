<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <a href="{{ URL::to('/') }}" class="header-logo">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="col-12 col-lg-6">
                <ul class="navbars">
                    <a href="javascript:;" id="closeNavbar">
                        <img src="{{ asset('assets/images/close-black.svg') }}" alt="">
                    </a>
                    @foreach(Helper::header_menu() as $nt )
                    <li><a href="{{ URL::to('/'.$nt["slug"]) }}">{{ $nt["news_type"] }}</a></li>
                    @endforeach
                    <li>
                        <a href="javascript:;">Video</a>
                        <ul class="navbars-sub">
                            @foreach(Helper::video_menu() as $vm )
                            <li><a href="{{ URL::to('/video/'.$vm->slug) }}">{{ $vm->vid_type }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-3">
                <div class="mb-3 header__search">
                    <input type="text" class="form-control" placeholder="Cari... " aria-label="Cari... " aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="search"><img src="{{ asset('assets/images/search.svg') }}" alt=""></button>
                    <a href="javascript:;" id="searchToggle">
                        <img src="{{ asset('assets/images/search.svg') }}" class="searchToggle" alt="">
                        <img src="{{ asset('assets/images/close-white.svg') }}" class="closeToggle" style="display: none; width: 12px;" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>