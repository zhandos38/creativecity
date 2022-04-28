<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Creative City') }}</title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/eocjs-newsticker.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href="https://vjs.zencdn.net/7.10.2/video-js.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/slick/slick-theme.css') }}"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/effect2.css"/>
    <script
        src="https://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU&apikey=f8710f34-94f0-4c6c-84ab-985a6216e532"></script>
</head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-202013811-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-202013811-1');
</script>
<body class="main" id="body">
<div id="ip-container" class="ip-container">
    <header class="ip-header">
        <h1 class="ip-logo">
            <svg width="100%" height="96" viewBox="0 0 204 96" fill="none" preserveAspectRatio="xMidYMin meet"
                 aria-labelledby="logo_title">
                <title id="logo_title">Creative City</title>
                <path
                    d="M69.3506 76.2154C63.2918 80.844 55.6989 83.6003 47.4819 83.6003C27.5634 83.6003 11.3894 67.4523 11.3894 47.5079C11.3894 27.5634 27.5634 11.4154 47.5079 11.4154C55.7249 11.4154 63.2918 14.1718 69.3766 18.8003L79.8819 12.7416C71.3788 4.8366 59.9894 0 47.5079 0C21.2706 0 0 21.2706 0 47.5079C0 73.7451 21.2706 95.0158 47.5079 95.0158C60.0154 95.0158 71.3788 90.1792 79.8559 82.3002L69.3506 76.2154Z"
                    fill="#005BAA"/>
                <path
                    d="M63.0059 61.5487C59.1834 65.7612 53.6447 68.4135 47.508 68.4135C35.9625 68.4135 26.6014 59.0523 26.6014 47.5069C26.6014 35.9615 35.9625 26.6003 47.508 26.6003C53.6447 26.6003 59.1834 29.2527 63.0059 33.4652L72.8351 27.7965C66.9584 20.2555 57.8052 15.4189 47.482 15.4189C29.7478 15.4189 15.368 29.7987 15.368 47.5329C15.368 65.2671 29.7738 79.6209 47.508 79.6209C57.8052 79.6209 66.9844 74.7843 72.8611 67.2434L63.0059 61.5487Z"
                    fill="#0CB7E1"/>
                <path
                    d="M54.5288 50.1338L54.5548 50.2118C54.4768 52.2661 53.8527 53.8523 52.7346 54.9184C51.5904 56.0105 49.9522 56.5566 47.794 56.5566C45.6357 56.5566 43.8675 55.8805 42.4893 54.5544C41.1371 53.2282 40.4611 51.486 40.4611 49.3537V45.6873C40.4611 43.555 41.1111 41.8388 42.4113 40.4866C43.7115 39.1605 45.4277 38.4844 47.5079 38.4844C49.7182 38.4844 51.4344 39.0304 52.6046 40.1486C53.7747 41.2667 54.4508 42.8529 54.6068 44.9072L54.5808 44.9852H50.5763C50.5243 43.841 50.2643 42.9829 49.8222 42.4369C49.3802 41.8908 48.6001 41.6048 47.5079 41.6048C46.5718 41.6048 45.8437 41.9688 45.3237 42.7229C44.8036 43.477 44.5176 44.4391 44.5176 45.6353V49.3277C44.5176 50.5499 44.8036 51.512 45.3757 52.2661C45.9477 53.0202 46.7538 53.3842 47.768 53.3842C48.7561 53.3842 49.4322 53.1242 49.8482 52.6041C50.2643 52.0841 50.4983 51.252 50.5503 50.1078H54.5288V50.1338Z"
                    fill="#3A3A3A"/>
                <path
                    d="M60.8215 49.5615V56.2963H56.739V38.7441H63.4998C65.528 38.7441 67.1402 39.2122 68.3364 40.1483C69.5325 41.0844 70.1306 42.3846 70.1306 43.9968C70.1306 44.9069 69.8966 45.687 69.4025 46.3371C68.9085 46.9872 68.2064 47.5072 67.2963 47.9233C68.3624 48.2353 69.1425 48.7294 69.6105 49.4575C70.0786 50.1596 70.3126 51.0437 70.3126 52.1098V53.2279C70.3126 53.696 70.3906 54.2161 70.5207 54.7881C70.6507 55.3862 70.8847 55.8022 71.2227 56.0363V56.2703H67.0362C66.7242 56.0103 66.5162 55.5682 66.4121 54.9441C66.3081 54.3201 66.2561 53.722 66.2561 53.1759V52.1098C66.2561 51.2777 66.0221 50.6276 65.58 50.1856C65.138 49.7435 64.4879 49.5095 63.6298 49.5095H60.8215V49.5615ZM60.8215 46.4151H63.4998C64.3319 46.4151 64.956 46.2331 65.372 45.843C65.8141 45.479 66.0221 44.9329 66.0221 44.2308C66.0221 43.5027 65.7881 42.9307 65.346 42.4886C64.904 42.0465 64.2799 41.8385 63.4478 41.8385H60.7695V46.4151H60.8215Z"
                    fill="#3A3A3A"/>
                <path
                    d="M84.0166 48.7814H77.1257V53.1499H85.2387V56.2963H73.0432V38.7441H85.2647V41.8905H77.1257V45.661H84.0166V48.7814Z"
                    fill="#3A3A3A"/>
                <path
                    d="M96.4199 52.8645H90.8812L89.8931 56.2709H85.7846L91.4533 38.7188H95.8219L101.491 56.2709H97.382L96.4199 52.8645ZM91.7914 49.7441H95.5098L93.6636 43.4513H93.5856L91.7914 49.7441Z"
                    fill="#3A3A3A"/>
                <path d="M113.946 41.8651H109.318V56.2969H105.235V41.8651H100.632V38.7188H113.946V41.8651Z"
                      fill="#3A3A3A"/>
                <path d="M119.927 56.2963H115.87V38.7441H119.927V56.2963Z" fill="#3A3A3A"/>
                <path
                    d="M129.288 51.5123L129.418 52.1624H129.496L129.626 51.5643L133.11 38.7188H137.375L131.68 56.2709H127.286L121.617 38.7188H125.882L129.288 51.5123Z"
                    fill="#3A3A3A"/>
                <path
                    d="M149.674 48.7814H142.784V53.1499H150.897V56.2963H138.701V38.7441H150.923V41.8905H142.784V45.661H149.674V48.7814Z"
                    fill="#3A3A3A"/>
                <path
                    d="M165.978 50.6539L166.004 50.7319C166.03 52.3701 165.458 53.7743 164.262 54.8664C163.066 55.9845 161.506 56.5306 159.556 56.5306C157.579 56.5306 155.941 55.8285 154.693 54.4243C153.445 53.0202 152.821 51.2259 152.821 49.0677V45.9473C152.821 43.789 153.445 41.9948 154.693 40.5906C155.941 39.1865 157.553 38.4844 159.556 38.4844C161.532 38.4844 163.118 39.0044 164.288 40.0706C165.458 41.1367 166.03 42.5409 166.004 44.2831L165.978 44.3611H163.69C163.69 43.1389 163.326 42.1508 162.598 41.4487C161.87 40.7206 160.856 40.3826 159.53 40.3826C158.203 40.3826 157.137 40.9287 156.357 41.9948C155.577 43.0609 155.187 44.3871 155.187 45.9733V49.1197C155.187 50.7059 155.577 52.0581 156.357 53.1242C157.137 54.1903 158.203 54.7364 159.53 54.7364C160.856 54.7364 161.87 54.3723 162.598 53.6703C163.326 52.9682 163.69 51.98 163.69 50.7319H165.978V50.6539Z"
                    fill="#3A3A3A"/>
                <path d="M171.699 56.2963H169.307V38.7441H171.699V56.2963Z" fill="#3A3A3A"/>
                <path d="M187.717 40.591H182.075V56.2709H179.708V40.591H174.066V38.7188H187.717V40.591Z"
                      fill="#3A3A3A"/>
                <path
                    d="M195.882 47.6639L200.459 38.7448H203.163L197.001 50.1342V56.2969H194.634V49.9521L188.576 38.7188H191.28L195.882 47.6639Z"
                    fill="#3A3A3A"/>
            </svg>
        </h1>
        <div class="ip-loader">
            <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                <path class="ip-loader-circlebg"
                      d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                <path id="ip-loader-circle" class="ip-loader-circle"
                      d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
            </svg>
        </div>
    </header>
