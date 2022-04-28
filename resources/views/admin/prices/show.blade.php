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
                                'first' => 'Прайс-лист',
                                'first_link' => route('admin.prices.index'),
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
                                {!! Form::open(['route' => ['admin.prices.destroy', $price->id], 'method' => 'post']) !!}

                                <a class="btn btn-secondary m-1" href="{{ route('admin.prices.index') }}" title="Назад">
                                    <i class="fa fa-arrow-left mr-1"></i>
                                    Назад
                                </a>

                                <a class="btn btn-info m-1" href="{{ route('admin.prices.edit', $price->id) }}" title="Редактировать">
                                    <i class="fa fa-pencil mr-1"></i>
                                    Редактировать
                                </a>

                                <a class="btn btn-danger m-1" href="#" onclick="onDelete({{$price->id}})" title="Удалить" aria-hidden="true">
                                    <i class="fa fa-trash mr-1"></i>
                                    Удалить
                                </a>

                                @method('DELETE')
                                {!!Form::button('', ['class' => 'btn btn-danger', 'type' => 'submit', 'id' => $price->id, 'hidden']) !!}

                                {!! Form::close() !!}
                            </p>

                            <table class="table table-striped table-bordered table-responsive-sm detail-view mt-2">
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $price->id }}</td>
                                </tr>
                                <tr>
                                    <th>Заголовок RU</th>
                                    <td>{{ $price->title_ru }}</td>
                                </tr>
                                <tr>
                                    <th>Заголовок KZ</th>
                                    <td>{{ $price->title_kz }}</td>
                                </tr>
                                <tr>
                                    <th>Заголовок EN</th>
                                    <td>{{ $price->title_en }}</td>
                                </tr>
                                <tr>
                                    <th>Описание RU</th>
                                    <td>{{ $price->description_ru }}</td>
                                </tr>
                                <tr>
                                    <th>Описание KZ</th>
                                    <td>{{ $price->description_kz }}</td>
                                </tr>
                                <tr>
                                    <th>Описание EN</th>
                                    <td>{{ $price->description_en }}</td>
                                </tr>
                                <tr>
                                    <th>Файл</th>
                                    <td><a href="{{ $price->getFile() }}" target="_blank">Просмотреть</a></td>
                                </tr>
                                <tr>
                                    <th>Дата создания</th>
                                    <td>{{ $price->created_at }} </td>
                                </tr>
                                <tr>
                                    <th>Дата редактирования</th>
                                    <td>{{ $price->updated_at }} </td>
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
