<!DOCTYPE html>
<html dir="ltr" lang="tr-TR">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("title")</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <link href="/assetWeb/asweb/css/theme-shop.min.css" rel="stylesheet">
    <link href="/custom.css?v={{rand(0,999)}}" rel="stylesheet">
    <link rel="stylesheet" href="/assetWeb/asweb/fonts/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="/assetWeb/asweb/fonts/iconsmind/iconsmind.css">
    <link rel="stylesheet" href="/assetWeb/asweb/vendor/node_modules/css/choices.min.css">
    <link rel="stylesheet" href="/assetWeb/asweb/vendor/node_modules/css/swiper-bundle.min.css">
    <link href="/assetWeb/asweb/vendor/node_modules/css/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="/assetWeb/asweb/vendor/node_modules/css/prism-tomorrow.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    @yield("amp")

</head>
<body>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCart">
    <div class="border-bottom offcanvas-header align-items-center justify-content-start">
        <button type="button"
                class="btn-close shadow-none offcanvas-button text-reset p-0 m-0 width-3x height-3x"
                data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="bx bx-x fs-4"></i>
        </button>
        <h5 class="mb-0 ms-3">Bildirimlerim</h5>

    </div>
    <div class="offcanvas-body p-0">
        <div>
            <!-- Tabs -->
            <nav class="nav nav-tabs p-4 d-flex align-items-center justify-content-between" role="tablist">
                <a class="nav-link active w-50" data-bs-toggle="tab" href="#tab-home" role="tab"
                   aria-selected="true">Bildirimler</a>
                <a class="nav-link ms-0 w-50" data-bs-toggle="tab" href="#tab-profile" role="tab"
                   aria-selected="false">Kampanyalar</a>
            </nav>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-home" role="tabpanel">
                    <div class="d-flex flex-column justify-content-center text-center">
                        <img src="https://www.migros.com.tr/assets/images/inbox-empty.svg" alt="">
                        <span class="fs-8 text-color-grey mt-4 ">Henüz aktif bir bildiriminiz yok.</span>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-profile" role="tabpanel">
                    <div class="coupon-content" id="coupon-content-1">
                        <div class="coupon-content-inner">
                            <div class="coupon-wrapper-content campaign-wrapper-content ng-star-inserted">
                                <div class="mb-4">
                                    <div href="#!" class="text-black d-flex align-items-center go-back"><i
                                            class="bx bx-arrow-back fs-4 me-3"></i> <h4 class="mb-0"> Kampanya
                                            Detayı</h4></div>
                                </div>
                                <div class="info-wrapper">
                                    <img
                                        alt="item-image" class="item-image mb-3"
                                        src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196884820/kampany-29cc26.jpg">
                                    <div class="head"></div>

                                    <h5 class="description mb-2">855- Crocs</h5>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <img alt="logo" class="item-company-logo" src="/logo.webp">
                                        <div class="date mat-caption-normal ng-star-inserted"> 14.08.2024</div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button class="btn-orange btn w-100"><span class="text-white">Sipariş Ver</span></button>

                        </div>


                    </div>
                    <div class="coupon-content" id="coupon-content-2">
                        <div class="coupon-content-inner">
                            <div class="coupon-wrapper-content campaign-wrapper-content ng-star-inserted">
                                <div class="mb-4">
                                    <div href="#!" class="text-black d-flex align-items-center go-back"><i
                                            class="bx bx-arrow-back fs-4 me-3"></i> <h4 class="mb-0"> Kampanya
                                            Detayı</h4></div>
                                </div>
                                <div class="info-wrapper">
                                    <img
                                        alt="item-image" class="item-image mb-3"
                                        src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196885378/kampanyalar-170630.jpg">
                                    <div class="head"></div>

                                    <h5 class="description mb-2">Birlikten Berekete Ürünleri</h5>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <img alt="logo" class="item-company-logo" src="/logo.webp">
                                        <div class="date mat-caption-normal ng-star-inserted"> 06.08.2024</div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button class="btn-orange btn w-100"><span class="text-white">Sipariş Ver</span></button>

                        </div>
                    </div>
                    <div class="content-wrapper list">
                        <div class="coupon-wrapper campaign-wrapper ng-star-inserted" data-target="coupon-content-1">
                            <img alt="logo" class="item-company-logo" src="/logo.webp">
                            <img alt="item-image" class="item-image"
                                 src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196884820/kampany-29cc26.jpg">
                            <div class="head"></div>
                            <div class="info-wrapper">
                                <div class="detail-icon">
                                    <div class="icon-icon">
                                        <svg role="img" aria-hidden="true" focusable="false" data-prefix="far"
                                             data-icon="chevron-right" class="svg-inline--fa fa-chevron-right"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path fill="currentColor"
                                                  d="M113.3 47.41l183.1 191.1c4.469 4.625 6.688 10.62 6.688 16.59s-2.219 11.97-6.688 16.59l-183.1 191.1c-9.152 9.594-24.34 9.906-33.9 .7187c-9.625-9.125-9.938-24.38-.7187-33.91l168-175.4L78.71 80.6c-9.219-9.5-8.906-24.78 .7187-33.91C88.99 37.5 104.2 37.82 113.3 47.41z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="description subtitle-2">855- Crocs</div>
                                <div class="date mat-caption-normal ng-star-inserted"> Geçerlilik: 14.08.2024</div>
                            </div>
                        </div>
                        <div class="coupon-wrapper campaign-wrapper ng-star-inserted" data-target="coupon-content-2">
                            <img alt="logo" class="item-company-logo" src="/logo.webp">
                            <img alt="item-image" class="item-image"
                                 src="https://images.migrosone.com/sanalmarket/list/campaign_list/20000196885378/kampanyalar-170630.jpg">
                            <div class="head"></div>
                            <div class="info-wrapper">
                                <div class="detail-icon">
                                    <div class="icon-icon">
                                        <svg role="img" aria-hidden="true" focusable="false" data-prefix="far"
                                             data-icon="chevron-right" class="svg-inline--fa fa-chevron-right"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path fill="currentColor"
                                                  d="M113.3 47.41l183.1 191.1c4.469 4.625 6.688 10.62 6.688 16.59s-2.219 11.97-6.688 16.59l-183.1 191.1c-9.152 9.594-24.34 9.906-33.9 .7187c-9.625-9.125-9.938-24.38-.7187-33.91l168-175.4L78.71 80.6c-9.219-9.5-8.906-24.78 .7187-33.91C88.99 37.5 104.2 37.82 113.3 47.41z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="description subtitle-2">Birlikten Berekete Ürünleri</div>
                                <div class="date mat-caption-normal ng-star-inserted"> Geçerlilik: 06.08.2024</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var couponWrappers = document.querySelectorAll('.coupon-wrapper');
            var goBackBtn = document.querySelectorAll('.go-back');

            var contentWrapper = document.querySelectorAll('.content-wrapper');
            var couponContents = document.querySelectorAll('.coupon-content');

            // Her bir coupon-wrapper için click event listener'ı ekle
            couponWrappers.forEach(function (wrapper) {
                wrapper.addEventListener('click', function (e) {
                    e.preventDefault();

                    // İlgili coupon-content öğesini bul
                    var targetContentId = wrapper.getAttribute('data-target');
                    var targetContent = document.getElementById(targetContentId);

                    if (targetContent) {
                        // Tüm content-wrapper'ları gizle
                        contentWrapper.forEach(function (wrapper) {
                            wrapper.style.display = 'none';
                        });

                        // Tüm coupon-content'leri gizle
                        couponContents.forEach(function (content) {
                            content.classList.remove('active');
                            content.style.display = 'none'; // Ekstra gizleme
                        });

                        // İlgili coupon-content'i göster
                        targetContent.classList.add('active');
                        targetContent.style.display = 'block'; // Gösterme
                    }
                });
            });

            // Her bir go-back butonuna click event listener'ı ekle
            goBackBtn.forEach(function (backButton) {
                backButton.addEventListener('click', function (e) {
                    e.preventDefault();

                    // İlgili coupon-content'i bul ve gizle
                    var currentCouponContent = backButton.closest('.coupon-content');
                    if (currentCouponContent) {
                        currentCouponContent.classList.remove('active');
                        currentCouponContent.style.display = 'none'; // Gizleme
                    }

                    // content-wrapper'ları göster
                    contentWrapper.forEach(function (wrapper) {
                        wrapper.style.display = 'block';
                    });
                });
            });
        });


    </script>
</div>

<div class="d-flex align-items-center justify-content-center">
    <div id="alert1-1" class="alert-container alert py-2 alert-success mb-0" role="alert">
        <h6 class="alert-heading fw-bolder mb-1">Favori Ürünlerim</h6>
        <p class="fw-bold fs-7 mb-0">
            Ürün favorilerinize eklendi
        </p>
    </div>
</div>
<div class="d-flex align-items-center justify-content-center">
    <div id="alert2-1" class="alert-container alert py-2 alert-success mb-0" role="alert">
        <h6 class="alert-heading fw-bolder mb-1">Favori Ürünlerim</h6>
        <p class="fw-bold fs-7 mb-0">
            Ürün favorilerinizden çıkarıldı
        </p>
    </div>
