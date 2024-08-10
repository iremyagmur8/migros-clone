@extends('layouts.app', ['displayNone' => 'd-none d-md-block' ])
@section('image','')
@section('title','Continental Wholesale')
@section('desc','')
@section('content')
    <div class="mobile-header mobile-only">
        <div class="breadcrumb mobile-only">
            <a class="text-white" href="/">
                <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-left"
                     class="svg-inline--fa fa-arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor"
                          d="M447.1 256c0 13.25-10.76 24.01-24.01 24.01H83.9l132.7 126.6c9.625 9.156 9.969 24.41 .8125 33.94c-9.156 9.594-24.34 9.938-33.94 .8125l-176-168C2.695 268.9 .0078 262.6 .0078 256S2.695 243.2 7.445 238.6l176-168C193 61.51 208.2 61.85 217.4 71.45c9.156 9.5 8.812 24.75-.8125 33.94l-132.7 126.6h340.1C437.2 232 447.1 242.8 447.1 256z"></path>
                </svg>
            </a>
            <div class="content"><a href="/"><h3>Kampanyalar</h3></a>
            </div>
        </div>
    </div>
    @include('inc.breadcrumb', ['padding'=>' pt-10 pt-md-0'])
    <section class="position-relative overflow-hidden">
        <div class="container position-relative py-0 py-lg-5 z-index-1">
            <div class="row">
                <div class="storyly__story-groups d-flex">
                    <div class="group storyly__story-group-container d-flex">
                        <div class="storyly__story-group-cover" style="">
                            <img src="https://db62cod6cnasq.cloudfront.net/user-media/1098/sg143048/3351842779.webp">
                            <div class="pin-icon">
                                <span class="icon"></span>
                            </div>
                        </div>
                        <span class="storyly__story-group-title">Sihirli Numara!</span>
                    </div>
                    <div class="group storyly__story-group-container d-flex">
                        <div class="storyly__story-group-cover" style="">
                            <img src="https://db62cod6cnasq.cloudfront.net/user-media/1098/sg43583/3577417853.webp">
                            <div class="pin-icon">
                                <span class="icon"></span>
                            </div>
                        </div>
                        <span class="storyly__story-group-title">Migroskop</span>
                    </div>
                    <div class="group storyly__story-group-container d-flex">
                        <div class="storyly__story-group-cover" style="">
                            <img src="https://db62cod6cnasq.cloudfront.net/user-media/1098/sg43584/3628404955.webp">
                            <div class="pin-icon">
                                <span class="icon"></span>
                            </div>
                        </div>
                        <span class="storyly__story-group-title">Bitiriyoruz</span>
                    </div>
                    <div class="group storyly__story-group-container d-flex">
                        <div class="storyly__story-group-cover" style="">
                            <img src="https://db62cod6cnasq.cloudfront.net/user-media/1098/sg43586/3696365764.webp">
                            <div class="pin-icon">
                                <span class="icon"></span>
                            </div>
                        </div>
                        <span class="storyly__story-group-title">Money İndirimli</span>
                    </div>
                    <div class="group storyly__story-group-container d-flex">
                        <div class="storyly__story-group-cover" style="">
                            <img src="https://db62cod6cnasq.cloudfront.net/user-media/1098/sg43587/3481341952.webp">
                            <div class="pin-icon">
                                <span class="icon"></span>
                            </div>
                        </div>
                        <span class="storyly__story-group-title">Çoklu İndirim</span>
                    </div>
                    <div class="group storyly__story-group-container d-flex">
                        <div class="storyly__story-group-cover" style="">
                            <img src="https://db62cod6cnasq.cloudfront.net/user-media/1098/sg43588/3741323399.webp">
                            <div class="pin-icon">
                                <span class="icon"></span>
                            </div>
                        </div>
                        <span class="storyly__story-group-title">Aldım Bitti</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="position-relative overflow-hidden">
        <div class="container position-relative pb-3 pb-lg-5 z-index-1">
            <div class="row campaigns-wrapper overflow-hidden">
                <div class="col-md-12">
                    <div
                        class="swiper swiper-campaigns swiper-banner swiper-product-banner overflow-hidden position-relative">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card-campaigns overflow-hidden product-content card-product">
                                    <div class="card-product-header d-block ">
                                        <img
                                            src="https://magaza-iphone.migros.com.tr/box/kampanyalar/hedef.png"
                                            alt="Product">
                                    </div>
                                    <div class="info px-1">
                                        <div class="headline subtitle-2 fw-bold"> Kampanyanı kendin yap, kendin
                                            kazan!
                                        </div>

                                        <a href=""
                                           class="campaign-action-button create-campaign mat-caption ng-star-inserted ">
                                            <svg role="img" aria-hidden="true" focusable="false" data-prefix="far"
                                                 data-icon="plus" class="svg-inline--fa fa-plus me-2"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor"
                                                      d="M432 256C432 269.3 421.3 280 408 280h-160v160c0 13.25-10.75 24.01-24 24.01S200 453.3 200 440v-160h-160c-13.25 0-24-10.74-24-23.99C16 242.8 26.75 232 40 232h160v-160c0-13.25 10.75-23.99 24-23.99S248 58.75 248 72v160h160C421.3 232 432 242.8 432 256z"></path>
                                            </svg>
                                            <span class="fs-9 fw-bold"> Kampanyanı Oluştur</span>
                                        </a>
                                        <a href=""
                                           class="campaign-action-button create-campaign campaign-detail mat-caption">
                                            <span class="fs-9 fw-bold">Kampanya Detayı</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-campaigns overflow-hidden product-content card-product">
                                    <div class="card-product-header d-block ">
                                        <img
                                            src="https://magaza-iphone.migros.com.tr/box/kategoriler/9024.png"
                                            alt="Product">
                                        <div class="badge ng-star-inserted"><span class="overline text-color-white"> 250 MONEY </span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info px-1">
                                        <div class="headline subtitle-2 fw-bold"> 2500 TL harca 250 MONEY=250TL
                                            kazan!
                                        </div>
                                        <div
                                            class="target-date mat-caption-normal text-color-error my-1 fw-bold">
                                            8-15 Ağustos
                                        </div>
                                        <a href=""
                                           class="campaign-action-button create-campaign mat-caption ng-star-inserted ">
                                            <svg role="img" aria-hidden="true" focusable="false" data-prefix="far"
                                                 data-icon="plus" class="svg-inline--fa fa-plus me-2"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor"
                                                      d="M432 256C432 269.3 421.3 280 408 280h-160v160c0 13.25-10.75 24.01-24 24.01S200 453.3 200 440v-160h-160c-13.25 0-24-10.74-24-23.99C16 242.8 26.75 232 40 232h160v-160c0-13.25 10.75-23.99 24-23.99S248 58.75 248 72v160h160C421.3 232 432 242.8 432 256z"></path>
                                            </svg>
                                            <span class="fs-9 fw-bold"> Money Kartıma Ekle</span>
                                        </a>
                                        <a href=""
                                           class="campaign-action-button create-campaign campaign-detail mat-caption">
                                            <span class="fs-9 fw-bold">Kampanya Detayı</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-campaigns overflow-hidden product-content card-product">
                                    <div class="card-product-header d-block ">
                                        <img
                                            src="https://magaza-iphone.migros.com.tr/box/kampanyalar/hedef.png"
                                            alt="Product">
                                    </div>
                                    <div class="info px-1">
                                        <div class="headline subtitle-2 fw-bold"> Kampanyanı kendin yap, kendin
                                            kazan!
                                        </div>

                                        <a href=""
                                           class="campaign-action-button create-campaign mat-caption ng-star-inserted ">
                                            <svg role="img" aria-hidden="true" focusable="false" data-prefix="far"
                                                 data-icon="plus" class="svg-inline--fa fa-plus me-2"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor"
                                                      d="M432 256C432 269.3 421.3 280 408 280h-160v160c0 13.25-10.75 24.01-24 24.01S200 453.3 200 440v-160h-160c-13.25 0-24-10.74-24-23.99C16 242.8 26.75 232 40 232h160v-160c0-13.25 10.75-23.99 24-23.99S248 58.75 248 72v160h160C421.3 232 432 242.8 432 256z"></path>
                                            </svg>
                                            <span class="fs-9 fw-bold"> Money Kartıma Ekle</span>
                                        </a>
                                        <a href=""
                                           class="campaign-action-button create-campaign campaign-detail mat-caption">
                                            <span class="fs-9 fw-bold">Kampanya Detayı</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-campaigns overflow-hidden product-content card-product">
                                    <div class="card-product-header d-block ">
                                        <img
                                            src="https://magaza-iphone.migros.com.tr/box/kategoriler/9024.png"
                                            alt="Product">
                                        <div class="badge ng-star-inserted"><span class="overline text-color-white"> 250 MONEY </span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info px-1">
                                        <div class="headline subtitle-2 fw-bold"> 2500 TL harca 250 MONEY=250TL
                                            kazan!
                                        </div>
                                        <div
                                            class="target-date mat-caption-normal text-color-error my-1 fw-bold">
                                            8-15 Ağustos
                                        </div>
                                        <a href=""
                                           class="campaign-action-button create-campaign mat-caption ng-star-inserted ">
                                            <svg role="img" aria-hidden="true" focusable="false" data-prefix="far"
                                                 data-icon="plus" class="svg-inline--fa fa-plus me-2"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor"
                                                      d="M432 256C432 269.3 421.3 280 408 280h-160v160c0 13.25-10.75 24.01-24 24.01S200 453.3 200 440v-160h-160c-13.25 0-24-10.74-24-23.99C16 242.8 26.75 232 40 232h160v-160c0-13.25 10.75-23.99 24-23.99S248 58.75 248 72v160h160C421.3 232 432 242.8 432 256z"></path>
                                            </svg>
                                            <span class="fs-9 fw-bold"> Money Kartıma Ekle</span>
                                        </a>
                                        <a href=""
                                           class="campaign-action-button create-campaign campaign-detail mat-caption">
                                            <span class="fs-9 fw-bold">Kampanya Detayı</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative overflow-hidden">
        <div class="container position-relative py-3 py-lg-5 z-index-1">
            <div class="row overflow-hidden">
                <div class="col-md-12 mb-4">
                    <h3 class="fw-bold">Kampanyalar</h3>
                </div>
                <div class="col-md-12 campaigns-tab">
                    <nav class="mb-4  nav nav-tabs border-0" role="tablist">
                        <a class="nav-link active" data-bs-toggle="tab" href="#tab-a" role="tab"
                           aria-selected="true">Kampanyalar</a>
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-b" role="tab"
                           aria-selected="false">Söyle Kazan</a>

                    </nav>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-a" role="tabpanel">
                            <div class="" style="    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    margin-bottom: 2rem;">

                                    <div class="campaign-brands">
                                        <img class="img-fluid"
                                            src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196884996/50money-57c020.jpg">
                                        <div class="title subtitle-2 text-color-black"><span
                                                class="multi-line-ellipsis">2 Adet Nivea Deodorant Alımına 50 Money!</span>
                                        </div>
                                    </div>


                                    <div class="campaign-brands">
                                        <img class="img-fluid"
                                             src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196884996/50money-57c020.jpg">
                                        <div class="title subtitle-2 text-color-black"><span
                                                class="multi-line-ellipsis">Torku Ürünleri</span>
                                        </div>
                                    </div>

                                    <div class="campaign-brands">
                                        <img class="img-fluid"
                                             src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196884988/60money-d54d4b.jpg">
                                        <div class="title subtitle-2 text-color-black"><span
                                                class="multi-line-ellipsis">200 TL’lik Coca Cola, Fanta, Sprite, Schweppes, Cappy ve Fusetea siparişinde 60 Money!</span>
                                        </div>
                                    </div>
                                <div class="campaign-brands">
                                    <img class="img-fluid"
                                         src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196884996/50money-57c020.jpg">
                                    <div class="title subtitle-2 text-color-black"><span
                                            class="multi-line-ellipsis">2 Adet Nivea Deodorant Alımına 50 Money!</span>
                                    </div>
                                </div>


                                <div class="campaign-brands">
                                    <img class="img-fluid"
                                         src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196884996/50money-57c020.jpg">
                                    <div class="title subtitle-2 text-color-black"><span
                                            class="multi-line-ellipsis">Torku Ürünleri</span>
                                    </div>
                                </div>

                                <div class="campaign-brands">
                                    <img class="img-fluid"
                                         src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196884988/60money-d54d4b.jpg">
                                    <div class="title subtitle-2 text-color-black"><span
                                            class="multi-line-ellipsis">200 TL’lik Coca Cola, Fanta, Sprite, Schweppes, Cappy ve Fusetea siparişinde 60 Money!</span>
                                    </div>
                                </div>
                                <div class="campaign-brands">
                                    <img class="img-fluid"
                                         src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196884996/50money-57c020.jpg">
                                    <div class="title subtitle-2 text-color-black"><span
                                            class="multi-line-ellipsis">2 Adet Nivea Deodorant Alımına 50 Money!</span>
                                    </div>
                                </div>


                                <div class="campaign-brands">
                                    <img class="img-fluid"
                                         src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196884996/50money-57c020.jpg">
                                    <div class="title subtitle-2 text-color-black"><span
                                            class="multi-line-ellipsis">Torku Ürünleri</span>
                                    </div>
                                </div>

                                <div class="campaign-brands">
                                    <img class="img-fluid"
                                         src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196884988/60money-d54d4b.jpg">
                                    <div class="title subtitle-2 text-color-black"><span
                                            class="multi-line-ellipsis">200 TL’lik Coca Cola, Fanta, Sprite, Schweppes, Cappy ve Fusetea siparişinde 60 Money!</span>
                                    </div>
                                </div>
                                <div class="campaign-brands">
                                    <img class="img-fluid"
                                         src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196884996/50money-57c020.jpg">
                                    <div class="title subtitle-2 text-color-black"><span
                                            class="multi-line-ellipsis">2 Adet Nivea Deodorant Alımına 50 Money!</span>
                                    </div>
                                </div>


                                <div class="campaign-brands">
                                    <img class="img-fluid"
                                         src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196884996/50money-57c020.jpg">
                                    <div class="title subtitle-2 text-color-black"><span
                                            class="multi-line-ellipsis">Torku Ürünleri</span>
                                    </div>
                                </div>

                                <div class="campaign-brands">
                                    <img class="img-fluid"
                                         src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196884988/60money-d54d4b.jpg">
                                    <div class="title subtitle-2 text-color-black"><span
                                            class="multi-line-ellipsis">200 TL’lik Coca Cola, Fanta, Sprite, Schweppes, Cappy ve Fusetea siparişinde 60 Money!</span>
                                    </div>
                                </div>
                                <div class="campaign-brands">
                                    <img class="img-fluid"
                                         src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196884996/50money-57c020.jpg">
                                    <div class="title subtitle-2 text-color-black"><span
                                            class="multi-line-ellipsis">2 Adet Nivea Deodorant Alımına 50 Money!</span>
                                    </div>
                                </div>


                                <div class="campaign-brands">
                                    <img class="img-fluid"
                                         src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196884996/50money-57c020.jpg">
                                    <div class="title subtitle-2 text-color-black"><span
                                            class="multi-line-ellipsis">Torku Ürünleri</span>
                                    </div>
                                </div>

                                <div class="campaign-brands">
                                    <img class="img-fluid"
                                         src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196884988/60money-d54d4b.jpg">
                                    <div class="title subtitle-2 text-color-black"><span
                                            class="multi-line-ellipsis">200 TL’lik Coca Cola, Fanta, Sprite, Schweppes, Cappy ve Fusetea siparişinde 60 Money!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-b" role="tabpanel">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



