<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="{{ config('app.name') }}" />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- app favicon -->
    <link rel="shortcut icon" href="{{ asset('admin-panel/img/favicon.ico') }}">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-panel/css/vendors.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">

    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-panel/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-panel/css/custom.css') }}" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicon/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicon/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon-180x180.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon/android-chrome-192x192.png') }}" sizes="192x192">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-16x16.png') }}" sizes="16x16">
    <link rel="mask-icon" href="{{ asset('images/favicon/safari-pinned-tab.svg') }}" color="#717c7d">
    <link rel="shortcut icon" href="{{ asset('admin-panel/img/favicon.ico') }}">
</head>

<body>

@include('admin.partials.flash-message')

<!-- begin app -->
<div class="app">


    <!-- begin app-wrap -->
    <div class="app-wrap">

        <!-- begin pre-loader -->
        <div class="loader">
            <div class="h-100 d-flex justify-content-center">
                <div class="align-self-center">
                    <img src="{{ asset('admin-panel/img/loader/loader.svg') }}" alt="loader">
                </div>
            </div>
        </div>
        <!-- end pre-loader -->

        @include('admin.layouts._header')

        <!-- begin app-container -->
        <div class="app-container">

            @include('admin.layouts._sidebar')

            @yield('content')

        </div>
        <!-- end app-container -->

        @include('admin.layouts._header')

    </div>
    <!-- end app-wrap -->
</div>
<!-- end app -->

<!-- plugins -->
<script src="{{ asset('admin-panel/js/vendors.js') }}"></script>
<script src="https://cdn.tiny.cloud/1/ajyqoe5yinw1bs6kj80844f43vam3ve4q69tttbzjjfh90ml/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

<!-- custom app -->
<script src="{{ asset('admin-panel/js/app.js') }}"></script>
<script src="{{ asset('admin-panel/js/custom.js') }}"></script>

@stack('page-scripts')

</body>

</html>