</div>
<div class="modal fade" id="modalBasic" tabindex="-1" aria-labelledby="modalBasicLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header border-0">
                <h5 class="modal-title text-center">Teslimat Yöntemini Belirle</h5>
                <button type="button"
                        class="btn btn-outline-secondary p-0 border-2 width-3x height-3x rounded-circle flex-center z-index-1"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x fs-5"></i>
                </button>
            </div>
            <div class="modal-body py-5 border-0">
                <div class="mat-card mb-3">
                    <div class="mat-card-content">
                        <a href="#delivery" class="text-dark d-flex align-items-center" data-bs-toggle="modal"
                           aria-expanded="false">
                            <img alt="address" src="https://www.migros.com.tr/assets/images/delivery/address.svg"
                                 class="icon">
                            <span class="subtitle-1"> Adresime Gelsin</span>
                        </a>
                    </div>
                </div>
                <div class="mat-card">
                    <div class="mat-card-content">
                        <a href="#collection" class="text-dark d-flex align-items-center" data-bs-toggle="modal"
                           aria-expanded="false">
                            <img alt="address" src="https://www.migros.com.tr/assets/images/delivery/store.svg"
                                 class="icon">
                            <div class="d-flex flex-column">
                                <span class="subtitle-1"> Mağazadan Alacağım</span>
                                <span class="color-green fs-9">Mağazadan Ücretsiz Teslimat</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="delivery" tabindex="-1" aria-labelledby="modalBasicLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header border-0">

                <h5 class="modal-title text-center">Adresime Gelsin</h5>
                <button type="button"
                        class="btn btn-outline-secondary p-0 border-2 width-3x height-3x rounded-circle flex-center z-index-1"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x fs-5"></i>
                </button>

            </div>
            <div class="modal-body py-3 border-0">
                <form novalidate="" class="position-relative">
                    <div>
                        <label for="Searchable" class="form-label fw-semibold fs-7 ms-1">Country/Region</label>
                        <div>
                            <select id="Searchable" class="form-control"
                                    data-choices='{"searchEnabled":true, "allowHTML":true,"itemSelectText":""}'>
                                <option value="" disabled>Country</option>
                                <option value="Usa">Usa</option>
                                <option value="Uk">Uk</option>
                                <option value="India">India</option>
                                <option value="France">France</option>
                                <option value="Japan">Japan</option>
                                <option value="Ukrain">Ukrain</option>
                                <option value="Poland">Poland</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Germany">Germany</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="form-label fw-semibold fs-7 ms-1">First Name</label>
                        <div>
                            <input type="text" class="form-control" aria-label="First name">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="form-label fw-semibold fs-7 ms-1">Last Name</label>
                        <div>
                            <input type="text" class="form-control" aria-label="First name">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="form-label fw-semibold fs-7 ms-1">Address</label>
                        <div>
                            <input type="text" class="form-control" id="inputAddress">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="form-label fw-semibold fs-7 ms-1">Apartment, suite, etc. (optional)</label>
                        <div>
                            <input type="text" class="form-control" id="inputAddress2">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="form-label fw-semibold fs-7 ms-1">City</label>
                        <div>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="form-label fw-semibold fs-7 ms-1">Postcode</label>
                        <div>
                            <input type="text" class="form-control" id="inputPostcode">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="form-label fw-semibold fs-7 ms-1">Phone Number</label>
                        <div>
                            <input type="text" class="form-control" id="inputPhone">
                        </div>
                    </div>
                    <button type="submit" class="form-submit-button rounded-3 w-100 py-2 mt-3 subtitle-2 ">
                        Kaydet
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="collection" tabindex="-1" aria-labelledby="modalBasicLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header border-0">
                <button type="button"
                        class="btn btn-outline-secondary p-0 border-2 width-3x height-3x rounded-circle flex-center z-index-1"
                        href="#modalBasic" data-bs-toggle="modal" aria-expanded="false">
                    <i class="bx bx-arrow-back fs-5"></i>
                </button>
                <h5 class="modal-title text-center">Mağazadan Alacağım</h5>
                <button type="button"
                        class="btn btn-outline-secondary p-0 border-2 width-3x height-3x rounded-circle flex-center z-index-1"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x fs-5"></i>
                </button>

            </div>
            <div class="modal-body py-5 border-0">
                <h6 class="text-center">Şirketin teslimat adresi girilecek</h6>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalNearDelivery" tabindex="-1" aria-labelledby="modalBasicLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header pb-0 border-0 d-flex">
                <div class="col-md-auto w-95">
                    <h4 class="modal-title text-center">En Yakın Teslimat Saatleri</h4>
                </div>
                <div class="col-md-auto">
                    <button type="button"
                            class="btn btn-outline-secondary p-0 border-2 width-3x height-3x rounded-circle flex-center z-index-1"
                            data-bs-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x fs-5"></i>
                    </button>
                </div>
            </div>
            <div class="modal-body pt-0 pb-5 border-0">
                <div class="text-center">
                    <p class="fs-8">
                        <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot"
                             class="svg-inline--fa fa-location-dot" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 384 512">
                            <path fill="currentColor"
                                  d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"></path>
                        </svg>
                        <span class="fw-bolder">BEYPAZARI ANKARA M MİGROS</span> için sipariş teslimat uygunluğu aşağıda
                        listelenmiştir.
                    </p>
                    <div class="pt-4">
                        <p class="color-blue fs-8 fw-bold">Sipariş teslimat zamanını sipariş bitirme aşamasında
                            seçebilirsin.</p>
                    </div>
                </div>

                <div class="mb-3">
                    <table class="days-wrapper table-responsive text-color-black">
                        <tr class="ng-star-inserted">
                            <th>
                                <div class="day-name-wrapper">
                                    <div class="name mat-caption text-color-black">Bugün</div>
                                    <div class="date overline text-color-grey">31 TEMMUZ</div>
                                </div>
                            </th>
                            <div class="timeslots">
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted">Günlük kapasitemiz
                                        doldu
                                    </div><!----><!----></td>
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 12:30 - 14:30</div>
                                    <!----><!----><!----></td>
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 15:00 - 17:00</div>
                                    <!----><!----><!----></td>
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 17:00 - 19:00</div>
                                    <!----><!----><!----></td>
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 19:00 - 21:00</div>
                                    <!----><!----><!----></td><!----></div>
                        </tr>
                        <tr class="ng-star-inserted">
                            <th _ngcontent-kit-c196="">
                                <div class="day-name-wrapper">
                                    <div class="name mat-caption text-color-black">Yarın</div>
                                    <div class="date overline text-color-grey">01 AĞUSTOS</div>
                                </div>
                            </th>
                            <div class="timeslots">
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 10:30 - 12:30</div>
                                    <!----><!----><!----></td>
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 12:30 - 14:30</div>
                                    <!----><!----><!----></td>
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 15:00 - 17:00</div>
                                    <!----><!----><!----></td>
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 17:00 - 19:00</div>
                                    <!----><!----><!----></td>
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 19:00 - 21:00</div>
                                    <!----><!----><!----></td><!----></div>
                        </tr>
                        <tr class="ng-star-inserted">
                            <th _ngcontent-kit-c196="">
                                <div class="day-name-wrapper">
                                    <div class="name mat-caption text-color-black">Cuma</div>
                                    <div class="date overline text-color-grey">02 AĞUSTOS</div>
                                </div>
                            </th>
                            <div class="timeslots">
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 10:30 - 12:30</div>
                                    <!----><!----><!----></td>
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 12:30 - 14:30</div>
                                    <!----><!----><!----></td>
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 15:00 - 17:00</div>
                                    <!----><!----><!----></td>
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 17:00 - 19:00</div>
                                    <!----><!----><!----></td>
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 19:00 - 21:00</div>
                                    <!----><!----><!----></td><!----></div>
                        </tr>
                        <tr class="ng-star-inserted">
                            <th _ngcontent-kit-c196="">
                                <div class="day-name-wrapper">
                                    <div class="name mat-caption text-color-black">Cumartesi
                                    </div>
                                    <div class="date overline text-color-grey">03 AĞUSTOS</div>
                                </div>
                            </th>
                            <div class="timeslots">
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 10:30 - 12:30</div>
                                    <!----><!----><!----></td>
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 12:30 - 14:30</div>
                                    <!----><!----><!----></td>
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 15:00 - 17:00</div>
                                    <!----><!----><!----></td>
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 17:00 - 19:00</div>
                                    <!----><!----><!----></td>
                                <td class="ng-star-inserted">
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"></div>
                                    <div class="timeslot ng-star-inserted"> 19:00 - 21:00</div>
                                    <!----><!----><!----></td><!----></div>
                        </tr><!----></table>
                </div>

            </div>
        </div>
    </div>
