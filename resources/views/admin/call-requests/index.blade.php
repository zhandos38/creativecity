@extends('admin.layouts.app')
@section('title', 'Заявки')

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
                            <h1>Заявки</h1>
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            @include('admin.partials.breadcrumbs', [
                                'first' => 'Заявки',
                                'active' => 1
                            ])
                        </div>
                    </div>
                    <!-- end page title -->
                </div>
            </div>

            <!-- begin row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="datatable-wrapper table-responsive">
                                <table id="datatable" class="display compact table table-striped table-bordered table-hover">

                                    <thead>
                                        <tr>
                                            <th>Имя</th>
                                            <th>E-mail</th>
                                            <th>Телефон</th>
                                            <th>Статус</th>
                                            <th>Баннер</th>
                                            <th>Дата создания</th>
                                            <th>Доступные действия</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @forelse($requests as $v)
                                        <tr>
                                            <td>{{ $v->name }}</td>
                                            <td>{{ $v->email }}</td>
                                            <td>{{ $v->phone }}</td>
                                            <td>{!! \App\Labels\CallRequestLabel::status($v) !!}</td>
                                            <td>{{ $v->point->title ?? 'Заявка' }}</td>
                                            <td>{{ $v->created_at }}</td>
                                            <th>
                                                {!! Form::open(['route' => ['admin.call-requests.destroy', $v->id], 'method' => 'post']) !!}

                                                    <a class="btn btn-warning mb-1" href="{{ route('admin.call-requests.show', $v->id) }}" title="Просмотр">
                                                        <i class="fa fa-eye mr-1"></i>
                                                        Просмотр
                                                    </a>

                                                    <a class="btn btn-info mb-1" href="{{ route('admin.call-requests.edit', $v->id) }}" title="Редактировать">
                                                        <i class="fa fa-pencil mr-1"></i>
                                                        Редактировать
                                                    </a>

                                                    <a class="btn btn-danger mb-1" href="#" onclick="onDelete({{$v->id}})" title="Удалить" aria-hidden="true">
                                                        <i class="fa fa-trash mr-1"></i>
                                                        Удалить
                                                    </a>

                                                    @method('DELETE')
                                                    {!!Form::button('',['type' => 'submit' ,'id'=> $v->id,'hidden']) !!}

                                                {!! Form::close() !!}
                                            </th>
                                        </tr>
                                    @empty
                                        <tr class="odd">
                                            <td colspan="7" class="dataTables_empty">
                                                Записи отсутствуют.
                                            </td>
                                        </tr>
                                    @endforelse
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- end container-fluid -->
    </div>

@stop
