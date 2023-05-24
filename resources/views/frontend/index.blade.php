@extends('frontend.master')

@section('frontendcontent')

        @include('frontend.index.slider')
        <!--End hero slider-->
        @include('frontend.index.categories')
        <!--End category slider-->

        @include('frontend.index.banner')
        <!--End banners-->

        @include('frontend.index.product')
        <!--Products Tabs-->

        @include('frontend.index.featureproduct')
        <!--End Best Sales-->

        <!-- TV Category -->

        @include('frontend.index.tvcategories')
        <!--End TV Category -->

        <!-- Tshirt Category -->
        @include('frontend.index.tshirtcategories')
        <!--End Tshirt Category -->

        <!-- Computer Category -->

        @include('frontend.index.computercategories')
        <!--End Computer Category -->

        @include('frontend.index.hotdeal')
        <!--End 4 columns-->

        <!--Vendor List -->

        @include('frontend.index.vendor')
        <div class="col-lg-3 col-md-6 col-12 col-sm-6 justify-content-center">
            <div class="vendor-wrap mb-40">
                <div class="vendor-img-action-wrap">
                    <div class="vendor-img">
                        <a href="vendor-details-1.html">
                            <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/vendor/vendor-1.png"
                                alt="" />
                        </a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                        <span class="hot">Mall</span>
                    </div>
                </div>
                <div class="vendor-content-wrap">
                    <div class="d-flex justify-content-between align-items-end mb-30">
                        <div>
                            <div class="product-category">
                                <span class="text-muted">Since 2012</span>
                            </div>
                            <h4 class="mb-5"><a href="vendor-details-1.html">Nature Food</a></h4>
                            <div class="product-rate-cover">

                                <span class="font-small total-product">380 products</span>
                            </div>
                        </div>

                    </div>
                    <div class="vendor-info mb-30">
                        <ul class="contact-infor text-muted">

                            <li><img src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-contact.svg"
                                    alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                        </ul>
                    </div>
                    <a href="vendor-details-1.html" class="btn btn-xs">Visit Store <i
                            class="fi-rs-arrow-small-right"></i></a>
                </div>
            </div>
        </div>
        <!--end vendor card-->
        <div class="col-lg-3 col-md-6 col-12 col-sm-6 justify-content-center">
            <div class="vendor-wrap mb-40">
                <div class="vendor-img-action-wrap">
                    <div class="vendor-img">
                        <a href="vendor-details-1.html">
                            <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/vendor/vendor-2.png"
                                alt="" />
                        </a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                        <span class="hot">Mall</span>
                    </div>
                </div>
                <div class="vendor-content-wrap">
                    <div class="d-flex justify-content-between align-items-end mb-30">
                        <div>
                            <div class="product-category">
                                <span class="text-muted">Since 2012</span>
                            </div>
                            <h4 class="mb-5"><a href="vendor-details-1.html">Nature Food</a></h4>
                            <div class="product-rate-cover">

                                <span class="font-small total-product">380 products</span>
                            </div>
                        </div>

                    </div>
                    <div class="vendor-info mb-30">
                        <ul class="contact-infor text-muted">

                            <li><img src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-contact.svg"
                                    alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                        </ul>
                    </div>
                    <a href="vendor-details-1.html" class="btn btn-xs">Visit Store <i
                            class="fi-rs-arrow-small-right"></i></a>
                </div>
            </div>
        </div>
        <!--end vendor card-->
        <div class="col-lg-3 col-md-6 col-12 col-sm-6 justify-content-center">
            <div class="vendor-wrap mb-40">
                <div class="vendor-img-action-wrap">
                    <div class="vendor-img">
                        <a href="vendor-details-1.html">
                            <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/vendor/vendor-3.png"
                                alt="" />
                        </a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                        <span class="hot">Mall</span>
                    </div>
                </div>
                <div class="vendor-content-wrap">
                    <div class="d-flex justify-content-between align-items-end mb-30">
                        <div>
                            <div class="product-category">
                                <span class="text-muted">Since 2012</span>
                            </div>
                            <h4 class="mb-5"><a href="vendor-details-1.html">Nature Food</a></h4>
                            <div class="product-rate-cover">

                                <span class="font-small total-product">380 products</span>
                            </div>
                        </div>

                    </div>
                    <div class="vendor-info mb-30">
                        <ul class="contact-infor text-muted">

                            <li><img src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-contact.svg"
                                    alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                        </ul>
                    </div>
                    <a href="vendor-details-1.html" class="btn btn-xs">Visit Store <i
                            class="fi-rs-arrow-small-right"></i></a>
                </div>
            </div>
        </div>
        <!--end vendor card-->
        <div class="col-lg-3 col-md-6 col-12 col-sm-6 justify-content-center">
            <div class="vendor-wrap mb-40">
                <div class="vendor-img-action-wrap">
                    <div class="vendor-img">
                        <a href="vendor-details-1.html">
                            <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/vendor/vendor-4.png"
                                alt="" />
                        </a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                        <span class="hot">Mall</span>
                    </div>
                </div>
                <div class="vendor-content-wrap">
                    <div class="d-flex justify-content-between align-items-end mb-30">
                        <div>
                            <div class="product-category">
                                <span class="text-muted">Since 2012</span>
                            </div>
                            <h4 class="mb-5"><a href="vendor-details-1.html">Nature Food</a></h4>
                            <div class="product-rate-cover">

                                <span class="font-small total-product">380 products</span>
                            </div>
                        </div>

                    </div>
                    <div class="vendor-info mb-30">
                        <ul class="contact-infor text-muted">

                            <li><img src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-contact.svg"
                                    alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                        </ul>
                    </div>
                    <a href="vendor-details-1.html" class="btn btn-xs">Visit Store <i
                            class="fi-rs-arrow-small-right"></i></a>
                </div>
            </div>
        </div>
        <!--end vendor card-->

        </div>
        </div>


        <!--End Vendor List -->


@endsection