</div>
<nav
    class="@if(isset($displayNone)) {{$displayNone}} @endif navbar navbar-search-w-icons d navbar-expand-lg navbar-light bg-white">
    <div class="container position-relative">
        <a class="navbar-brand margin-sm-auto" href="/">
            <img src="/logo.webp" alt="" class="img-fluid">
        </a>
        <div class="d-none d-md-block">
            <div class="d-flex align-items-center navbar-no-collapse-items navbar-nav flex-row order-lg-last">
                <!-- Üye girişi yoksa
                <div class="nav-item ms-0 me-4 me-lg-2">
                    <button type="button" class="btn btn-outline-secondary d-flex align-items-center me-1"> Sipariş
                        Takibi
                        <i class="bx bx-chevron-right fs-4 ms-2"></i></button>
                </div>
                 -->
                <!-- Üye girişi varsa -->
                <div class="nav-item ms-0 me-4 me-lg-2">
                    <div class="sm-inbox">
                        <div class="inbox-container">
                            <div class="icon-wrapper position-relative">
                                <a href="#offcanvasCart" data-bs-toggle="offcanvas"
                                   class="text-color-black offcanvasCart nav-link lh-1 position-relative">
                                    <div class="ng-fa-icon">

                                        <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas"
                                             data-icon="bell"
                                             class="svg-inline--fa fa-bell" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                  d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"></path>

                                        </svg>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-item ms-0  user-login-item">
                    <!-- Üye girişi yoksa
                    <button type="button" class="btn btn-outline-secondary d-flex align-items-center "><i
                            class="bx bxs-user fs-4 me-2"></i> Üye Ol veya Giriş Yap <i
                            class="bx bx-chevron-down fs-4 ms-2"></i></button>
                             -->
                    <!-- Üye girişi varsa -->
                    <button type="button"
                            class="btn btn-outline-secondary user-login-component d-flex align-items-center "><i
                            class="bx bxs-user fs-5 me-2"></i>
                        <div class="d-flex flex-column text-start">
                            <span class="login-user">Hesabım</span>
                            <span class="login-fullname">İrem Yağmur Çaykara</span>

                        </div>
                        <i
                            class="bx bx-chevron-down fs-4 ms-2"></i></button>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" href="#!">
                            <img src="https://www.migros.com.tr/assets/icons/profile-popover/adreslerim.svg" alt="">
                            <span>Adreslerim</span>
                        </a>
                        <a class="dropdown-item" href="#!">
                            <img src="https://www.migros.com.tr/assets/icons/profile-popover/siparislerim.svg" alt="">
                            <span>Siparişlerim</span>
                        </a>
                        <a class="dropdown-item" href="#!">
                            <img src="https://www.migros.com.tr/assets/icons/profile-popover/favoriler.svg" alt="">
                            <span>Favori Ürünlerim</span>
                        </a>
                        <a class="dropdown-item" href="#!">
                            <img src="https://www.migros.com.tr/assets/icons/profile-popover/wallet.svg" alt="">
                            <span>MoneyPay Cüzdan</span>
                        </a>
                        <a class="dropdown-item" href="#!">
                            <img src="https://www.migros.com.tr/assets/icons/profile-popover/puanlar.svg" alt="">
                            <span>Puan ve Çeklerim</span>
                        </a>
                        <a class="dropdown-item" href="#!">
                            <img src="https://www.migros.com.tr/assets/icons/profile-popover/saglikli.svg" alt="">
                            <span>Sağlıklı Yaşam Yolculuğum</span>
                        </a>
                        <a class="dropdown-item" href="#!">
                            <img src="https://www.migros.com.tr/assets/icons/profile-popover/ayarlar.svg" alt="">
                            <span>Hesap Ayarları</span>
                        </a>
                        <a class="dropdown-item" href="#!">
                            <img src="https://www.migros.com.tr/assets/icons/profile-popover/logout.svg" alt="">
                            <span>Çıkış Yap</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<section
    class="@if(isset($displayNone)) {{$displayNone}} @endif position-relative bg-white position-sticky top-0  z-index-fixed overflow-sm-hidden">
    <div class="container container-sm-none position-relative">
        <div
            class="d-flex align-items-md-center navbar-no-collapse-items navbar-nav flex-column flex-md-row order-lg-last">
            <div class="col-md-5 col-12">
                <div class="nav-item ms-0 ">
                    <!-- Üye girişi yoksa
                    <a href="#modalBasic" data-bs-toggle="modal" aria-expanded="false"
                       class="btn btn-outline-secondary btn-sm-border-none btn-outline-large me-1">
                        <div class="choose-address d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="icon-bg-cont">
                                    <svg width="10" role="img" aria-hidden="true" focusable="false" data-prefix="fas"
                                         data-icon="location-dot"
                                         class="svg-inline--fa fa-location-dot" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 384 512">
                                        <path fill="currentColor"
                                              d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"></path>
                                    </svg>
                                </div>
                                <span> Teslimat Yöntemini Belirle</span>
                            </div>
                            <div class="d-none d-md-block">
                                <i class="bx bx-chevron-right fs-4 ms-2"></i>
                            </div>
                            <div class="d-block d-md-none ">
                                <div class="btn-sm-icon-bg-cont">
                                    <i class="bx bx-chevron-down fs-1"></i>
                                </div>
                            </div>
                        </div>
                    </a> -->
                    <!-- Üye girişi varsa -->

                    <div
                        class=" align-items-center choose-address-x  d-flex  btn-outline-secondary btn-sm-border-none btn-outline-large me-1">
                        <a
                            class="text-color-black col-md-6 btn" href="#modalBasic" data-bs-toggle="modal"
                            aria-expanded="false">
                            <div class=" choose-address-left-modal">
                                <div
                                    class="choose-address choose-address-left d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <img width="20" height="26"
                                                 src="https://www.migros.com.tr/assets/icons/address-selector/tikla-gel-al.svg"
                                                 alt="">
                                        </div>
                                        <div class="d-flex flex-column ">
                                            <div class="delivery-option">
                                                <span class="mat-caption-bold d-block"> Teslimat Adresi</span>
                                                <div class="mat-caption-normal">BEYPAZARI ANKARA M
                                                    MİGROS
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block">
                                        <i class="bx bx-chevron-down fs-3 ms-2"></i>

                                    </div>
                                    <div class="d-block d-md-none ">
                                        <i class="bx bx-chevron-down fs-1"></i>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a
                            class="text-color-black col-md-6 btn" href="#modalNearDelivery" data-bs-toggle="modal"
                            aria-expanded="false">
                            <div class="choose-address-right-modal">
                                <div
                                    class="choose-address choose-address-right d-flex align-items-center justify-content-between">
                                    <div class="d-flex flex-column ">
                                        <div class="delivery-option">
                                            <span class="mat-caption-bold d-block">En Yakın Teslimat</span>
                                            <div class="mat-caption-normal color-green fw-bold"
                                                 style="    white-space: nowrap;">Çarşamba 10:30 - 12:30

                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block">
                                        <i class="bx bx-chevron-down fs-3 ms-2"></i>
                                    </div>
                                    <div class="d-block d-md-none ">
                                        <i class="bx bx-chevron-down fs-1"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="divider mt-0 mb-3"></div>

            <div class="col-md-5 col-12 ">
                <div class="d-none d-md-block">
                    <div class="nav-item ms-0 ">
                        <div class="search-wrapper ">
                            <div class="migros ">
                                <form action="">
                                    <input
                                        id="product-search-combobox--trigger"
                                        type="text" role="combobox"
                                        class="mat-autocomplete-trigger subtitle-2 ng-pristine ng-valid ng-touched"
                                        placeholder="Eve ne lazım?" autocomplete="off"
                                        onclick="toggleSearchSuggestion()"
                                    >
                                    <div class="d-none d-md-block">
                                        <div id="product-search-combobox-search-right-button "
                                             class="migros-search-right-button subtitle-2 "
                                             onclick="toggleSearchSuggestion()">
                                            Ara
                                        </div>
                                    </div>
                                </form>
                                <div class="search-suggestion" style="display: none">
                                    <div class="search-history">
                                        <div class="search-history-header"><h5
                                            >Arama Geçmişi</h5>
                                            <div id="search-history-delete"
                                                 class="search-history-delete"><span>Geçmişi Temizle</span></div>
                                        </div>
                                        <ul>
                                            <li id="search-history-item" class="search-history-item">
                                                <a class="search-history-item-text"
                                                   href="/arama?q=sdf"><span>sdf</span></a></li>
                                            <!----></ul>
                                    </div>
                                    <div class="trend-keywords ng-star-inserted">
                                        <div class="trend-keywords-header"><h5
                                            >Önerilen Aramalar</h5></div>
                                        <ul>
                                            <li class="trend-keywords-item"><a
                                                    class="trend-keywords-item-text"
                                                    href="/arama?q=%C5%9Eeker"><span
                                                    >Şeker</span></a></li>
                                            <li class="trend-keywords-item"><a
                                                    class="trend-keywords-item-text"
                                                    href="/arama?q=S%C3%BCt"><span
                                                    >Süt</span></a></li>
                                            <li class="trend-keywords-item"><a
                                                    class="trend-keywords-item-text"
                                                    href="/arama?q=Ay%C3%A7i%C3%A7ek%20Ya%C4%9F%C4%B1"><span
                                                    >Ayçiçek Yağı</span></a></li>
                                            <li class="trend-keywords-item"><a
                                                    class="trend-keywords-item-text"
                                                    href="/arama?q=Dondurma"><span
                                                    >Dondurma</span></a></li>
                                            <li class="trend-keywords-item"><a
                                                    class="trend-keywords-item-text"
                                                    href="/arama?q=Yumurta"><span
                                                    >Yumurta</span></a></li>
                                            <li class="trend-keywords-item"><a
                                                    class="trend-keywords-item-text"
                                                    href="/arama?q=Sal%C3%A7a"><span
                                                    >Salça</span></a></li>
                                            <li class="trend-keywords-item"><a
                                                    class="trend-keywords-item-text"
                                                    href="/arama?q=Makarna"><span
                                                    >Makarna</span></a></li>
                                            <li class="trend-keywords-item"><a
                                                    class="trend-keywords-item-text"
                                                    href="/arama?q=%C3%87ama%C5%9F%C4%B1r%20Suyu"><span
                                                    >Çamaşır Suyu</span></a></li>
                                            <li class="trend-keywords-item"><a
                                                    class="trend-keywords-item-text"
                                                    href="/arama?q=%C5%9Eampuan"><span
                                                    >Şampuan</span></a></li>
                                            <li class="trend-keywords-item"><a
                                                    class="trend-keywords-item-text"
                                                    href="/arama?q=Deterjan"><span
                                                    >Deterjan</span></a></li>
                                            <li class="trend-keywords-item"><a
                                                    class="trend-keywords-item-text"
                                                    href="/arama?q=Ka%C4%9F%C4%B1t%20Havlu"><span
                                                    >Kağıt Havlu</span></a></li>
                                            <li class="trend-keywords-item"><a
                                                    class="trend-keywords-item-text"
                                                    href="/arama?q=Sabun"><span
                                                    >Sabun</span></a></li>
                                            <li class="trend-keywords-item"><a
                                                    class="trend-keywords-item-text"
                                                    href="/arama?q=Tuvalet%20Ka%C4%9F%C4%B1d%C4%B1"><span
                                                    >Tuvalet Kağıdı</span></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Üye girişi yoksa
            <div class="d-block d-md-none">
                <div class="col-md-5 col-12 ">
                    <div class="d-none d-md-block">
                        <div class="nav-item ms-0 ">
                            <div class="search-wrapper ">
                                <div class="migros ">
                                    <form action="">
                                        <input
                                            id="product-search-combobox--trigger"
                                            type="text" role="combobox"
                                            class="mat-autocomplete-trigger subtitle-2 ng-pristine ng-valid ng-touched"
                                            placeholder="Eve ne lazım?" autocomplete="off"
                                            onclick="toggleSearchSuggestion()"
                                        >
                                        <div class="d-none d-md-block">
                                            <div id="product-search-combobox-search-right-button "
                                                 class="migros-search-right-button subtitle-2 "
                                                 onclick="toggleSearchSuggestion()">
                                                Ara
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             -->
            <!-- Üye girişi varsa -->
            <div class="d-block d-md-none">
                <div class="row">
                    <div class="col-md-5 col-9 ">
                        <div class="nav-item ms-0 ">
                            <div class="search-wrapper ">
                                <div class="migros mx-sm-none">
                                    <form action="">
                                        <a href="/search-mobile">
                                            <input
                                                id="product-search-combobox--trigger"
                                                type="text" role="combobox"
                                                class="mat-autocomplete-trigger subtitle-2 ng-pristine ng-valid ng-touched"
                                                placeholder="Eve ne lazım?" autocomplete="off"
                                            >

                                        </a>
                                        <div class="d-none d-md-block">
                                            <div id="product-search-combobox-search-right-button "
                                                 class="migros-search-right-button subtitle-2 "
                                            >
                                                Ara
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="sm-inbox">
                            <div class="inbox-container">
                                <div class="icon-wrapper position-relative">
                                    <a href="#offcanvasCart" data-bs-toggle="offcanvas"
                                       class="text-color-black offcanvasCart nav-link lh-1 position-relative">
                                        <div class="ng-fa-icon">

                                            <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas"
                                                 data-icon="bell"
                                                 class="svg-inline--fa fa-bell" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 448 512">
                                                <path fill="currentColor"
                                                      d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"></path>

                                            </svg>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block">
                <div class="col-md-auto ">
                    <div class="nav-item ms-0 dropdown">
                        <a href="#" class="basket-link p-0" data-bs-auto-close="outside" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <div>
                                <div class="dropdown-btn  ">
                                    <div class="icn-cart-quantity-wrapper">
                                        <div class="icon-cart"></div>
                                        <div class="quantity">5</div>
                                    </div>
                                    <div>
                                        <div class="subtitle-2 text-color-black">Sepetim</div>
                                        <div class="mat-caption price">579,12 TL</div>
                                    </div>

                                    <i
                                        class="bx bx-chevron-down fs-4 text-black"></i>
                                </div>
                            </div>
                        </a>
                        <div class="my-basket dropdown-menu p-0 dropdown-menu-end dropdown-menu-xs position-absolute">
                            <div class="my-basket-body">
                                <ul class="list-unstyled no-animation mb-0">
                                    <li class="d-flex py-3 border-bottom">
                                        <div class="me-1">
                                            <a href="#!"><img
                                                    src="https://images.migrosone.com/sanalmarket/product/30581099/30581099-e8e0c2-105x105.jpg"
                                                    class="basket-pro-image" alt=""></a>
                                        </div>
                                        <div class="flex-grow-1 px-1 mb-3">
                                <span href="#!"
                                      class="text-dark basket-pro-title d-block lh-sm fw-semibold mb-3">Yumoş Doğal Özler
                                    Konsantre Çamaşır Yumuşatıcı Badem 50 Yıkama 1200 ML</span>
                                            <div class="d-flex justify-content-between">
                                                <div class="quantity-control" data-quantity="">
                                                    <button class="quantity-btn" data-quantity-minus="">
                                                        <svg viewBox="0 0 409.6 409.6">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z"/>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <div class="header-quantity-trash">
                                                        <button class="quantity-btn quantity-trash"
                                                                data-quantity-trash="">
                                                            <svg role="img" aria-hidden="true" focusable="false"
                                                                 data-prefix="far" data-icon="trash-can"
                                                                 class="svg-inline--fa fa-trash-can"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 448 512">
                                                                <path fill="currentColor"
                                                                      d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z"></path>
                                                            </svg>

                                                        </button>
                                                    </div>
                                                    <div data-quantity class="quantity-input">
                                                        <span data-quantity-display>1 adet</span>
                                                        <input type="hidden" data-quantity-input value="1">
                                                    </div>
                                                    <button class="quantity-btn" data-quantity-plus="">
                                                        <svg viewBox="0 0 426.66667 426.66667">
                                                            <path
                                                                d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div>
                                                    <div class="mat-caption price" style="font-size: 1rem">579,12 TL
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-block text-end">
                                            <a href="#!" class="text-muted small text-decoration-underline">
                                                <i class="bx bx-trash fs-6"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="d-flex py-3 border-bottom">
                                        <div class="me-1">
                                            <a href="#!"><img
                                                    src="https://images.migrosone.com/sanalmarket/product/34290014/34290014-fe4b38-105x105.jpg"
                                                    class="basket-pro-image" alt=""></a>
                                        </div>
                                        <div class="flex-grow-1 px-1 mb-3">
                                <span href="#!"
                                      class="text-dark basket-pro-title d-block lh-sm fw-semibold mb-3">
                                    Elseve Mucizevi Yağ Şampuan 390 Ml + Krem 150 Ml
                                </span>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div class="discount-text">
                                                        İndirimli Ürün
                                                    </div>

                                                    <div class="quantity-control" data-quantity="">
                                                        <div class="header-quantity-trash">
                                                            <button class="quantity-btn quantity-trash"
                                                                    data-quantity-trash="">
                                                                <svg role="img" aria-hidden="true" focusable="false"
                                                                     data-prefix="far" data-icon="trash-can"
                                                                     class="svg-inline--fa fa-trash-can"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 448 512">
                                                                    <path fill="currentColor"
                                                                          d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z"></path>
                                                                </svg>

                                                            </button>
                                                        </div>
                                                        <button class="quantity-btn" data-quantity-minus="">
                                                            <svg viewBox="0 0 409.6 409.6">
                                                                <g>
                                                                    <g>
                                                                        <path
                                                                            d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z"/>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </button>
                                                        <div data-quantity class="quantity-input">
                                                            <span data-quantity-display>1 adet</span>
                                                            <input type="hidden" data-quantity-input value="1">
                                                        </div>
                                                        <button class="quantity-btn" data-quantity-plus="">
                                                            <svg viewBox="0 0 426.66667 426.66667">
                                                                <path
                                                                    d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <div class="mat-caption text-muted"
                                                         style="font-size: .7rem;text-decoration:line-through">649,12 TL
                                                    </div>
                                                    <div class="mat-caption text-dark discount-banner" style="">579,12
                                                        TL
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-block text-end">
                                            <a href="#!" class="text-muted small text-decoration-underline">
                                                <i class="bx bx-trash fs-6"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="d-flex py-3 border-bottom">
                                        <div class="me-1">
                                            <a href="#!"><img
                                                    src="https://images.migrosone.com/sanalmarket/product/34290014/34290014-fe4b38-105x105.jpg"
                                                    class="basket-pro-image" alt=""></a>
                                        </div>
                                        <div class="flex-grow-1 px-1 mb-3">
                                <span href="#!"
                                      class="text-dark basket-pro-title d-block lh-sm fw-semibold mb-3">
                                    Elseve Mucizevi Yağ Şampuan 390 Ml + Krem 150 Ml
                                </span>
                                            <div class="d-flex justify-content-between">
                                                <div class="quantity-control" data-quantity="">
                                                    <div class="header-quantity-trash">
                                                        <button class="quantity-btn quantity-trash"
                                                                data-quantity-trash="">
                                                            <svg role="img" aria-hidden="true" focusable="false"
                                                                 data-prefix="far" data-icon="trash-can"
                                                                 class="svg-inline--fa fa-trash-can"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 448 512">
                                                                <path fill="currentColor"
                                                                      d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z"></path>
                                                            </svg>

                                                        </button>
                                                    </div>

                                                    <button class="quantity-btn" data-quantity-minus="">
                                                        <svg viewBox="0 0 409.6 409.6">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z"/>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <div data-quantity class="quantity-input">
                                                        <span data-quantity-display>1 adet</span>
                                                        <input type="hidden" data-quantity-input value="1">
                                                    </div>
                                                    <button class="quantity-btn" data-quantity-plus="">
                                                        <svg viewBox="0 0 426.66667 426.66667">
                                                            <path
                                                                d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div>
                                                    <div class="mat-caption price" style="font-size: 1rem">579,12 TL
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-block text-end">
                                            <a href="#!" class="text-muted small text-decoration-underline">
                                                <i class="bx bx-trash fs-6"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <div class=" border-top p-3 my-basket-absolute">
                                <button class="btn-orange btn w-100"><span class="text-white">Sepete Git</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="d-block d-md-none mobile-categories">
            <ul class="navbar-nav flex-row ">
                <li class="nav-item">
                    <a class="nav-link" href="/campaigns" role="button">
                        Kampanyalar
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/coklu-indirimler" class="nav-link color-orange" role="button">
                        Çoklu İndirimler
                    </a>
                </li>
                <li class="nav-item">
                    <a href="money-indirimli" class="nav-link" role="button">
                        Money İndirimli
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="@if(isset($displayNone)) {{$displayNone}}  @endif position-relative d-none d-md-block">
    <header class="header-transparent border-bottom">
        <nav class="navbar navbar-expand-lg ">
            <div class="container position-relative z-index-1">
                <div class="collapse navbar-collapse" id="mainNavbarTheme">

                    <!--begin:Navbar items-->
                    <ul class="navbar-nav me-auto">

                        <li class="nav-item dropdown categories">
                            <a class="nav-link active" href="#!" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="icon"></div>
                                Kategoriler
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropend">
                                    <a class="dropdown-item  color-green"
                                       href="/products-list">Tüm İndirimli Ürünler</a>
                                </div>
                                <div class="dropend">
                                    <a class="dropdown-item  color-orange"
                                       href="/products-list">
                                        Sadece Migrosta</a>
                                </div>
                                <div class="dropend">
                                    <a class="dropdown-item" href="#!" role="button"
                                       data-bs-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">Temel
                                        Gıda
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-fw py-lg-0 px-lg-0">
                                        <div class="overflow-hidden">
                                            <div class="row mx-0">
                                                <div class="col-md-6 mb-lg-0 mb-4">
                                                    <h5 class="dropdown-header color-orange">Bakliyat</h5>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Pirinç
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Bulgur
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Buğday
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Fasulye
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Mercimek
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Nohut
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Barbunya
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Börülce
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Bakla
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Süper Gıdalar
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Mısır
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-lg-0 mb-4">
                                                    <h5 class="dropdown-header color-orange">Konserve</h5>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Salça
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Turşu
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Ton Balığı
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Garnitür
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Közlenmiş
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Haşlanmış
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Konserve Mısır
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Konserve Mantar
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Konserve Sebze
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Konserve Türlü
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Konserve Deniz Ürünleri
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-lg-0 mb-4">
                                                    <h5 class="dropdown-header color-orange">Sos</h5>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Ketçap
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Mayonez
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Hardal
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Acı Sos
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Soya Sosu
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Makarna Sosu
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Lezzetlendirici Sos
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Sirke
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Limon Sosu
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="dropdown-item" href="#!">
                                                                Nar Ekşisi
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropend">
                                    <a class="dropdown-item"
                                       href="/products-list">
                                        Meze, Hazır Yemek, Donuk</a>
                                </div>
                                <div class="dropend">
                                    <a class="dropdown-item " href="/products-list">
                                        İçecek</a>
                                </div>
                                <div class="dropend">
                                    <a class="dropdown-item " href="/products-list">
                                        Atıştırmalık</a>
                                </div>
                                <div class="dropend">
                                    <a class="dropdown-item " href="/products-list">
                                        Fırın, Pastane</a>
                                </div>
                                <div class="dropend">
                                    <a class="dropdown-item " href="/products-list">
                                        Deterjan, Temizlik</a>
                                </div>
                                <div class="dropend">
                                    <a class="dropdown-item " href="/products-list">
                                        Kağıt, Islak Mendil</a>
                                </div>
                                <div class="dropend">
                                    <a class="dropdown-item " href="/products-list">
                                        Kişisel Bakım, Kozmetik, Sağlık</a>
                                </div>
                                <div class="dropend">
                                    <a class="dropdown-item " href="/products-list">
                                        Bebek</a>
                                </div>
                                <div class="dropend">
                                    <a class="dropdown-item " href="/products-list">
                                        Ev, Yaşam</a>
                                </div>
                                <div class="dropend">
                                    <a class="dropdown-item " href="/products-list">
                                        Kitap, Kırtasiye, Oyuncak</a>
                                </div>
                                <div class="dropend">
                                    <a class="dropdown-item "href="/products-list">
                                        Pet Shop</a>
                                </div>
                                <div class="dropend">
                                    <a class="dropdown-item "  href="/products-list">
                                        Elektronik</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/campaigns" role="button">
                                Kampanyalar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" role="button" href="/coklu-indirimler">
                                Çoklu İndirimler
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/money-indirimli" class="nav-link" role="button">
                                Money İndirimli
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    </header>

