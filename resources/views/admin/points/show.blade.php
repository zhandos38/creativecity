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
                                'first' => 'Точки',
                                'first_link' => route('admin.points.index'),
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
                                {!! Form::open(['route' => ['admin.points.destroy', $point->id], 'method' => 'post']) !!}

                                <a class="btn btn-secondary m-1" href="{{ route('admin.points.index') }}" title="Назад">
                                    <i class="fa fa-arrow-left mr-1"></i>
                                    Назад
                                </a>

                                <a class="btn btn-info m-1" href="{{ route('admin.points.edit', $point->id) }}" title="Редактировать">
                                    <i class="fa fa-pencil mr-1"></i>
                                    Редактировать
                                </a>

                                <a class="btn btn-danger m-1" href="#" onclick="onDelete({{$point->id}})" title="Удалить" aria-hidden="true">
                                    <i class="fa fa-trash mr-1"></i>
                                    Удалить
                                </a>

                                @method('DELETE')
                                {!!Form::button('', ['class' => 'btn btn-danger', 'type' => 'submit', 'id' => $point->id, 'hidden']) !!}

                                {!! Form::close() !!}
                            </p>

                            <table class="table table-striped table-bordered table-responsive-sm detail-view mt-2">
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $point->id }}</td>
                                </tr>
                                <tr>
                                    <th>Заголовок RU</th>
                                    <td>{{ $point->title_ru }}</td>
                                </tr>
                                <tr>
                                    <th>Заголовок KZ</th>
                                    <td>{{ $point->title_kz }}</td>
                                </tr>
                                <tr>
                                    <th>Заголовок EN</th>
                                    <td>{{ $point->title_en }}</td>
                                </tr>
                                <tr>
                                    <th>Описание RU</th>
                                    <td>{{ $point->description_ru }}</td>
                                </tr>
                                <tr>
                                    <th>Описание KZ</th>
                                    <td>{{ $point->description_kz }}</td>
                                </tr>
                                <tr>
                                    <th>Описание EN</th>
                                    <td>{{ $point->description_en }}</td>
                                </tr>
                                <tr>
                                    <th>Долгота</th>
                                    <td>{{ $point->lang }}</td>
                                </tr>
                                <tr>
                                    <th>Широта</th>
                                    <td>{{ $point->lat }}</td>
                                </tr>
                                <tr>
                                    <th>Номер</th>
                                    <td>{{ $point->number }}</td>
                                </tr>
                                <tr>
                                    <th>Изображение</th>
                                    <td><img src="{{ $point->getImage() }}" alt="" width="300" > </td>
                                </tr>
                                <tr>
                                    <th>Дата создания</th>
                                    <td>{{ $point->created_at }} </td>
                                </tr>
                                <tr>
                                    <th>Дата редактирования</th>
                                    <td>{{ $point->updated_at }} </td>
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
