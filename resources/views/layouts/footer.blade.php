<footer class="footer">
    <div class="footer__top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-8">
                    <div class="footer__item">
                        <h5>Others</h5>
                        <ul>
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="#">Kontak Kami</a></li>
                            <li><a href="#">Info Iklan</a></li>
                        </ul>
                    </div>
                    <div class="footer__item">
                        <h5>Others</h5>
                        <ul>
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="#">Kontak Kami</a></li>
                            <li><a href="#">Info Iklan</a></li>
                        </ul>
                    </div>
                    <div class="footer__item">
                        <h5>Others</h5>
                        <ul>
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="#">Kontak Kami</a></li>
                            <li><a href="#">Info Iklan</a></li>
                        </ul>
                    </div>
                    <div class="footer__item">
                        <h5>Others</h5>
                        <ul>
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="#">Kontak Kami</a></li>
                            <li><a href="#">Info Iklan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="footer__action">
                        <span>
                            <img src="{{ asset('assets/images/logo.svg') }}" alt="">
                            <h4>Subscribe to our newsletter</h4>
                            <form id="subscribe" class="row g-3">
                                <div class="col-auto mb-2">
                                    <input type="text" name="email" class="form-control" id="emailAddress" placeholder="Your email address...">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="button-primary button-primary-br-10 mb-3">Submit</button>
                                </div>
                            </form>
                            <p class="text-success emailsuccess" style="display:none;font-size:14px">Email berhasil terdaftar</p>
                            
                            <ul>
                                <li><a href="#" target="_blank"><img src="{{ asset('assets/images/003-instagram.svg') }}" alt=""></a></li>
                                <li><a href="#" target="_blank"><img src="{{ asset('assets/images/006-facebook.svg') }}" alt=""></a></li>
                                <li><a href="#" target="_blank"><img src="{{ asset('assets/images/005-twitter.svg') }}" alt=""></a></li>
                                <li><a href="#" target="_blank"><img src="{{ asset('assets/images/004-youtube.svg') }}" alt=""></a></li>
                            </ul>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <ul>
                        <li><a href="{{ URL::to('/privacy-policy') }}">Kebijakan Privasi</a></li>
                        {{-- <li><a href="#">Kebijakan Cookies</a></li>
                        <li><a href="#">Term of Use</a></li> 
                        <li><a href="#">Sitemap</a></li> --}}
                    </ul>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <p>Copyright kartinimedia.id ©<?php echo date("Y"); ?> | All Right Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>