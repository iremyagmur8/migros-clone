@extends('layouts.app', ['displayNone' => 'd-none d-md-block' ])
@section('image','')
@section('title','Continental Wholesale')
@section('desc','')
@section('content')

    <link rel="stylesheet" href="/assetWeb/asweb/vendor/node_modules/css/simplebar.min.css">
    <div class="modal fade" id="product-short" tabindex="-1" aria-labelledby="modalBasicLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-0">
                <div class="modal-header border-0 bg-orange rounded-0">
                    <h5 class="modal-title text-white">Sırala</h5>
                    <!--Close button-->
                    <button type="button"
                            class="btn btn-outline-white p-0 border-2 width-3x height-3x rounded-circle flex-center z-index-1"
                            data-bs-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x fs-5"></i>
                    </button>
                </div>
                <div class="modal-body py-3 border-0">
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" checked type="radio" name="flexRadioDefault"
                                   id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Çok Satanlar
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Satın Aldıklarıma Göre
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                İndirim Yüzdesine Göre
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                Önce En Düşük Fiyat
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                            <label class="form-check-label" for="flexRadioDefault5">
                                Önce En Yüksek Fiyat
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                            <label class="form-check-label" for="flexRadioDefault6">
                                İndirim Miktarına Göre
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light border-top">
                    <button class="btn-orange btn w-100 "><span class="text-white">Sırala</span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="product-filter" tabindex="-1" aria-labelledby="modalBasicLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-0">
                <div class="modal-header border-0 bg-orange rounded-0">
                    <h5 class="modal-title text-white">Filtrele</h5>
                    <!--Close button-->
                    <button type="button"
                            class="btn btn-outline-white p-0 border-2 width-3x height-3x rounded-circle flex-center z-index-1"
                            data-bs-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x fs-5"></i>
                    </button>
                </div>
                <div class="modal-body py-3 border-0">
                    <div>
                        <ul class="list-unstyled">
                            <li class="mb-4">
                                <a class="fs-5 text-black" href="#product-filter-categories" data-bs-toggle="modal"
                                   aria-expanded="false">
                                    <svg width="30" role="img" aria-hidden="true" focusable="false" data-prefix="fas"
                                         data-icon="chevron-right" class="svg-inline--fa fa-chevron-right"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path fill="currentColor"
                                              d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                    </svg>
                                    Kategoriler
                                </a>
                            </li>
                            <li class="mb-4">
                                <a  href="#product-filter-categories" data-bs-toggle="modal"
                                    aria-expanded="false" class="fs-5 text-black">
                                    <svg width="30" role="img" aria-hidden="true" focusable="false" data-prefix="fas"
                                         data-icon="chevron-right" class="svg-inline--fa fa-chevron-right"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path fill="currentColor"
                                              d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                    </svg>
                                    İndirimler
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="#product-filter-categories" data-bs-toggle="modal"
                                   aria-expanded="false" class="fs-5 text-black">
                                    <svg width="30" role="img" aria-hidden="true" focusable="false" data-prefix="fas"
                                         data-icon="chevron-right" class="svg-inline--fa fa-chevron-right"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path fill="currentColor"
                                              d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                    </svg>
                                    Markalar
                                </a>
                            </li>
                            <li>
                                <a  href="#product-filter-categories" data-bs-toggle="modal"
                                    aria-expanded="false" class="fs-5 text-black">
                                    <svg width="30" role="img" aria-hidden="true" focusable="false" data-prefix="fas"
                                         data-icon="chevron-right" class="svg-inline--fa fa-chevron-right"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path fill="currentColor"
                                              d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                    </svg>
                                    Sağlıklı Yaşam
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer bg-light border-top">
                    <button class="btn-gray-200 btn w-100 "><span class="text-color-grey fs-8 fw-bold">Ürünleri Görüntüle (1318)</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="product-filter-categories" tabindex="-1" aria-labelledby="modalBasicLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-0">
                <div class="modal-header border-0 bg-orange rounded-0">
                    <h5 class="modal-title text-white">Kategoriler</h5>
                    <!--Close button-->
                    <button type="button"
                            class="btn btn-outline-white p-0 border-2 width-3x height-3x rounded-circle flex-center z-index-1"
                            data-bs-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x fs-5"></i>
                    </button>
                </div>
                <div class="modal-body py-3 border-0">
                    <div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex flex-column">
                                <label class="form-check-label fs-6" for="flexCheckDefault">Meyve, Sebze</label>
                                <span class="text-color-grey fw-bold small">(6)</span>
                            </div>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <div class="d-flex flex-column">
                                <label class="form-check-label fs-6" for="flexCheckDefaul1t">Temel Gıda</label>
                                <span class="text-color-grey fw-bold small">(6)</span>
                            </div>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <div class="d-flex flex-column">
                                <label class="form-check-label fs-6" for="flexCheckDefault2"> Meze, Hazır Yemek, Donuk</label>
                                <span class="text-color-grey fw-bold small">(23)</span>
                            </div>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <div class="d-flex flex-column">
                                <label class="form-check-label fs-6" for="flexCheckDefault3">İçecek</label>
                                <span class="text-color-grey fw-bold small">(118)</span>
                            </div>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <div class="d-flex flex-column">
                                <label class="form-check-label fs-6" for="flexCheckDefault4">Dondurma</label>
                                <span class="text-color-grey fw-bold small">(18)</span>
                            </div>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <div class="d-flex flex-column">
                                <label class="form-check-label fs-6" for="flexCheckDefault5">Atıştırmalık</label>
                                <span class="text-color-grey fw-bold small">(171)</span>
                            </div>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <div class="d-flex flex-column">
                                <label class="form-check-label fs-6" for="flexCheckDefault6">Fırın, Pastane</label>
                                <span class="text-color-grey fw-bold small">(18)</span>
                            </div>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <div class="d-flex flex-column">
                                <label class="form-check-label fs-6" for="flexCheckDefault7">Bebek</label>
                                <span class="text-color-grey fw-bold small">(48)</span>
                            </div>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <div class="d-flex flex-column">
                                <label class="form-check-label fs-6" for="flexCheckDefault8">Deterjan, Temizlik</label>
                                <span class="text-color-grey fw-bold small">(48)</span>
                            </div>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <div class="d-flex flex-column">
                                <label class="form-check-label fs-6" for="flexCheckDefault9">Kağıt, Islak Mendil</label>
                                <span class="text-color-grey fw-bold small">(35)</span>
                            </div>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9">
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light border-top products-filter-categories-buttons">
                    <div class="d-flex align-items-center justify-content-between gap-2">
                        <div class="col-6">
                            <button class="btn-gray-200 btn w-100 "><span class="text-color-grey fs-8 fw-bold">Filtreyi Temizle</span>
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="btn-gray-200 btn w-100 "><span class="text-color-grey fs-8 fw-bold">Ürünleri Görüntüle (1318)</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="mobile-header mobile-only">
        <div class="breadcrumb mobile-only">
            <a class="text-white" href="/">
                <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-left"
                     class="svg-inline--fa fa-arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor"
                          d="M447.1 256c0 13.25-10.76 24.01-24.01 24.01H83.9l132.7 126.6c9.625 9.156 9.969 24.41 .8125 33.94c-9.156 9.594-24.34 9.938-33.94 .8125l-176-168C2.695 268.9 .0078 262.6 .0078 256S2.695 243.2 7.445 238.6l176-168C193 61.51 208.2 61.85 217.4 71.45c9.156 9.5 8.812 24.75-.8125 33.94l-132.7 126.6h340.1C437.2 232 447.1 242.8 447.1 256z"></path>
                </svg>
            </a>
            <div class="content"><a href="/"><h3>Tüm İndirimli Ürünler</h3></a>
                <div class="mat-caption-normal text-color-white fw-semibold">1320 sonuç bulundu</div><!---->
            </div>
        </div>
    </div>
    <div class="mat-caption-normal mobile-only mobile-filter-sort-row">
        <div>
            <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="sliders"
                 class="svg-inline--fa fa-sliders" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor"
                      d="M0 416C0 402.7 10.75 392 24 392H83.66C93.86 359.5 124.2 336 160 336C195.8 336 226.1 359.5 236.3 392H488C501.3 392 512 402.7 512 416C512 429.3 501.3 440 488 440H236.3C226.1 472.5 195.8 496 160 496C124.2 496 93.86 472.5 83.66 440H24C10.75 440 0 429.3 0 416zM192 416C192 398.3 177.7 384 160 384C142.3 384 128 398.3 128 416C128 433.7 142.3 448 160 448C177.7 448 192 433.7 192 416zM352 176C387.8 176 418.1 199.5 428.3 232H488C501.3 232 512 242.7 512 256C512 269.3 501.3 280 488 280H428.3C418.1 312.5 387.8 336 352 336C316.2 336 285.9 312.5 275.7 280H24C10.75 280 0 269.3 0 256C0 242.7 10.75 232 24 232H275.7C285.9 199.5 316.2 176 352 176zM384 256C384 238.3 369.7 224 352 224C334.3 224 320 238.3 320 256C320 273.7 334.3 288 352 288C369.7 288 384 273.7 384 256zM488 72C501.3 72 512 82.75 512 96C512 109.3 501.3 120 488 120H268.3C258.1 152.5 227.8 176 192 176C156.2 176 125.9 152.5 115.7 120H24C10.75 120 0 109.3 0 96C0 82.75 10.75 72 24 72H115.7C125.9 39.54 156.2 16 192 16C227.8 16 258.1 39.54 268.3 72H488zM160 96C160 113.7 174.3 128 192 128C209.7 128 224 113.7 224 96C224 78.33 209.7 64 192 64C174.3 64 160 78.33 160 96z"></path>
            </svg>
            <a class="text-color-black" href="#product-filter" data-bs-toggle="modal" aria-expanded="false">
                <span class="fw-bold"> Filtrele</span>
            </a>
        </div>
        <div>
            <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-down-arrow-up"
                 class="svg-inline--fa fa-arrow-down-arrow-up" xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 512 512">
                <path fill="currentColor"
                      d="M150.6 470.6l96-96c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 370.7V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V370.7L54.6 329.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l96 96c12.5 12.5 32.8 12.5 45.3 0zm352-333.3l-96-96c-12.5-12.5-32.8-12.5-45.3 0l-96 96c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L352 141.3V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.3l41.4 41.4c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3z"></path>
            </svg>
            <a class="text-color-black" href="#product-short" data-bs-toggle="modal" aria-expanded="false">
                <span class="fw-bold">Sırala</span>
            </a>
        </div>
    </div>
    <div class="mobile-sub-header d-block d-md-none">
        @include('inc.breadcrumb' , ['padding'=>'p-0'])
        <a class="mobile-sub-category mat-caption text-color-black ng-star-inserted" ngx-ql=""
           href="#!"> Meyve, Sebze <span class="overline text-color-grey  fw-bold">(6)</span></a>
        <a class="mobile-sub-category mat-caption text-color-black ng-star-inserted" ngx-ql=""
           href="#!"> Temel Gıda <span class="overline text-color-grey fw-bold">(92)</span></a>
        <a class="mobile-sub-category mat-caption text-color-black ng-star-inserted" ngx-ql=""
           href="#!"> Meze, Hazır Yemek, Donuk <span class="overline text-color-grey fw-bold">(23)</span></a>
        <a class="mobile-sub-category mat-caption text-color-black ng-star-inserted" ngx-ql=""
           href="#!"> İçecek <span class="overline text-color-grey fw-bold">(118)</span></a>
        <a class="mobile-sub-category mat-caption text-color-black ng-star-inserted" ngx-ql=""
           href="#!"> Atıştırmalık <span class="overline text-color-grey fw-bold">(172)</span></a>
        <a class="mobile-sub-category mat-caption text-color-black ng-star-inserted" ngx-ql=""
           href="#!"> Fırın, Pastane <span class="overline text-color-grey fw-bold">(18)</span></a>
        <a class="mobile-sub-category mat-caption text-color-black ng-star-inserted" ngx-ql=""
           href="#!"> Deterjan, Temizlik <span class="overline text-color-grey fw-bold">(277)</span></a>
        <a class="mobile-sub-category mat-caption text-color-black ng-star-inserted" ngx-ql=""
           href="#!"> Kağıt, Islak Mendil <span
                class="overline text-color-grey">(35)</span></a>
        <a class="mobile-sub-category mat-caption text-color-black ng-star-inserted" ngx-ql=""
           href="#!"> Kişisel Bakım, Kozmetik, Sağlık <span
                class="overline text-color-grey">(226)</span></a>
        <a class="mobile-sub-category mat-caption text-color-black ng-star-inserted" ngx-ql=""
           href="#!"> Ev, Yaşam <span class="overline text-color-grey fw-bold">(128)</span></a>
        <a class="mobile-sub-category mat-caption text-color-black ng-star-inserted" ngx-ql=""
           href="#!"> Kitap, Kırtasiye, Oyuncak <span
                class="overline text-color-grey">(11)</span>
        </a>
        <a class="mobile-sub-category mat-caption text-color-black ng-star-inserted" ngx-ql=""
           href="#!"> Pet Shop <span class="overline text-color-grey fw-bold">(30)</span></a>
    </div>
    <div class="d-none d-md-block">
        @include('inc.breadcrumb' )

    </div>
    <section class="position-relative bg-white overflow-hidden">
        <div class="container pb-2 pb-lg-3 position-relative">
            <div class="row justify-content-between">
                <div class="col-md-3">
                    @include('inc.product-sidebar')
                </div>
                <div class="col-md-9 ">
                    <div class="d-none d-md-block">
                        <div class="row mb-5 align-items-center">
                            <div class="col-md-12 mb-4">
                                @include('inc.product-banner-template-2')

                            </div>
                            <div class="col-md-4 ms-auto">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ps-2 arrange-select">
                                        <select name="shortBy" class="form-control "
                                                data-choices='{"searchEnabled":false,"itemSelectText":"", "shouldSort":false}'
                                                id="product-shortby">
                                            <option value="Çok Satanlar" selected> Çok Satanlar</option>
                                            <option value="Satın Aldıklarıma Göre"> Satın Aldıklarıma Göre</option>
                                            <option value="İndirim Yüzdesine Göre"> İndirim Yüzdesine Göre</option>
                                            <option value="Önce En Düşük Fiyat"> Önce En Düşük Fiyat</option>
                                            <option value="Önce En Yüksek Fiyat">Önce En Yüksek Fiyat</option>
                                            <option value="İndirim Miktarına Göre">İndirim Miktarına Göre</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5 products-comp">
                        @for($i=0; $i<3; $i++)
                            <div class="col-md-3 mb-4 col-6">
                                @include('inc.product-1-template')
                            </div>
                        @endfor
                        @for($i=0; $i<2; $i++)
                            <div class="col-md-3 mb-4 col-6">
                                @include('inc.product-2-template')
                            </div>
                        @endfor
                        @for($i=0; $i<4; $i++)
                            <div class="col-md-3 mb-4 col-6">
                                @include('inc.product-3-template')
                            </div>
                        @endfor
                        @for($i=0; $i<5; $i++)
                            <div class="col-md-3 mb-4 col-6">
                                @include('inc.product-4-template')
                            </div>
                        @endfor
                        @for($i=0; $i<2; $i++)
                            <div class="col-md-3 mb-4 col-6">
                                @include('inc.product-5-template')
                            </div>
                        @endfor
                    </div>
                    <div class="d-grid d-sm-flex justify-content-sm-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <svg width="13" role="img" aria-hidden="true" focusable="false"
                                             data-prefix="fas"
                                             data-icon="chevrons-left" class="svg-inline--fa fa-chevrons-left"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                  d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192zm384-192l-192 192c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L301.3 256 470.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <svg width="13" role="img" aria-hidden="true" focusable="false"
                                             data-prefix="fas"
                                             data-icon="chevron-left" class="svg-inline--fa fa-chevron-left"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path fill="currentColor"
                                                  d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item number-page"><a class="page-link" href="#">2</a></li>
                                <li class="page-item number-page"><a class="page-link" href="#">3</a></li>
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <svg width="13" role="img" aria-hidden="true" focusable="false"
                                             data-prefix="fas" data-icon="chevron-right"
                                             class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 384 512">
                                            <path fill="currentColor"
                                                  d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <svg width="13" role="img" aria-hidden="true" focusable="false"
                                             data-prefix="fas" data-icon="chevrons-right"
                                             class="svg-inline--fa fa-chevrons-right" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                  d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-192-192c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 233.4 425.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l192-192zm-384 192l192-192c12.5-12.5 12.5-32.8 0-45.3l-192-192c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 41.4 425.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/assetWeb/asweb/vendor/node_modules/js/simplebar.min.js"></script>
@endsection



