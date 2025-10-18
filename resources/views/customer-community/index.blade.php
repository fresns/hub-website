@extends('layouts.layout')

@section('title', __('fresns.community_title'))
@section('keywords', __('fresns.community_keywords'))
@section('description', __('fresns.community_description'))

@section('header')
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <div class="navbar-brand d-flex align-items-center">
                <img src="https://assets.fresns.com/images/icons/fresns.png" alt="Fresns" width="36" height="36">
                <span class="fs-2 fw-semibold fs-title me-1 ms-2">Fresns</span>

                {{-- <button class="btn btn-warning btn-sm dropdown-toggle ms-2 mt-1 animate__animated animate__bounce" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavigator" aria-controls="offcanvasNavigator">{{ __('fresns.solution_community_text') }}</button> --}}

                <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill ms-2 mt-1 animate__animated animate__bounce">{{ __('fresns.community_hero_text') }}</span>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mt-3 mt-lg-0 ps-4 ps-lg-0">
                    <li class="nav-item me-0 me-lg-3">
                        <a class="nav-link" href="#intro">{{ __('fresns.nav_intro') }}</a>
                    </li>
                    <li class="nav-item me-0 me-lg-3">
                        <a class="nav-link" href="#value">{{ __('fresns.nav_value') }}</a>
                    </li>
                    <li class="nav-item me-0 me-lg-3">
                        <a class="nav-link" href="#features">{{ __('fresns.nav_features') }}</a>
                    </li>
                    <li class="nav-item me-0 me-lg-3">
                        <a class="nav-link" href="#examples">{{ __('fresns.nav_examples') }}</a>
                    </li>
                    <li class="nav-item me-0 me-lg-3">
                        <a class="nav-link" href="#about">{{ __('fresns.nav_about') }}</a>
                    </li>
                    <li class="dropdown ms-0 ms-lg-4 my-3 my-lg-0">
                        <button class="btn btn-outline-dark btn-sm mt-1 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-translate"></i>
                            {{ $currentLocaleName }}
                        </button>
                        <ul class="dropdown-menu">
                            @foreach(config('app.locales') as $code => $name)
                                <li>
                                    <a class="dropdown-item @if ($code == App::getLocale()) active @endif" href="{{ LaravelLocalization::getLocalizedURL($code) }}" hreflang="{{ str_replace('zh-h', 'zh-H', $code) }}">
                                        {{ $name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <section class="customer-service-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="ms-5 me-5 me-md-0 mt-5 mt-md-0 mb-0 mb-md-5">
                        <h1 class="fw-semibold animate__animated animate__slideInDown">{{ __('fresns.community_hero_text') }}</h1>
                        <p class="text-body-tertiary fs-4 fw-light mt-3 animate__animated animate__slideInDown">{{ __('fresns.community_hero_tagline') }}</p>
                        <p class="mt-4"><a class="btn btn-primary btn-lg px-4 animate__animated animate__slideInDown" href="https://fresns.org/" target="_blank" role="button">{{ __('fresns.get_started') }}</a></p>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="/assets/images/customer-service.png" alt="Customer Service" class="img-fluid animate__animated animate__slideInDown">
                </div>
            </div>

            <div id="intro"></div>
        </div>
    </section>

    <section class="intro">
        <div class="container fs-py">
            <div class="row">
                <div class="col-md-4 pe-3 pe-md-5 d-none d-md-block">
                    <img src="/assets/images/intro.png" alt="customer community intro" class="img-fluid">
                </div>
                <div class="col-md-8 px-4 px-md-0">
                    <h3 class="fs-title mt-4 mt-sm-0 mt-xl-4 mb-4">{{ __('fresns.community_intro_title') }}</h3>
                    <p class="text-secondary fw-light fs-5">{{ __('fresns.community_intro_content') }}</p>
                    <p class="text-secondary fw-light fs-5">{{ __('fresns.community_intro_content_2') }}</p>
                </div>
            </div>
            <div id="value"></div>
        </div>
    </section>

    <section class="value mt-4">
        <div class="container fs-pb">
            <div class="row">
                <div class="col-md-6 order-md-1 ps-3 ps-md-5">
                    <img src="/assets/images/value.png" alt="customer community value" class="img-fluid">
                </div>
                <div class="col-md-6 order-md-0">
                    <h3 class="fs-title mt-4 mt-sm-0 mt-xl-4 mb-4">{{ __('fresns.community_value_title') }}</h3>
                    <div class="accordion" id="accordionValue">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{{ __('fresns.community_value_1_title') }}</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionValue">
                                <div class="accordion-body">
                                    <p>{{ __('fresns.community_value_1_content') }}</p>
                                    <p>{{ __('fresns.community_value_1_content_2') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">{{ __('fresns.community_value_2_title') }}</button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionValue">
                                <div class="accordion-body">
                                    <p>{{ __('fresns.community_value_2_content') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">{{ __('fresns.community_value_3_title') }}</button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionValue">
                                <div class="accordion-body">
                                    <p>{{ __('fresns.community_value_3_content') }}</p>
                                    <p>{{ __('fresns.community_value_3_content_2') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">{{ __('fresns.community_value_4_title') }}</button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionValue">
                                <div class="accordion-body">
                                    <p>{{ __('fresns.community_value_4_content') }}</p>
                                    <p>{{ __('fresns.community_value_4_content_2') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">{{ __('fresns.community_value_5_title') }}</button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionValue">
                                <div class="accordion-body">
                                    <p>{{ __('fresns.community_value_5_content') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">{{ __('fresns.community_value_6_title') }}</button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionValue">
                                <div class="accordion-body">
                                    <p>{{ __('fresns.community_value_6_content') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">{{ __('fresns.community_value_7_title') }}</button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionValue">
                                <div class="accordion-body">
                                    <p>{{ __('fresns.community_value_7_content') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">{{ __('fresns.community_value_8_title') }}</button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionValue">
                                <div class="accordion-body">
                                    <p>{{ __('fresns.community_value_8_content') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">{{ __('fresns.community_value_9_title') }}</button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionValue">
                                <div class="accordion-body">
                                    <p>{{ __('fresns.community_value_9_content') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="features"></div>
        </div>
    </section>

    <section class="fs-bg">
        <div class="container fs-py">
            <h3 class="fs-title mt-0 mb-5">{{ __('fresns.community_features_title') }}</h3>
            <div class="row px-2">
                <div class="col-md-4 mb-4">
                    <h4 class="fs-5 text-body-emphasis">{{ __('fresns.community_features_open_source_title') }}</h4>
                    <p>{{ __('fresns.community_features_open_source_content') }}</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h4 class="fs-5 text-body-emphasis">{{ __('fresns.community_features_versatility_title') }}</h4>
                    <p>{{ __('fresns.community_features_versatility_content') }}</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h4 class="fs-5 text-body-emphasis">{{ __('fresns.community_features_freedom_title') }}</h4>
                    <p>{{ __('fresns.community_features_freedom_content') }}</p>
                </div>
                {{-- <div class="col-md-4 mb-4">
                    <h4 class="fs-5 text-body-emphasis">{{ __('fresns.community_features_assurance_title') }}</h4>
                    <p>{{ __('fresns.community_features_assurance_content') }}</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h4 class="fs-5 text-body-emphasis">{{ __('fresns.community_features_convenience_title') }}</h4>
                    <p>{{ __('fresns.community_features_convenience_content') }}</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h4 class="fs-5 text-body-emphasis">{{ __('fresns.community_features_security_title') }}</h4>
                    <p>{{ __('fresns.community_features_security_content') }}</p>
                </div> --}}
            </div>
        </div>
    </section>

    <div id="examples"></div>
    <section>
        <div class="container fs-py">
            <div class="row">
                <div class="col-md-6 p-3 p-md-5">
                    <div class="mt-0 mt-md-5 pb-3">
                        <h3 class="fs-title fs-1 mb-3">{{ __('fresns.community_examples_title') }}</h3>
                        <p class="fs-5">{{ __('fresns.community_examples_description') }}</p>
                    </div>
                    <div class="mt-0 mt-md-5">
                        <p><img src="https://assets.fresns.com/images/wikis/previews/ForumQ.png" alt="Amazon" class="img-fluid border rounded"></p>
                        <p class="mb-2 text-warning-emphasis"><i class="bi bi-dash-lg"></i> Support Forum</p>
                        <p>{{ __('fresns.community_examples_forum_description') }}</p>
                    </div>
                </div>
                <div class="col-md-6 p-3 p-md-5">
                    <div class="mb-5">
                        <p><img src="https://assets.fresns.com/images/wikis/previews/Moments.png" alt="Shopee Lazada" class="img-fluid border rounded"></p>
                        <p class="mb-2 text-danger-emphasis"><i class="bi bi-dash-lg"></i> Social Network</p>
                        <p>{{ __('fresns.community_examples_social_description') }}</p>
                    </div>
                    <div class="pt-0 pt-md-5">
                        <p><img src="https://assets.fresns.com/images/wikis/previews/ForumX.png" alt="China E-commerce" class="img-fluid border rounded"></p>
                        <p class="mb-2 text-info-emphasis"><i class="bi bi-dash-lg"></i> BBS</p>
                        <p>{{ __('fresns.community_examples_bbs_description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