</section>
<main>
    @yield("content")
</main>
<div class="divider d-none d-md-block"></div>
<footer >
    <div class="desktop-only @if(isset($displayNone)) {{$displayNone}} @endif d-none d-md-block">
        <div>
            <div>
                <div class="container links-wrapper">
                    <div class="inner-grid">
                        <div
                            class="mdc-layout-grid__cell--span-3 mdc-layout-grid__cell--span-12-phone">
                            <p class="title"> Migros Sanal Market

                            </p>
                            <div class="content"><p
                                    class="link ng-star-inserted"
                                    id="page-hakkimizda"><a
                                        id="link-hakkimizda" href="/islem-rehberi?id=8">
                                        Hakkımızda </a></p>
                                <p class="link ng-star-inserted" id="page-islem-rehberi"><a
                                        id="link-islem-rehberi" href="/islem-rehberi?id=1"> İşlem
                                        Rehberi </a></p>
                                <p class="link ng-star-inserted" id="page-sikca-sorulan-sorular">
                                    <a id="link-sikca-sorulan-sorular"
                                       href="/islem-rehberi?id=6"> Sıkça Sorulan Sorular </a></p>
                                <p class="link ng-star-inserted" id="page-musteri-hizmetleri"><a
                                        id="link-musteri-hizmetleri" href="/islem-rehberi?id=5">
                                        Müşteri Hizmetleri </a></p>
                                <p class="link ng-star-inserted" id="page-iletisim"><a
                                        id="link-iletisim" href="/islem-rehberi?id=7">
                                        İletişim </a></p>
                                <p class="link ng-star-inserted" id="page-kvkk-metni"><a
                                        id="link-kvkk-metni" href="/islem-rehberi?id=9"> Kişisel
                                        Verilerin Korunması Hakkında Aydınlatma Metni </a></p>
                                <p class="link ng-star-inserted" id="page-kvkk-politikasi"><a
                                        id="link-kvkk-politikasi" href="/islem-rehberi?id=767">
                                        Kişisel Verilerin Korunması ve İşlenmesi Politikası </a></p>
                                <p class="link ng-star-inserted" id="page-kullanim-kosullari"><a
                                        id="link-kullanim-kosullari" href="/islem-rehberi?id=10">
                                        Kullanım Koşulları ve Gizlilik </a></p>
                                <p class="link ng-star-inserted"
                                   id="page-cerez-aydinlatma-metni"><a
                                        id="link-cerez-aydinlatma-metni"
                                        href="/islem-rehberi?id=777"> Çerez Aydınlatma
                                        Metni </a></p>
                                <p class="link ng-star-inserted" id="page-e-arsiv-bildilendirme">
                                    <a id="link-e-arsiv-bildilendirme"
                                       href="/islem-rehberi?id=12"> E-Arşiv Bilgilendirme </a></p>
                                <p class="link ng-star-inserted" id="page-guvenli-alisveris"><a
                                        id="link-guvenli-alisveris" href="/islem-rehberi?id=11">
                                        Güvenli Alışveriş </a></p>
                                <p class="link ng-star-inserted" id="page-markalar"><a
                                        id="link-markalar" href="/markalar"> Markalar </a></p>
                                <!----></div>
                            <p class="title"> Kurumsal

                            </p>
                            <div class="content"><p
                                    class="link ng-star-inserted"><a
                                        target="_blank" rel="noopener"
                                        href="https://www.migroskurumsal.com/surdurulebilirlik"> Sürdürülebilirlik </a>
                                </p>
                                <p class="link ng-star-inserted"><a
                                        target="_blank"
                                        rel="noopener"
                                        href="https://www.migroskurumsal.com/hakkimizda/kalite">
                                        Kalite Anlayışı </a></p>
                                <p class="link ng-star-inserted"><a
                                        target="_blank"
                                        rel="noopener"
                                        href="https://toptan.migros.com.tr/">
                                        Migros Toptan </a></p>
                                <p class="link ng-star-inserted"><a
                                        target="_blank"
                                        rel="noopener"
                                        href="https://www.migroskurumsal.com/hakkimizda/politikalarimiz#insan-kaynaklari-politikasi">
                                        İnsan Kaynakları Politikamız </a></p>
                                <p class="link ng-star-inserted"><a
                                        target="_blank"
                                        rel="noopener"
                                        href="https://www.migroskurumsal.com/IKBasvuru.aspx?IcerikID=36">
                                        İş Başvurusu </a></p>
                                <p class="link ng-star-inserted"><a
                                        target="_blank"
                                        rel="noopener"
                                        href="https://moneypay.com.tr/kurumsal/moneypay-pro.html">
                                        Kurumsal Kart &amp; Çek Satışı </a></p><!----></div>
                        </div>
                        <div
                            class="popular-pages mdc-layout-grid__cell--span-5 mdc-layout-grid__cell--span-12-phone">
                            <p class="title"> Popüler Sayfalar

                            </p>
                            <div class="content"><p
                                    class="link ng-star-inserted"><a
                                        href="/mevsim-sebzeleri-c-3f4"> Mevsim Sebzeleri </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/dondurma-c-41b">
                                        Dondurma </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/dana-eti-c-3fa"> Dana
                                        Eti </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/maske-c-2915">
                                        Maske </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/uzun-omurlu-sut-c-40a">
                                        Uzun Ömürlü Süt </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/eldiven-c-2914">
                                        Eldiven </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/egzotik-meyveler-c-3ea">
                                        Egzotik Meyveler </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/el-dezenfektani-c-11861">
                                        El Dezenfektanı </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/yumurta-c-70">
                                        Yumurta </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/sac-bakim-c-8f"> Saç
                                        Bakım </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/kagit-havlu-c-49d">
                                        Kağıt Havlu </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/tiras-malzemeleri-c-90">
                                        Tıraş Malzemeleri </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/tuvalet-kagidi-c-49c">
                                        Tuvalet Kağıdı </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/zeytinyagi-c-433">
                                        Zeytinyağı </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/tiras-bicagi-c-4ab">
                                        Tıraş Bıçağı </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/turk-kahvesi-c-28c4">
                                        Türk Kahvesi </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/taze-kasar-c-273b">
                                        Taze Kaşar </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/dis-macunu-c-4a1"> Diş
                                        Macunu </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/pilic-c-3fe">
                                        Piliç </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/jel-camasir-suyu-c-28d7">
                                        Jel Çamaşır Suyu </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/aycicek-yagi-c-42d">
                                        Ayçiçek Yağı </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/kuzu-eti-c-3fb"> Kuzu
                                        Eti </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/atistirmalik-c-113fb">
                                        Atıştırmalık </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/sampuan-c-4a4">
                                        Şampuan </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/balik-deniz-urunleri-c-6a">
                                        Balık &amp; Deniz Ürünleri </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/demlik-poset-cay-c-1121e">
                                        Demlik Poşet Çay </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/bebek-bezi-c-ab">
                                        Bebek Bezi </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/baldo-pirincler-c-2788">
                                        Baldo Pirinç </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/bebek-mamasi-c-299b">
                                        Bebek Maması </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/devam-sutu-c-1136b">
                                        Devam Sütü </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/dis-fircasi-c-4a0">
                                        Diş Fırçası </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/filtre-kahve-c-11223">
                                        Filtre Kahve </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/dondurulmus-gida-c-7c">
                                        Dondurulmuş Gıda </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/kolonya-c-4cf">
                                        Kolonya </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/telefon-ve-aksesuarlari-c-525">
                                        Telefon Ve Aksesuarları </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/hijyenik-ped-c-96">
                                        Hijyenik Ped </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/kopek-mamasi-c-29dc">
                                        Köpek Maması </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/cicek-bali-c-2769">
                                        Çiçek Balı </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/kirtasiye-c-11420">
                                        Kırtasiye </a></p>
                                <p class="link ng-star-inserted"><a
                                        href="/oyuncak-c-9e">
                                        Oyuncak </a></p><!----></div>
                        </div>
                        <div
                            class="mdc-layout-grid__cell--span-4 mdc-layout-grid__cell--span-3-tablet mdc-layout-grid__cell--span-12-phone right-container">
                            <div
                                class="mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--span-3-tablet mdc-layout-grid__cell--span-12-phone">
                                <p class="title"> Migros'ta Yenilikler
                                </p>
                                <div class="content"><p
                                        class="link ng-star-inserted"><a
                                            routerlinkactive="active" href="/alo-migros"
                                            class="ng-star-inserted"> Alo Migros </a><!----><!----></p>
                                    <p class="link ng-star-inserted"><!----><a
                                            target="_blank" rel="noopener"
                                            href="https://www.money.com.tr/mc/money-ozelliklerini-kesfet/saglikli-yasam-yolculugum/123"
                                            class="ng-star-inserted"> Sağlıklı Yaşam Yolculuğum </a><!----></p>
                                    <p class="link ng-star-inserted"><!----><a
                                            target="_blank" rel="noopener"
                                            href="https://www.money.com.tr" class="ng-star-inserted"> Money </a><!---->
                                    </p>
                                    <p class="link ng-star-inserted"><!----><a
                                            target="_blank" rel="noopener"
                                            href="https://migrostv.migros.com.tr" class="ng-star-inserted"> Migros
                                            TV </a><!----></p><!----></div>
                                <p class="title">Mobil Uygulamalar</p>
                                <div class="mobile-app-link ng-star-inserted"><a
                                        target="_blank" rel="noopener"
                                        href="https://apps.apple.com/tr/app/migros-sanal-market/id397585390?l=tr"><img
                                            alt=""
                                            src="https://www.migros.com.tr/assets/logos/mobile-app/app-store.svg"></a>
                                </div>
                                <div class="mobile-app-link ng-star-inserted"><a
                                        target="_blank" rel="noopener"
                                        href="https://play.google.com/store/apps/details?id=com.inomera.sm"><img
                                            alt=""
                                            src="https://www.migros.com.tr/assets/logos/mobile-app/google-play.svg"></a>
                                </div>
                                <div class="mobile-app-link ng-star-inserted"><a
                                        target="_blank" rel="noopener"
                                        href="https://appgallery.huawei.com/#/app/C101624469"><img
                                            alt=""
                                            src="https://www.migros.com.tr/assets/logos/mobile-app/app-gallery.svg"></a>
                                </div><!----></div>
                            <div
                                class="mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--span-3-tablet mdc-layout-grid__cell--span-12-phone">
                                <p class="title">Bizi Takip Edin</p>
                                <div class="socials">
                                    <a target="_blank"
                                       rel="noopener"
                                       href="#!"
                                       class="ng-star-inserted">
                                        <img
                                            alt=""
                                            src="https://www.migros.com.tr/assets/logos/social/instagram.svg"></a><a
                                        target="_blank"
                                        rel="noopener"
                                        href="#!"
                                        class="ng-star-inserted">
                                        <img
                                            alt=""
                                            src="https://www.migros.com.tr/assets/logos/social/facebook.svg"></a><a
                                        target="_blank" rel="noopener"
                                        href="#!"
                                        class="ng-star-inserted">
                                        <img
                                            alt="" src="https://www.migros.com.tr/assets/logos/social/x.svg"></a><a
                                        target="_blank" rel="noopener"
                                        href="#!" class="ng-star-inserted">
                                        <img
                                            alt=""
                                            src="https://www.migros.com.tr/assets/logos/social/youtube.svg"></a>
                                    <a
                                        target="_blank" rel="noopener"
                                        href="#!"
                                        class="ng-star-inserted"><img
                                            alt=""
                                            src="https://www.migros.com.tr/assets/logos/social/linkedin.svg"></a><!---->
                                </div>

                                <p class="title">Dijital Dergilerimiz</p>
                                <div class="digital ng-star-inserted"><a
                                        target="_blank"
                                        rel="noopener"
                                        href="#!"><span
                                            class="align-helper"></span><img
                                            alt=""
                                            src="https://www.migros.com.tr/assets/icons/digital-magazine/migroskop.jpg">
                                        Migroskop </a></div>
                                <div class="digital ng-star-inserted"><a
                                        target="_blank"
                                        rel="noopener"
                                        href="#!"><span
                                            class="align-helper"></span><img
                                            alt=""
                                            src="https://www.migros.com.tr/assets/icons/digital-magazine/anne-bebek.jpg">
                                        Anne-Bebek </a></div>
                                <!----></div>
                            <div
                                class="mdc-layout-grid__cell--span-12 mdc-layout-grid__cell--span-3-tablet mdc-layout-grid__cell--span-12-phone logos-wrapper">
                                <a href=#!" target="_blank"
                                   rel="noopener"><img
                                        src="https://www.migros.com.tr/assets/logos/money/money-logo.png"
                                        alt="money-logo"
                                        class="money logo"></a><a
                                    href="#!"
                                    target="_blank" rel="noopener"><img

                                        src="https://www.migros.com.tr/assets/logos/migros/migros-tv-logo.png"
                                        alt="migros-tv-logo"
                                        class="migros-tv logo"></a><a
                                    href="#!"
                                    target="_blank" rel="noopener"><img

                                        src="https://www.migros.com.tr/assets/logos/saglikli-yasam/saglikli-yasam.png"
                                        alt="saglikli-yasam-logo"
                                        class="saglikli-yasam logo"></a><a
                                    href="#!"
                                    target="_blank" rel="noopener"><img
                                        src="https://www.migros.com.tr/assets/logos/migros/kadin-akademisi.png"
                                        alt="kadin-akademisi-logo" class="kadin-akademisi logo"></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
        </div><!---->
        <div>
            <div class="container logos-wrapper">
                <div class="inner">
                    <div
                        class="mdc-layout-grid__cell--span-10 mdc-layout-grid__cell--span-4-phone mdc-layout-grid__cell--span-8-tablet">
                        <div class="logo-container"><a href="/"><img
                                    src="/logo.webp"
                                    alt="migros-logo" class="migros-logo"></a>
                            <div class="copyright text-color-grey">Ürün fiyatlarına KDV bedeli
                                dahildir. ©Migros 2024
                            </div>
                        </div>
                    </div>
                    <div class="logos"><a id="footer-logos-eyebrand"
                                          href="h#!"
                                          target="_blank" rel="noopener"><img
                                id="footer-logos-eyebrand-img"
                                src="https://www.migros.com.tr/assets/logos/blindlook/blindlook-logo.webp"
                                alt="blindlook-logo"
                                class="blindlook-logo logo"></a><a
                            href="#!"
                            target="_blank" rel="noopener"><img
                                src="https://www.migros.com.tr/assets/logos/anadolu-grubu/anadolu_grubu.jpg"
                                alt="anadolu-grubu-logo" class="anadolu-grubu-logo logo"></a><a
                            href="#!"
                            target="_blank"
                            rel="noopener"><img
                                src="https://www.migros.com.tr/assets/logos/gidani-koru/gidani-koru.jpg"
                                alt="gidani-koru-logo" class="gidani-koru-logo logo"></a><a
                            href="#!"
                            target="_blank"
                            rel="noopener"><img

                                src="https://www.migros.com.tr/assets/logos/guven-damgasi/guven-damgasi@3x.jpg"
                                alt="guven-damgasi-logo"
                                class="logo guven-damgasi-logo"></a>
                        <div class="ETBIS">
                            <div id="77DC0C5568104C829695C04726B02F78"><a
                                    href="#!"
                                    target="_blank"><img
                                        src="https://www.migros.com.tr/assets/logos/etbis/etbis.jpg"
                                        alt="etbis-logo"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sm-bottom-nav-mobile mobile-only">
        <nav class="container mobile-only ng-star-inserted">
            <div class="nav-item ng-star-inserted active" tabindex="0" id="mobile-navbar-item-0">
                <img src="https://www.migros.com.tr/assets/icons/bottom-navigation/home-active.svg" alt="AnasayfaIcon">
                <!---->
                <div class="text mat-caption-normal text-align-center"> Anasayfa</div>
            </div>
            <div class="nav-item ng-star-inserted" tabindex="0" id="mobile-navbar-item-1"><img
                    src="https://www.migros.com.tr/assets/icons/bottom-navigation/search-passive.svg"
                    alt="KategorilerIcon"><!---->
                <div class="text mat-caption-normal text-align-center"> Kategoriler</div>
            </div>
            <div class="nav-item ng-star-inserted" id="mobile-navbar-item-2"><img
                    src="https://www.migros.com.tr/assets/icons/bottom-navigation/cart-passive.svg" alt="SepetimIcon">
                <div class="mat-caption-normal quantity ng-star-inserted">1</div><!---->
                <div class="text mat-caption-normal text-align-center"> 34,90 TL</div>
            </div>
            <div class="nav-item ng-star-inserted" tabindex="0" id="mobile-navbar-item-3"><img
                    src="https://www.migros.com.tr/assets/icons/bottom-navigation/campaign-passive.svg"
                    alt="KampanyalarIcon"><!---->
                <div class="text mat-caption-normal text-align-center"> Kampanyalar</div>
            </div>
            <div class="nav-item ng-star-inserted" tabindex="0" id="mobile-navbar-item-4"><img
                    src="https://www.migros.com.tr/assets/icons/bottom-navigation/profile-passive.svg"
                    alt="HesabımIcon">
                <!---->
                <div class="text mat-caption-normal text-align-center"> Hesabım</div>
            </div>
        </nav>
    </div>
