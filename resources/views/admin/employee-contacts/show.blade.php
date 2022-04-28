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
                                'first' => 'Контакты Сотрудников',
                                'first_link' => route('admin.employee-contacts.index'),
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
                                {!! Form::open(['route' => ['admin.employee-contacts.destroy', $employee_contact->id], 'method' => 'post']) !!}

                                <a class="btn btn-secondary m-1" href="{{ route('admin.employee-contacts.index') }}" title="Назад">
                                    <i class="fa fa-arrow-left mr-1"></i>
                                    Назад
                                </a>

                                <a class="btn btn-info m-1" href="{{ route('admin.employee-contacts.edit', $employee_contact->id) }}" title="Редактировать">
                                    <i class="fa fa-pencil mr-1"></i>
                                    Редактировать
                                </a>

                                <a class="btn btn-danger m-1" href="#" onclick="onDelete({{$employee_contact->id}})" title="Удалить" aria-hidden="true">
                                    <i class="fa fa-trash mr-1"></i>
                                    Удалить
                                </a>

                                @method('DELETE')
                                {!!Form::button('', ['class' => 'btn btn-danger', 'type' => 'submit', 'id' => $employee_contact->id, 'hidden']) !!}

                                {!! Form::close() !!}
                            </p>

                            <table class="table table-striped table-bordered table-responsive-sm detail-view mt-2">
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $employee_contact->id }}</td>
                                </tr>
                                <tr>
                                    <th>ФИО RU</th>
                                    <td>{{ $employee_contact->full_name_ru }}</td>
                                </tr>
                                <tr>
                                    <th>ФИО KZ</th>
                                    <td>{{ $employee_contact->full_name_kz }}</td>
                                </tr>
                                <tr>
                                    <th>ФИО EN</th>
                                    <td>{{ $employee_contact->full_name_en }}</td>
                                </tr>
                                <tr>
                                    <th>Позиция RU</th>
                                    <td>{{ $employee_contact->position_ru }}</td>
                                </tr>
                                <tr>
                                    <th>Позиция KZ</th>
                                    <td>{{ $employee_contact->position_kz }}</td>
                                </tr>
                                <tr>
                                    <th>Позиция EN</th>
                                    <td>{{ $employee_contact->position_en }}</td>
                                </tr>
                                <tr>
                                    <th>Телефон</th>
                                    <td>{{ $employee_contact->phone }} </td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $employee_contact->email }} </td>
                                </tr>
                                <tr>
                                    <th>Дата создания</th>
                                    <td>{{ $employee_contact->created_at }} </td>
                                </tr>
                                <tr>
                                    <th>Дата редактирования</th>
                                    <td>{{ $employee_contact->updated_at }} </td>
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
