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
                                'first' => 'Главный блок',
                                'first_link' => route('admin.blocks.index'),
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
                                {!! Form::open(['route' => ['admin.blocks.destroy', $block->id], 'method' => 'post']) !!}

                                <a class="btn btn-secondary m-1" href="{{ route('admin.blocks.index') }}" title="Назад">
                                    <i class="fa fa-arrow-left mr-1"></i>
                                    Назад
                                </a>

                                <a class="btn btn-info m-1" href="{{ route('admin.blocks.edit', $block->id) }}" title="Редактировать">
                                    <i class="fa fa-pencil mr-1"></i>
                                    Редактировать
                                </a>

                                <a class="btn btn-danger m-1" href="#" onclick="onDelete({{$block->id}})" title="Удалить" aria-hidden="true">
                                    <i class="fa fa-trash mr-1"></i>
                                    Удалить
                                </a>

                                @method('DELETE')
                                {!!Form::button('', ['class' => 'btn btn-danger', 'type' => 'submit', 'id' => $block->id, 'hidden']) !!}

                                {!! Form::close() !!}
                            </p>

                            <table class="table table-striped table-bordered table-responsive-sm detail-view mt-2">
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $block->id }}</td>
                                </tr>
                                <tr>
                                    <th>Заголовок RU</th>
                                    <td>{{ $block->title_ru }}</td>
                                </tr>
                                <tr>
                                    <th>Заголовок KZ</th>
                                    <td>{{ $block->title_kz }}</td>
                                </tr>
                                <tr>
                                    <th>Заголовок EN</th>
                                    <td>{{ $block->title_en }}</td>
                                </tr>
                                <tr>
                                    <th>Описание RU</th>
                                    <td>{{ $block->description_ru }}</td>
                                </tr>
                                <tr>
                                    <th>Описание KZ</th>
                                    <td>{{ $block->description_kz }}</td>
                                </tr>
                                <tr>
                                    <th>Описание EN</th>
                                    <td>{{ $block->description_en }}</td>
                                </tr>
                                <tr>
                                    <th>Контент RU</th>
                                    <td>{!! $block->content_ru !!}</td>
                                </tr>
                                <tr>
                                    <th>Контент KZ</th>
                                    <td>{!! $block->content_kz !!}</td>
                                </tr>
                                <tr>
                                    <th>Контент EN</th>
                                    <td>{!! $block->content_en !!}</td>
                                </tr>
                                <tr>
                                    <th>Дата создания</th>
                                    <td>{{ $block->created_at }} </td>
                                </tr>
                                <tr>
                                    <th>Дата редактирования</th>
                                    <td>{{ $block->updated_at }} </td>
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