</footer>

<script src="/assetWeb/asweb/js/theme.bundle.js"></script>

<script src="/assetWeb/asweb/vendor/node_modules/js/choices.min.js"></script>
<script src="/assetWeb/asweb/vendor/node_modules/js/swiper-bundle.min.js"></script>
<script src="/assetWeb/asweb/vendor/node_modules/js/choices.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"
        integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn"
        crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    var cSelect = document.querySelectorAll("[data-choices]");
    cSelect.forEach(el => {
        const t = {
            ...el.dataset.choices ? JSON.parse(el.dataset.choices) : {},
            ...{
                classNames: {
                    containerInner: el.className,
                    input: "form-control",
                    inputCloned: "form-control-sm",
                    listDropdown: "dropdown-menu",
                    itemChoice: "dropdown-item",
                    activeState: "show",
                    selectedState: "active"
                }
            }
        }
        new Choices(el, t)
    });

    let map;
    let marker;

    function initMap() {
        // Başlangıç konumu
        const initialPosition = {lat: -34.397, lng: 150.644};

        // Harita oluşturuluyor
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 8,
            center: initialPosition
        });

        // İşaretçi oluşturuluyor
        marker = new google.maps.Marker({
            position: initialPosition,
            map: map,
            draggable: true,
            title: 'Drag me!'
        });

        // İşaretçi sürüklenirken konumu güncelle
        marker.addListener('dragend', function (event) {
            console.log('New position:', event.latLng.lat(), event.latLng.lng());
            // Burada konumu güncelleyebilir ve adresi belirlemek için bir işlev ekleyebilirsiniz
        });
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('mat-input-2');
        const suggestionsList = document.getElementById('suggestions');

        input.addEventListener('input', function () {
            const query = input.value.toLowerCase();

            // Burada suggestion'larınızı almak için bir API çağrısı yapabilirsiniz.
            // Örnek olarak, sabit bir liste kullanıyoruz:
            const suggestions = ['Mahalle 1', 'Sokak 1', 'Cadde 1', 'Mahalle 2', 'Sokak 2', 'Cadde 2'];

            // Öneri listesini temizle
            suggestionsList.innerHTML = '';

            if (query) {
                const filteredSuggestions = suggestions.filter(suggestion => suggestion.toLowerCase().includes(query));

                filteredSuggestions.forEach(suggestion => {
                    const li = document.createElement('li');
                    li.textContent = suggestion;
                    li.addEventListener('click', function () {
                        input.value = suggestion;
                        suggestionsList.innerHTML = ''; // Öneri listesini temizle
                    });
                    suggestionsList.appendChild(li);
                });
            }
        });
    });

    function toggleSearchSuggestion() {
        var searchSuggestion = document.querySelector('.search-suggestion');
        if (searchSuggestion.style.display === 'none') {
            searchSuggestion.style.display = 'block';
            // Herhangi bir yere tıklandığında search-suggestion'ı gizle
            document.addEventListener('click', function closeSearchSuggestion(e) {
                if (!searchSuggestion.contains(e.target) && e.target.id !== 'product-search-combobox--trigger') {
                    searchSuggestion.style.display = 'none';
                    document.removeEventListener('click', closeSearchSuggestion);
                }
            });
        } else {
            searchSuggestion.style.display = 'none';
        }
    }

    (function () {
        "use strict";
        var jQueryPlugin = (window.jQueryPlugin = function (ident, func) {
            return function (arg) {
                if (this.length > 1) {
                    this.each(function () {
                        var $this = $(this);

                        if (!$this.data(ident)) {
                            $this.data(ident, func($this, arg));
                        }
                    });

                    return this;
                } else if (this.length === 1) {
                    if (!this.data(ident)) {
                        this.data(ident, func(this, arg));
                    }

                    return this.data(ident);
                }
            };
        });
    })();


