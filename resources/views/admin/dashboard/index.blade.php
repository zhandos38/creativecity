@extends('admin.layouts.app')
@section('title', 'Дэшбоард')

@section('content')

    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">

            <!-- begin row -->
            <div class="row">
                <div class="col-md-12 m-b-30">
                    <!-- begin page title -->
                    <div class="d-block d-lg-flex flex-nowrap align-items-center">
                        <div class="page-title mr-4 pr-4">
                            <h1>Дэшбоард</h1>
                        </div>

                    </div>
                    <!-- end page title -->
                </div>
            </div>

            <!-- Notification -->
            <div class="row" id="greeting">
                <div class="col-md-12">
                    <div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">
                        Добро пожаловать,
                        <strong>{{ \Auth::user()->name }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                        onclick="greeted()">
                            <i class="ti ti-close"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <!--div class="row">
                <div class="col-lg-6 col-xxl-3 m-b-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-body">
                            <div class="d-flex h-100">
                                <div class="align-self-center">
                                    <div class="apexchart-wrapper">
                                        <div id="datingdemo5"></div>
                                    </div>
                                </div>
                                <div class="align-self-center ml-auto">
                                    <h3 class="f-26 mb-0">
                                        <span class="count">
                                        </span>
                                    </h3>
                                    <p class="text-muted mb-0">Категории</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3 m-b-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-body">
                            <div class="d-flex h-100">
                                <div class="align-self-center">
                                    <div class="apexchart-wrapper">
                                        <div id="datingdemo6"></div>
                                    </div>
                                </div>
                                <div class="align-self-center ml-auto">
                                    <h3 class="f-26 mb-0">
                                        <span class="count">
                                        </span>
                                    </h3>
                                    <p class="text-muted mb-0">Продукты</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3 m-b-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-body">
                            <div class="d-flex h-100">
                                <div class="align-self-center">
                                    <div class="apexchart-wrapper">
                                        <div id="datingdemo7"></div>
                                    </div>
                                </div>
                                <div class="align-self-center ml-auto">
                                    <h3 class="f-26 mb-0">
                                        <span class="count">
                                        </span>
                                    </h3>
                                    <p class="text-muted mb-0">Заказы</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3 m-b-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-body">
                            <div class="d-flex h-100">
                                <div class="apexchart-wrapper">
                                    <div id="datingdemo8"></div>
                                </div>
                                <div class="align-self-center ml-auto">
                                    <h3 class="f-26 mb-0">
                                        <span class="count">
                                        </span></h3>
                                    <p class="text-muted mb-0">Просмотры</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div-->

        </div>
        <!-- end container-fluid -->
    </div>

@stop

@push('page-scripts')
    <script>
        checkGreeted();
    </script>
@endpush

