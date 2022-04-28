@extends('admin.layouts.app')
@section('title', 'Профиль')

@section('content')

    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin row -->
            <div class="row">
                <div class="col-md-12 m-b-30">
                    <!-- begin page title -->
                    <div class="d-block d-sm-flex flex-nowrap align-items-center">
                        <div class="page-title mb-2 mb-sm-0">
                            <h1>Настройки учетной записи</h1>
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            @include('admin.partials.breadcrumbs', [
                                'first' => 'Профиль',
                                'active' => 1
                            ])
                        </div>
                    </div>
                    <!-- end page title -->
                </div>
            </div>
            <!-- end row -->

            <!--mail-Compose-contant-start-->
            <div class="row account-contant">
                <div class="col-12">
                    <div class="card card-statistics">
                        <div class="card-body p-0">
                            <div class="row no-gutters">

                                <div class="col-xl-3 pb-xl-0 pb-5 border-right">
                                    <div class="page-account-profil pt-5">
                                        <div class="profile-img text-center rounded-circle">
                                            <div class="pt-5">
                                                <div class="bg-img m-auto">
                                                    <img src="" class="img-fluid" alt="users-avatar">
                                                </div>
                                                <div class="profile pt-4">
                                                    <h4 class="mb-1">
                                                        {{ \Auth::user()->name }}
                                                    </h4>
                                                    <p>
                                                        {{ \Auth::user()->email }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xl-9 col-md-6 col-12 border-t border-right">
                                    <div class="page-account-form">
                                        <div class="form-titel border-bottom p-3">
                                            <h5 class="mb-0 py-2">
                                                Измените свои личные настройки
                                            </h5>
                                        </div>
                                        <div class="p-4">

                                            @include('admin.partials.errors')

                                            {!! Form::open(['route' => ['admin.account.update'], 'method' => 'post', 'files' => true]) !!}

                                                @method('PUT')

                                                <div class="form-row">

                                                    <div class="form-group col-md-12">
                                                        {!! Form::label('image', 'Аватар') !!}
                                                        {!! Form::file('image', ['class' => 'form-control ' . ($errors->has('image') ? 'is-invalid' : '')]) !!}
                                                        @if($errors->has('image'))
                                                            <div class="invalid-feedback">
                                                                <strong>{{ $errors->first('image') }}</strong>
                                                            </div>
                                                        @endif
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        {!! Form::label('name', 'Имя') !!}
                                                        {!! Form::text('name', old('name') ? old('name') : \Auth::user()->name,
                                                            ['class' => 'form-control ' . ($errors->has('name') ? 'is-invalid' : '')]) !!}
                                                        @if($errors->has('name'))
                                                            <div class="invalid-feedback">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        {!! Form::label('email', 'E-mail') !!}
                                                        {!! Form::email('email', old('email') ? old('email') : \Auth::user()->email,
                                                            ['class' => 'form-control ' . ($errors->has('email') ? 'is-invalid' : '')]) !!}
                                                        @if($errors->has('email'))
                                                            <div class="invalid-feedback">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </div>
                                                        @endif
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        {!! Form::label('password', 'Пароль') !!}
                                                        {!! Form::password('password',
                                                            [
                                                                'class' => 'form-control ' . ($errors->has('password') ? 'is-invalid' : ''),
                                                            ])
                                                        !!}
                                                        @if($errors->has('password'))
                                                            <div class="invalid-feedback">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </div>
                                                        @endif
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        {!! Form::label('password_confirmation', 'Подтвердить пароль') !!}
                                                        {!! Form::password('password_confirmation',
                                                            [
                                                                'class' => 'form-control ' . ($errors->has('password_confirmation') ? 'is-invalid' : ''),
                                                            ])
                                                        !!}
                                                        @if($errors->has('password_confirmation'))
                                                            <div class="invalid-feedback">
                                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>

                                                {!! Form::button('<i class="fa fa-check-circle fa-fw mr-1"></i> ' . 'Сохранить',
                                                                ['class' => 'btn btn-success', 'type' => 'submit']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--mail-Compose-contant-end-->
        </div>
        <!-- end container-fluid -->
    </div>

@stop