</div>

<img class="mainBg no-mobile" src="{{ asset('assets/img/frontPage_bg.png') }}"/>

<div class="menu" id="menu">
    <div class="container">
        <div class="menu-content">
            <div class="header-left">
                <div class="logo">
                    <img src="{{ asset('assets/img/menu-logo.png') }}">
                </div>
                <div class="lang">
                    <select name="lang">
                        <option value="ru">RU</option>
                        <option value="eng">ENG</option>
                    </select>
                </div>
            </div>
            <div class="header-right">

                <button class="cabinet-btn no-mobile">@lang('Personal Area')</button>
                <img src="{{ asset('assets/img/close.png') }}" id="close-menu">
            </div>

        </div>
    </div>
    <div class="container menu-divider">
        <div class="menu-contact-content">
            <div class="menu-contact">
                @if($phones)
                    <div class="contact-item"><a href="tel:{{ $phones->first()->content }}"><img
                                src="{{ asset('assets/img/phone.png') }}"></a><span
                            class="no-mobile">{{ $phones->first()->content }}</span></div>
                @endif
                @if($whatsapp)
                    <div class="contact-item"><a
                            href="https://api.whatsapp.com/send?phone={{ $whatsapp->first()->content }}&amp;text=Здравствуйте%20👋"><img
                                src="{{ asset('assets/img/whatsapp.png') }}"></a><span
                            class="no-mobile">@lang('Write to WhatsApp')</span></div>
                @endif
                @if($presentation)
                    <div class="contact-item"><a href="{{ app('filesystem')->url($presentation->first()->content) }}" target="_blank"><img
                                src="{{ asset('assets/img/mail.png') }}"></a><span
                            class="no-mobile">@lang('Download presentation')</span>
                    </div>
                @endif
                @if($emails)
                    <div class="contact-item"><a href="mailto:{{ $emails->first()->content }}"><img
                                src="{{ asset('assets/img/graph.png') }}"></a><span
                            class="no-mobile"> {{ $emails->first()->content }}</span></div>
                @endif

            </div>
        </div>
    </div>

    <div class="container">
        <div class="menu-items-content">
            <a class="menu-item active">@lang('Home')</a>
            {{--            <a class="menu-item" href="#about">@lang('About us')</a>--}}
            {{--            <a class="menu-item" href="#work">@lang('Our work')</a>--}}
            <a class="menu-item" href="#mapPage">@lang('Construction map')</a>
            <a class="menu-item" href="#price">@lang('Price list')</a>
            <a class="menu-item" href="#contact">@lang('Contacts')</a>
            @if($cabinet)
                <button class="cabinet-btn mobile"><a href="{{ $cabinet->first()->content }}" target="_blank">@lang('Personal Area')</a></button>
            @endif

        </div>
    </div>
