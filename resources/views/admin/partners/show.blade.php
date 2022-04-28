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
                                'first' => 'Партнеры',
                                'first_link' => route('admin.partners.index'),
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
                                {!! Form::open(['route' => ['admin.partners.destroy', $partner->id], 'method' => 'post']) !!}

                                <a class="btn btn-secondary m-1" href="{{ route('admin.partners.index') }}" title="Назад">
                                    <i class="fa fa-arrow-left mr-1"></i>
                                    Назад
                                </a>

                                <a class="btn btn-info m-1" href="{{ route('admin.partners.edit', $partner->id) }}" title="Редактировать">
                                    <i class="fa fa-pencil mr-1"></i>
                                    Редактировать
                                </a>

                                <a class="btn btn-danger m-1" href="#" onclick="onDelete({{$partner->id}})" title="Удалить" aria-hidden="true">
                                    <i class="fa fa-trash mr-1"></i>
                                    Удалить
                                </a>

                                @method('DELETE')
                                {!!Form::button('', ['class' => 'btn btn-danger', 'type' => 'submit', 'id' => $partner->id, 'hidden']) !!}

                                {!! Form::close() !!}
                            </p>

                            <table class="table table-striped table-bordered table-responsive-sm detail-view mt-2">
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $partner->id }}</td>
                                </tr>
                                <tr>
                                    <th>Заголовок RU</th>
                                    <td>{{ $partner->title_ru }}</td>
                                </tr>
                                <tr>
                                    <th>Заголовок KZ</th>
                                    <td>{{ $partner->title_kz }}</td>
                                </tr>
                                <tr>
                                    <th>Заголовок EN</th>
                                    <td>{{ $partner->title_en }}</td>
                                </tr>
                                <tr>
                                    <th>Ссылка</th>
                                    <td>{{ $partner->link }} </td>
                                </tr>
                                <tr>
                                    <th>Изображение</th>
                                    <td><img src="{{ $partner->getImage() }}" alt="" width="300" > </td>
                                </tr>
                                <tr>
                                    <th>Ссылка</th>
                                    <td>{{ $partner->link }} </td>
                                </tr>
                                <tr>
                                    <th>Дата создания</th>
                                    <td>{{ $partner->created_at }} </td>
                                </tr>
                                <tr>
                                    <th>Дата редактирования</th>
                                    <td>{{ $partner->updated_at }} </td>
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
