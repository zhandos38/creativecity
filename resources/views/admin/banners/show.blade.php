@extends('admin.layouts.app')
@section('title', 'Просмотр')

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
                            <h1>Просмотр</h1>
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            @include('admin.partials.breadcrumbs', [
                                'first' => 'Баннер',
                                'first_link' => route('admin.banners.index'),
                                'second' => 'Просмотр',
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
                    <div class="card">
                        <div class="card-body">
                            <p>
                                {!! Form::open(['route' => ['admin.banners.destroy', $banner->id], 'method' => 'post']) !!}

                                <a class="btn btn-secondary m-1" href="{{ route('admin.banners.index') }}" title="Назад">
                                    <i class="fa fa-arrow-left mr-1"></i>
                                    Назад
                                </a>

                                <a class="btn btn-info m-1" href="{{ route('admin.banners.edit', $banner->id) }}" title="Редактировать">
                                    <i class="fa fa-pencil mr-1"></i>
                                    Редактировать
                                </a>

{{--                                <a class="btn btn-danger m-1" href="#" onclick="onDelete({{$banner->id}})" title="Удалить" aria-hidden="true">--}}
{{--                                    <i class="fa fa-trash mr-1"></i>--}}
{{--                                    Удалить--}}
{{--                                </a>--}}

{{--                                @method('DELETE')--}}
{{--                                {!!Form::button('', ['class' => 'btn btn-danger', 'type' => 'submit', 'id' => $banner->id, 'hidden']) !!}--}}

                                {!! Form::close() !!}
                            </p>

                            <table class="table table-striped table-bordered table-responsive-sm detail-view mt-2">
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $banner->id }}</td>
                                </tr>
                                <tr>
                                    <th>Заголовок RU</th>
                                    <td>{{ $banner->title_ru }}</td>
                                </tr>
                                <tr>
                                    <th>Заголовок KZ</th>
                                    <td>{{ $banner->title_kz }}</td>
                                </tr>
                                <tr>
                                    <th>Заголовок EN</th>
                                    <td>{{ $banner->title_en }}</td>
                                </tr>
                                <tr>
                                    <th>Описание RU</th>
                                    <td>{{ $banner->description_ru }}</td>
                                </tr>
                                <tr>
                                    <th>Описание KZ</th>
                                    <td>{{ $banner->description_kz }}</td>
                                </tr>
                                <tr>
                                    <th>Описание EN</th>
                                    <td>{{ $banner->description_en }}</td>
                                </tr>
                                <tr>
                                    <th>Текст на кнопке RU</th>
                                    <td>{!! $banner->button_text_ru !!}</td>
                                </tr>
                                <tr>
                                    <th>Текст на кнопке KZ</th>
                                    <td>{!! $banner->button_text_kz !!}</td>
                                </tr>
                                <tr>
                                    <th>Текст на кнопке EN</th>
                                    <td>{!! $banner->button_text_en !!}</td>
                                </tr>
                                <tr>
                                    <th>Ссылка</th>
                                    <td>{{ $banner->link }} </td>
                                </tr>
                                <tr>
                                    <th>Изображение(моб)</th>
                                    <td><img src="{{ $banner->getImage() }}" alt="" width="300" > </td>
                                </tr>
                                <tr>
                                    <th>Изображение(десктоп)</th>
                                    <td><img src="{{ $banner->getBgImage() }}" alt="" width="300" > </td>
                                </tr>
                                <tr>
                                    <th>Ссылка</th>
                                    <td>{{ $banner->link }} </td>
                                </tr>
                                <tr>
                                    <th>Дата создания</th>
                                    <td>{{ $banner->created_at }} </td>
                                </tr>
                                <tr>
                                    <th>Дата редактирования</th>
                                    <td>{{ $banner->updated_at }} </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- end container-fluid -->
    </div>

@stop