</div>
<div id="large-header" class="large-header">
    <canvas id="demo-canvas" class="canvasStyle"></canvas>
</div>
@yield('content')

<div class="modal" id="cartModal">
    <div class="modal-content">
        <div class="close" id="close-modal">&times;</div>
        <div class="modal-info">
            <div class="modal-title">@lang('Leave request')</div>
            <div class="modal-subtitle">@lang('Fill out the application and our managers will contact you as soon as possible')</div>
            <form class="modal-inputs" action="{{ route('save.request') }}" method="post" name="Form-request">
                <input class="modal-input mb" type="tel" placeholder="@lang('Phone')" required id="tel-input" name="phone"/>
                <input class="modal-input mb" type="email" placeholder="Email" required id="email-input" name="email"/>
                <input class="modal-input" type="text" name="name" placeholder="@lang('Company name')" id="company-input"/>
                <input type="hidden" name="point_id" id="id_input"/>
                <input name="_token" value="{{ csrf_token() }}" type="hidden">
                <button class="modal-btn" type="submit" id="submit">@lang('Send')</button>
            </form>
        </div>
    </div>
</div>


<div class="modal" id="Placemark-Modal">
    <div class="modal-content">
        <div class="close" id="close-Placemark-Modal">&times;</div>
        <div class="modal-info placemark-info">
            <div class="modal-title">@lang('Leave request')</div>
            <img src="{{ asset('assets/img/modal-example.png') }}" class="modal-img"/>
            <div class="modal-text"></div>
			<table class="modal-table">
				<tr>
					<td><b>Широта</b></td>
					<td id="lng"></td>
				</tr>
				<tr>
					<td><b>Долгота</b></td>
					<td id="lat"></td>
				</tr>
			</table>
            <button class="modal-btn" id="openForm">@lang('Leave request')</button>
        </div>
    </div>
</div>

<div class="modal" id="thankModal">
    <div class="modal-content">
        <div class="close" id="close-modal1">&times;</div>
        <div class="modal-info">
            <img src="{{ asset('assets/img/check.png') }}"/>
            <div class="modal-title">@lang('Thank you')!</div>
            <div class="modal-subtitle">@lang('Your application has been sent. Wait for an answer.')</div>
        </div>
    </div>
</div>

<div class="modal" id="imgModal">
    <div class="imgModal-content">
        <div class="img-content">
            <div class="closeImg" id="close-modal2">&times;</div>
            <img class="modalImg" src="{{ asset('assets/img/modal-example.png') }}"/>
        </div>
    </div>
</div>


<script type="text/javascript" src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
<script src="{{ asset('assets/js/eocjs-newsticker.js') }}"></script>
<script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/slick/slick.min.js') }}"></script>
<script src="./assets/js/preloader/modernizr.custom.js"></script>
<script src="./assets/js/preloader/classie.js"></script>
<script src="./assets/js/preloader/pathLoader.js"></script>
<script src="./assets/js/preloader/main.js"></script>
<script src="./assets/js/bg-anim/EasePack.min.js"></script>
<script src="./assets/js/bg-anim/rAF.js"></script>
<script src="./assets/js/bg-anim/TweenLite.min.js"></script>
<script src="./assets/js/bg-anim/main.js"></script>
<script src="./assets/js/jquery.maskedinput.min.js"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>
</html>
