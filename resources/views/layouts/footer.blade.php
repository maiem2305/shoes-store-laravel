<!--Footer section start-->
<footer class="mt-4">
    <div class="container">
        <div class="pt-4 text-capitalize">
            <div class="row">

                <div class="footer-widget col-lg-6 col-md-6 col-sm-12 col-12 mb-4 mb-xs-3">
                    <p>@lang('layouts.slogan')</p>
                    <div class="footer-address">
                        <ul>
                            <li>
                                <div class="address-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="address-text">
                                    <p>45 Đào Nguyên A, Thị trấn Trâu Quỳ, Gia Lâm, Hà Nội</p>
                                </div>
                            </li>
                            <li>
                                <div class="address-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="address-text">
                                    <p>anh980523@gmail.com</p>
                                </div>
                            </li>
                            <li>
                                <div class="address-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="address-text">
                                    <p>0355813xxx</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-social row">
                        <div class="col">
                        <h3 class="title">@lang('layouts.follow_on_social')</h3>
                        </div>
                        <div class="col">
                        <a href="https://www.facebook.com/miem1998/" target="_blank" class="mr-4"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/" target="_blank" class="mr-4"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/maiem2305/" target="_blank" class="mr-4"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/vanbakhanh/"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="footer-widget col-lg-3 col-md-3 col-sm-6 col-12 mb-4 mb-xs-3">
                    <h4><span>@lang('layouts.my_account')</span></h4>
                    <ul class="list-unstyled">
                        @auth
                        <li><a href="{{ route('user.edit', Auth::user()->id) }}">@lang('layouts.my_account')</a></li>
                        @endauth
                        @guest
                        <li><a href="{{ route('login') }}">@lang('layouts.my_account')</a></li>
                        @endguest
                        <li><a href="{{ route('cart.index') }}">@lang('layouts.wishlist')</a></li>
                        <li><a href="{{ route('order') }}">@lang('layouts.order_tracking')</a></li>
                        <li><a href="#">@lang('layouts.privacy_policy')</a></li>
                        <li><a href="#">@lang('layouts.shipping_info')</a></li>
                    </ul>
                </div>

                <div class="footer-widget col-lg-3 col-md-3 col-sm-6 col-12 mb-4 mb-xs-3">
                    <h4><span>@lang('layouts.about_us')</span></h4>
                    <ul class="list-unstyled">
                        <li><a href="#">@lang('layouts.about_us')</a></li>
                        <li><a href="#">@lang('layouts.shopping_guide')</a></li>
                        <li><a href="#">@lang('layouts.delivery_info')</a></li>
                        <li><a href="#">@lang('layouts.privacy_policy')</a></li>
                        <li><a href="#">@lang('layouts.our_store')</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="py-4 border-top">
            <div class="row">
                <div class="col text-right">
                    <p class="m-0">
                        <a href="#">@lang('layouts.back_to_top')</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>