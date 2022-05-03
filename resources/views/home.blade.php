@extends('layouts.app')

@section('title', __('Home'))
@php
    $langs = [
        'ru' =>'RU',
        'en' =>'EN',
        'kk' =>'KZ',
        ];
@endphp
@section('content')

    <div class="frontPage">
        <div class="container">
            <div class="header-content">
                <div class="header-left">
                    <div class="logo">
                        <img src="{{ asset('assets/img/main-logo.png') }}">
                    </div>
                    <div class="lang">
                        <select id="lang">
                            @foreach($langs as $key => $value)
                                <option
                                    value="{{ $key }}" {{ App::getLocale() == $key ? 'selected': '' }}>{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="frontPage-contact no-mobile">
                        @if($phones)
                            <a href="tel:{{ $phones->first()->content }}"><img
                                    src="{{ asset('assets/img/phone.png') }}"></a>
                        @endif
                        @if($whatsapp)
                            <a href="https://api.whatsapp.com/send?phone={{ $whatsapp->first()->content }}"><img
                                    src="{{ asset('assets/img/whatsapp.png') }}"></a>
                        @endif
                        @if($emails)
                            <a href="mailto:{{ $emails->first()->content }}"><img
                                    src="{{ asset('assets/img/mail.png') }}"></a>
                        @endif
                        @if($cabinet)
                            <a href="{{ $cabinet->first()->content }}" target="_blank"><img
                                    src="{{ asset('assets/img/graph.png') }}"></a>
                        @endif

                    </div>
                </div>
                <div class="header-right">
                    @if($cabinet)
                        <button class="cabinet-btn no-mobile"><a href="{{ $cabinet->first()->content }}"
                                                                 target="_blank">@lang('Personal Area')</a></button>
                    @endif

                    <img class="no-mobile" src="{{ asset('assets/img/burger.png') }}" id="burger">
                    <img class="mobile" src="{{ asset('assets/img/burger-mobile.png') }}" id="burger1">
                </div>

            </div>
        </div>

        @if($text)
            <div class="ticker-wrap" id="ticker">
                <div class="ticker">
                    <div class="ticker__item">{{ $text->first()->content }}</div>
                </div>
            </div>
            <div class="ticker-wrap" id="ticker2">
                <div class="ticker">
                    <div class="ticker__item ticker_right">{{ $text->first()->content }}</div>
                </div>
            </div>
        @endif

        <div class="container">
            <div class="frontPage-content">
                <div class="frontPage-info">
                    <div class="frontPage-left">
                        <div class="frontPage-text">{{ $main_block->title }}</div>
                        <div class="frontPage-subtext">{{ $main_block->description }}
                            <div class="more-info" id="moreInfo">
                                {!! $main_block->content !!}
                            </div>
                        </div>

                        <div class="frontPage-action">
                            <button class="frontPage-btn" id="open-modal">@lang('Leave request')</button>
                            <a class="more-btn" id="more">@lang('Learn more')</a>
                        </div>

                    </div>
                    <div class="frontPage-right">
                        <video
                            autoplay
                            muted
                            id="my-player"
                            class="video-js"
                            loop
                            width="517"
                            height="400"
                            poster="{{ asset('assets/video/CreativeCity_8sec_Blue_RU.mp4') }}"
                            data-setup='{}'>
                            <source src="{{ asset('assets/video/CreativeCity_8sec_Blue_RU.mp4') }}"
                                    type="video/mp4"></source>
                        </video>
                    </div>

                </div>

                <div class="scroll">
                    <img src="{{ asset('assets/img/scroll.png') }}"/>
                    <a href="#contact" class="text">@lang('Scroll down')</a>
                </div>

            </div>
        </div>
    </div>


    <div class="about"
         id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-info">
                    {{--                    <div class="about-text">--}}
                    {{--                        <div class="about-left">@lang('About us')</div>--}}
                    {{--                        <div class="about-right">--}}
                    {{--                            <div class="right-top">Давайте знакомиться поближе</div>--}}
                    {{--                            <div class="right-bottom">--}}
                    {{--                                Мы разрабатываем стратегии и креатив, реализуем их в масштабные проекты и каждый раз--}}
                    {{--                                ставим--}}
                    {{--                                новые планки--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    @if($presentation)
                        <div class="about-action">
                            <button class="about-btn">
                                <a href="{{ app('filesystem')->url($presentation->first()->content) }}"
                                   target="_blank">@lang('Download presentation')</a>
                            </button>
                        </div>
                    @endif

                </div>
                {{--                <div class="about-branches">--}}
                {{--                    <div class="arrows">--}}
                {{--                        <div class="arrow-left"></div>--}}
                {{--                        <div class="arrow-right"></div>--}}
                {{--                    </div>--}}
                {{--                    <div class="about-cards">--}}
                {{--                        <div class="branch-card">--}}
                {{--                            <div class="branch-name">Creative & Strategy</div>--}}
                {{--                            <div class="branch-text">It’s easy to share designs across the organization, so team--}}
                {{--                                collaboration is fast and easy.--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="branch-card">--}}
                {{--                            <div class="branch-name">Branding</div>--}}
                {{--                            <div class="branch-text">It’s easy to share designs across the organization, so team--}}
                {{--                                collaboration is fast and easy.--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="branch-card">--}}
                {{--                            <div class="branch-name">Social Media Markeg</div>--}}
                {{--                            <div class="branch-text">It’s easy to share designs across the organization, so team--}}
                {{--                                collaboration is fast and easy.--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="about-partners">
                    <div class="partners-title">@lang('Partners and clients')</div>
                    <div id="partners-slider" class="partners-imgs" data-slick='{"slidesToShow": 6, "slidesToScroll": 6, "autoplay": true, "autoplaySpeed": 0, "infinite": true, "cssEase": "linear", speed: 2000}'>
                        @foreach($partners as $p)
                            <div class="img-item"><img src="{{ $p->getImage() }}" alt="{{ $p->title }}"></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="mapPage" class="map">
        <div class="map-content">
            <div class="container">
                <div class="map-title">@lang('Construction map')</div>
                	<div id="map" style="width: 100%; height:640px"></div>
                <!--<iframe src="https://www.google.com/maps/d/embed?mid=16j354ExfgD4R9LObnknMR2uU7MMTrTVE&ehbc=2E312F" style="width: 100%" height="480"></iframe>-->
            </div>
        </div>
    </div>

    @if(isset($banner))
        <div class="banner2 no-mobile" style="background-image: url({{ $banner->getBgImage() }});">
            <div class="container">
                <div class="banner2-content">
                    <div class="banner2-info">
                        <div class="banner2-text">
                            @if($banner->title)
                                <div class="banner2-title">{{ $banner->title }}</div>
                            @endif
                            @if($banner->description)
                                <div class="banner2-subtitle">{{ $banner->description }}</div>
                            @endif
                        </div>
                    </div>
                    @if($banner->button_text)
                        <button class="banner2-btn">
                            <a href="{{ $banner->link }}" target="_blank">{{ $banner->button_text }}</a>
                        </button>
                    @endif
                </div>
{{--                <img src="{{ asset('assets/img/blue-circle.png') }}" class="blue-circle">--}}
            </div>
        </div>
        <div class="banner2 mobile" style="background-image: url({{ $banner->getImage() }});">
            <div class="container">
                <div class="banner2-content">
                    <div class="banner2-info">
                        <div class="banner2-text">
                            @if($banner->title)
                                <div class="banner2-title">{{ $banner->title }}</div>
                            @endif
                            @if($banner->description)
                                <div class="banner2-subtitle">{{ $banner->description }}</div>
                            @endif
                        </div>
                    </div>
                    @if($banner->button_text)
                        <button class="banner2-btn">
                            <a href="{{ $banner->link }}" target="_blank">{{ $banner->button_text }}</a>
                        </button>
                    @endif
                </div>
                {{--                <img src="{{ asset('assets/img/blue-circle.png') }}" class="blue-circle">--}}
            </div>
        </div>
    @endif
    <!--<div class="portfolio" id="work">
        <div class="container">
            <div class="portfolio-content">
                <div class="portfolio-left">
                    <div class="portfolio-info">
                        <div class="portfolio-header">Портфолио</div>
                        <div class="portfolio-title">Наши кейсы</div>
                        <div class="portfolio-points">
                            <div class="point">Digital</div>
                            <div class="point">Реклама</div>
                        </div>
                        <div class="portfolio-text">Наименование проекта</div>
                        <div class="portfolio-subtext">Essentially no lag, no matter the size of the file, even on mobile
                            devices.
                        </div>
                    </div>
                    <div class="portfolio-action">
                        <div class="portfolio-arrows">
                            <div class="arrows">
                                <div class="arrow-left"></div>
                                <div class="arrow-right"></div>
                            </div>
                        </div>
                        <div class="portfolio-btn">Скачать презентацию</div>
                    </div>
                </div>
                <img src="{{ asset('assets/img/line-bg.png') }}" class="line">
                <div class="portfolio-right">
                    <div class="portfolio-right-imgs">
                        <img class="product-img" src="{{ asset('assets/img/example.png') }}" id="exampleImg">
                        <img class="product-img" src="{{ asset('assets/img/example.png') }}">
                        <img class="product-img" src="{{ asset('assets/img/example.png') }}">
                        <img class="product-img" src="{{ asset('assets/img/example.png') }}"></div>
                    <div class="paginator-content">
                        <img src="{{ asset('assets/img/paginator-sign.png') }}"/>
                    </div>

                </div>


            </div>
        </div>
    </div>-->

    <div id="price" class="price">
        <div class="container">
            <div class="price-content">
                <div class="price-title">@lang('Price list')</div>
                <div class="price-subtitle">@lang('Flexible pricing options for our clients.')</div>
                <div class="price-cards">
                    @foreach($prices as $price)
                        <div class="price-card">
                            <div class="card-title">{{ $price->title }}</div>
							<div>
								@if($price->id === 1)
								<img style="margin: 16px 0;" src="{{ asset('assets/img/cityboard_mini.jpg') }}" />
								@endif
								@if($price->id === 3)
								<img style="margin: 16px 0;" src="{{ asset('assets/img/billboard_mini.jpg') }}" />
								@endif
								@if($price->id === 4)
								<img style="margin: 16px 0;" src="{{ asset('assets/img/led_mini.jpg') }}" />
								@endif
							</div>
                            <div class="card-content">
                                <div class="card-text"><img
                                        src="{{ asset('assets/img/card-logo.png') }}"> {{ $price->description }}</div>
                            </div>
                            <button class="price-select"><a href="{{ $price->getFile() }}"
                                                            target="_blank">@lang('Select')</a></button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @if(isset($banner2))
        <div class="banner no-mobile" style="background-image: url({{ $banner2->getBgImage() }});">
            <div class="container">
                <div class="banner-content">
                    <div class="info">
                        <div class="title">@lang('Advertisement of the day')</div>
                        @if($banner2->title)
                            <div class="text">{{ $banner2->title }}</div>
                        @endif
                        @if($banner2->description)
                            <div class="subtext">{{ $banner2->description }}</div>
                        @endif
                        @if($banner2->button_text)
                            <button class="license_btn">
                                <a href="{{ $banner2->link }}" target="_blank">{{ $banner2->button_text }}</a>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="banner mobile" style="background-image: url({{ $banner2->getImage() }});">
            <div class="container">
                <div class="banner-content">
                    <div class="info">
                        <div class="title">@lang('Advertisement of the day')</div>
                        @if($banner2->title)
                            <div class="text">{{ $banner2->title }}</div>
                        @endif
                        @if($banner2->description)
                            <div class="subtext">{{ $banner2->description }}</div>
                        @endif
                        @if($banner2->button_text)
                            <button class="license_btn">
                                <a href="{{ $banner2->link }}" target="_blank">{{ $banner2->button_text }}</a>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div id="contact" class="contact">
        <div class="container">
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-text">
                        <div class="contact-left">@lang('Contacts')</div>
                        <div class="contact-right">
                            <div class="right-top">@lang('To contact us')</div>
                            <div class="right-bottom">
                                @if($address)
                                    <div>{{ $address->first()->content }}</div>
                                @endif
                                @if($phones)
                                    <div class="contact-phone"><a href="tel:{{ $phones->first()->content }}"
                                                                  class="link">{{ $phones->first()->content }}</a></div>
                                @endif
                                @if($emails)
                                    <div><a href="mailto:{{ $emails->first()->content }}"
                                            class="link">{{ $emails->first()->content }}</a></div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="contact-action">
                        <button class="contact-btn" id="openModal1">@lang('Leave request')</button>
                        <div class="contact-social">
                            @if($instagram)
                                <a href="{{ $instagram->first()->content }}" target="_blank"><img
                                        src="{{ asset('assets/img/Facebook.png') }}"></a>
                            @endif
                            @if($fb)
                                <a href="{{ $fb->first()->content }}" target="_blank"><img
                                        src="{{ asset('assets/img/Instagram.png') }}"></a>
                            @endif
                        </div>

                    </div>
                </div>
                <div class="contact-peoples" id="contactPeoples">
                    <div class="peoples-arrow">
                        <div class="arrow-left"></div>
                        <div class="arrow-right"></div>
                    </div>
                    <div class="peoples-cards">
                        @foreach($employee_contacts as $c)
                            <div class="people-card">
                                <div class="people-name">{{ $c->full_name }}</div>
                                <div class="people-job">{{ $c->position }}</div>
                                <a class="people-number">{{ $c->phone }}</a>
                                <div class="people-email">{{ $c->email }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="footer">© {{ date('Y') }} CREATIVE CITY, @lang('All rights reserved')</div>
        </div>
    </div>
@endsection
