@extends('admin.layouts.app')
@section('title', 'Контакты')

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
                            <h1>Создать контакт</h1>
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            @include('admin.partials.breadcrumbs', [
                                'first' => 'Контакты',
                                'first_link' => route('admin.contacts.index'),
                                'second' => 'Создать',
                                'active' => 2
                            ])
                        </div>
                    </div>
                    <!-- end page title -->
                </div>
            </div>

            <!-- begin row -->
            <div class="row">
                <div class="col-lg-12">
                    @include('admin.partials.errors')

                    {!! Form::open(['route' => 'admin.contacts.store', 'method' => 'post']) !!}

                        @include('admin.contacts._form')

                    {!! Form::close() !!}
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- end container-fluid -->
    </div>

@stop
