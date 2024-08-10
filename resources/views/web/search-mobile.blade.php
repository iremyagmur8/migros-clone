@extends('layouts.app', ['displayNone' =>'d-none'])
@section('image','')
@section('title','Continental Wholesale')
@section('desc','')
    <div style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
        <div class="search-mobile-wrapper d-flex p-1 justify-content-center align-items-center">
            <a class="text-color-grey" href="/">
            <svg style="height: 1.5em;" role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-left"
                 class="svg-inline--fa fa-arrow-left me-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor"
                      d="M447.1 256c0 13.25-10.76 24.01-24.01 24.01H83.9l132.7 126.6c9.625 9.156 9.969 24.41 .8125 33.94c-9.156 9.594-24.34 9.938-33.94 .8125l-176-168C2.695 268.9 .0078 262.6 .0078 256S2.695 243.2 7.445 238.6l176-168C193 61.51 208.2 61.85 217.4 71.45c9.156 9.5 8.812 24.75-.8125 33.94l-132.7 126.6h340.1C437.2 232 447.1 242.8 447.1 256z"></path>
            </svg>
            </a>
            <div role="searchbox w-100">
                <div class="migros mobile-search m-0 position-relative">
                    <input
                           id="product-search-combobox--trigger" type="text"
                           role="combobox"
                           class="mat-autocomplete-trigger subtitle-2 ng-pristine ng-valid ng-touched"
                           placeholder="" autocomplete="off"
                    >
                </div>
            </div>
        </div>
    </div>