</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var dropdownTriggerList = [].slice.call(document.querySelectorAll('.nav-item,.dropend'));
        dropdownTriggerList.map(function (dropdownTriggerEl) {
            dropdownTriggerEl.addEventListener('mouseenter', function () {
                this.querySelector('.dropdown-menu').classList.add('show');
            });

            dropdownTriggerEl.addEventListener('mouseleave', function () {
                this.querySelector('.dropdown-menu').classList.remove('show');
            });
        });
    });

</script>

<script>
    var swiper2 = new Swiper(".swiper-3", {
        slidesPerView: 1,
        spaceBetween: 8,
        centerSlides: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 5,
                spaceBetween: 5,
            }
        },
    });
    var swiper4 = new Swiper(".swiper-campaigns", {
        slidesPerView: 1,
        centerSlides: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 3.5,
                spaceBetween: 20,
            }
        },
    });
    var swiper3 = new Swiper(".swiper-4", {
        slidesPerView: 1,
        spaceBetween: 8,
        centerSlides: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 5,
            }
        },
    });
    var swiper = new Swiper(".swiper-1", {
        slidesPerView: 1,
        spaceBetween: 16,
        loop: 'true',
        pagination: {
            el: ".swiper-pagination",
        },
        keyboard: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<script>
    /*
    document.addEventListener('DOMContentLoaded', function () {
        // Butonları ve quantity-control öğelerini seç
        const addToCartButtons = document.querySelectorAll('.add-to-cart-button');
        const quantityControls = document.querySelectorAll('.quantity-control-content');
        const actionsList = document.querySelectorAll('.actions');
        const quantityTrashButtons = document.querySelectorAll('.quantity-trash');

        // Her bir add-to-cart-button için işlemi ayarla
        addToCartButtons.forEach((button, index) => {
            button.addEventListener('click', function () {
                if (index < actionsList.length && index < quantityControls.length) {
                    const actions = actionsList[index];
                    const quantityControl = quantityControls[index];

                    actions.style.display = 'none';
                    quantityControl.classList.add('show');
                    quantityControl.style.display = 'block'; // Görünürlüğü ayarla
                }
            });
        });

        // Her quantity-trash butonuna tıklama olayı ekle
        quantityTrashButtons.forEach((button, index) => {
            button.addEventListener('click', function () {
                if (index < quantityControls.length && index < actionsList.length) {
                    const quantityControl = quantityControls[index];
                    const actions = actionsList[index];

                    quantityControl.style.display = 'none';
                    actions.style.display = 'block'; // Görünürlüğü ayarla
                }
            });
        });
    });







*/
    document.addEventListener('DOMContentLoaded', function () {
        // Butonları ve öğeleri seç
        const addToCartButtons = document.querySelectorAll('.add-to-cart-button');
        const quantityControls = document.querySelectorAll('.quantity-control-content');
        const actionsList = document.querySelectorAll('.actions');
        const quantityInputs = document.querySelectorAll('[data-quantity-input]');
        const quantityTrashButtons = document.querySelectorAll('.index-quantity-trash .quantity-trash');
        const quantityMinusButtons = document.querySelectorAll('.quantity-minus');

        // Fonksiyon: input değerine göre buton görünürlüğünü güncelle
        function updateQuantityControl(index) {
            const quantityInput = quantityInputs[index];
            const trashButton = quantityTrashButtons[index];
            const minusButton = quantityMinusButtons[index];

            if (!quantityInput) return; // Eğer quantityInput mevcut değilse, çık

            // console.log() ile değeri kontrol edelim
            console.log(`Input value: ${quantityInput.value}`);

            if (parseInt(quantityInput.value, 10) < 1) {
                trashButton.style.display = 'block';
                minusButton.style.display = 'none';
            }
        }

        // Ekleme butonları için tıklama olayı ayarla
        addToCartButtons.forEach((button, index) => {
            button.addEventListener('click', function () {
                if (index < actionsList.length && index < quantityControls.length) {
                    const actions = actionsList[index];
                    const quantityControl = quantityControls[index];

                    actions.style.display = 'none';
                    quantityControl.classList.add('show');
                    quantityControl.style.display = 'block';

                    updateQuantityControl(index); // İlk görünüm güncellemesi
                }
            });
        });

        // Artış butonları için tıklama olayı ayarla
        document.querySelectorAll('[data-quantity-plus]').forEach((button, index) => {
            button.addEventListener('click', function () {
                const quantityInput = quantityInputs[index];
                if (quantityInput) {

                    updateQuantityControl(index); // Görünürlüğü güncelle
                }
            });
        });

        // Azaltma butonları için tıklama olayı ayarla
        document.querySelectorAll('[data-quantity-minus]').forEach((button, index) => {
            button.addEventListener('click', function () {
                const quantityInput = quantityInputs[index];
                if (quantityInput && parseInt(quantityInput.value, 10) > 1) {

                    updateQuantityControl(index); // Görünürlüğü güncelle
                }
            });
        });

        // Çöp butonları için tıklama olayı ayarla
        quantityTrashButtons.forEach((button, index) => {
            button.addEventListener('click', function () {
                if (index < quantityControls.length && index < actionsList.length) {
                    const quantityControl = quantityControls[index];
                    const actions = actionsList[index];

                    quantityControl.style.display = 'none';
                    actions.style.display = 'block';
                }
            });
        });

        // Sayfa yüklendiğinde tüm ikonları güncelle
        quantityInputs.forEach((input, index) => {
            updateQuantityControl(index);
        });
    });
    /*
    document.addEventListener('DOMContentLoaded', () => {
        const favourites = document.querySelectorAll('.favourite');

        favourites.forEach(favourite => {
            let clickCount = 0;
            const alert1Id = favourite.getAttribute('data-alert1-id');
            const alert2Id = favourite.getAttribute('data-alert2-id');

            favourite.addEventListener('click', () => {
                const svg = favourite.querySelector('svg');
                const currentDataPrefix = svg.getAttribute('data-prefix');

                // SVG'yi güncelle
                if (currentDataPrefix === 'fal') {
                    svg.setAttribute('data-prefix', 'fas');
                    svg.setAttribute('data-icon', 'heart');
                    svg.innerHTML = `<path fill="#ea1a65" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"></path>`;

                    // İlk tıklamada ilk alert'i göster
                    document.getElementById(alert1Id).style.display = 'block';
                    document.getElementById(alert2Id).style.display = 'none';
                    clickCount++;

                } else {
                    svg.setAttribute('data-prefix', 'fal');
                    svg.setAttribute('data-icon', 'heart');
                    svg.innerHTML = `<path fill="currentColor" d="M255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L255.1 96zM255.1 141.3L221.4 106.6C196.1 81.31 160 69.77 124.7 75.66C71.21 84.58 31.1 130.9 31.1 185.1V190.9C31.1 223.6 45.55 254.7 69.42 277L250.1 445.7C251.7 447.2 253.8 448 255.1 448C258.2 448 260.3 447.2 261.9 445.7L442.6 277C466.4 254.7 480 223.6 480 190.9V185.1C480 130.9 440.8 84.58 387.3 75.66C351.1 69.77 315.9 81.31 290.6 106.6L255.1 141.3z"></path>`;

                    // İkinci tıklamada ikinci alert'i göster
                    document.getElementById(alert1Id).style.display = 'none';
                    document.getElementById(alert2Id).style.display = 'block';
                    clickCount++;
                }
            });
        });
    });
*/
    document.addEventListener('DOMContentLoaded', () => {
        const favourites = document.querySelectorAll('.favourite');

        favourites.forEach(favourite => {
            let clickCount = 0;
            const alert1Id = favourite.getAttribute('data-alert1-id');
            const alert2Id = favourite.getAttribute('data-alert2-id');

            favourite.addEventListener('click', () => {
                const svg = favourite.querySelector('svg');
                const currentDataPrefix = svg.getAttribute('data-prefix');

                // SVG'yi güncelle
                if (currentDataPrefix === 'fal') {
                    svg.setAttribute('data-prefix', 'fas');
                    svg.setAttribute('data-icon', 'heart');
                    svg.innerHTML = `<path fill="#ea1a65" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"></path>`;

                    // İlk tıklamada ilk alert'i göster
                    const alert1 = document.getElementById(alert1Id);
                    const alert2 = document.getElementById(alert2Id);

                    alert1.classList.add('show');
                    alert2.classList.remove('show');

                    setTimeout(() => {
                        alert1.classList.remove('show');
                    }, 3000);

                } else {
                    svg.setAttribute('data-prefix', 'fal');
                    svg.setAttribute('data-icon', 'heart');
                    svg.innerHTML = `<path fill="currentColor" d="M255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L255.1 96zM255.1 141.3L221.4 106.6C196.1 81.31 160 69.77 124.7 75.66C71.21 84.58 31.1 130.9 31.1 185.1V190.9C31.1 223.6 45.55 254.7 69.42 277L250.1 445.7C251.7 447.2 253.8 448 255.1 448C258.2 448 260.3 447.2 261.9 445.7L442.6 277C466.4 254.7 480 223.6 480 190.9V185.1C480 130.9 440.8 84.58 387.3 75.66C351.1 69.77 315.9 81.31 290.6 106.6L255.1 141.3z"></path>`;

                    // İkinci tıklamada ikinci alert'i göster
                    const alert1 = document.getElementById(alert1Id);
                    const alert2 = document.getElementById(alert2Id);

                    alert1.classList.remove('show');
                    alert2.classList.add('show');

                    setTimeout(() => {
                        alert2.classList.remove('show');
                    }, 3000);
                }
            });
        });
    });


    (function () {
        "use strict";

        function Guantity($root) {
            const quantity_input = $root.find("[data-quantity-input]");
            const quantity_minus = $root.find("[data-quantity-minus]");
            const quantity_plus = $root.find("[data-quantity-plus]");
            const quantity_display = $root.find("[data-quantity-display]");
            const quantity_trash = $root.find(" .quantity-trash"); // Trash butonunu seç

            var quantity_ = parseInt(quantity_input.val(), 10) || 1;

            quantity_display.text(quantity_ + ' adet');

            // Butonların görünürlüğünü güncelleme fonksiyonu
            function updateVisibility() {
                if (quantity_ <= 1) {
                    quantity_trash.show(); // 1 veya daha azsa trash butonunu göster
                    quantity_minus.hide(); // 1 veya daha azsa minus butonunu gizle
                } else {
                    quantity_trash.hide(); // 1'den büyükse trash butonunu gizle
                    quantity_minus.show(); // 1'den büyükse minus butonunu göster
                }
            }

            updateVisibility(); // Başlangıçta görünürlüğü güncelle

            $(quantity_minus).click(function () {
                if (quantity_ > 1) { // 1'den küçük olmamasını kontrol et
                    quantity_display.text(--quantity_ + ' adet');
                    quantity_input.val(quantity_);
                    updateVisibility(); // Buton görünürlüğünü güncelle
                }
            });

            $(quantity_plus).click(function () {
                quantity_display.text(++quantity_ + ' adet');
                quantity_input.val(quantity_);
                updateVisibility(); // Buton görünürlüğünü güncelle
            });
        }

        $.fn.Guantity = jQueryPlugin("Guantity", Guantity);
        $("[data-quantity]").Guantity();
    })();


    document.addEventListener('DOMContentLoaded', function () {
        // Header'daki trash butonuna tıklama olayını dinleyin
        document.querySelectorAll('.header-quantity-trash .quantity-trash').forEach(button => {
            button.addEventListener('click', function () {
                // Silinecek <li> öğesini bulmak için en yakın <li> öğesini hedefleyin
                const listItem = this.closest('li');
                if (listItem) {
                    listItem.remove(); // <li> öğesini sil
                }
            });
        });
    });

</script>
</body>
</html>
