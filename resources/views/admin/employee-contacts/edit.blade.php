@extends('admin.layouts.app')
@section('title', 'Контакты Сотрудников')

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
                            <h1>Редактировать Контакты Сотрудника</h1>
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            @include('admin.partials.breadcrumbs', [
                                'first' => 'Контакты Сотрудников',
                                'first_link' => route('admin.employee-contacts.index'),
                                'second' => 'Редактировать',
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

                    {!! Form::open(['route' => ['admin.employee-contacts.update', $employee_contact->id], 'method' => 'post', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

                        @method('PUT')

                        @include('admin.employee-contacts._form')

                    {!! Form::close() !!}
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- end container-fluid -->
    </div>

@stop
