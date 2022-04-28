<div class="row select-wrapper">
    <div class="card col-lg-12">
        <div class="card-body">

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('full_name_ru', 'ФИО RU') !!}
                {!! Form::text('full_name_ru', isset($employee_contact) ? $employee_contact->full_name_ru : null,
                    [
                        'class' => 'form-control ' . ($errors->has('full_name_ru') ? 'is-invalid' : ''),
                    ])
                !!}
                @if($errors->has('full_name_ru'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('full_name_ru') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('full_name_kz', 'ФИО KZ') !!}
                {!! Form::text('full_name_kz', isset($employee_contact) ? $employee_contact->full_name_kz : null,
                    [
                        'class' => 'form-control ' . ($errors->has('full_name_kz') ? 'is-invalid' : ''),
                    ])
                !!}
                @if($errors->has('full_name_kz'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('full_name_kz') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('full_name_en', 'ФИО EN') !!}
                {!! Form::text('full_name_en', isset($employee_contact) ? $employee_contact->full_name_en : null,
                    [
                        'class' => 'form-control ' . ($errors->has('full_name_en') ? 'is-invalid' : ''),
                    ])
                !!}
                @if($errors->has('full_name_en'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('full_name_en') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-sm-12">
                {!! Form::label('position_ru', 'Позиция RU') !!}
                {!! Form::textarea('position_ru', isset($employee_contact) ? $employee_contact->position_ru : null, [
                        'class' => 'form-control ' . ($errors->has('position_ru') ? 'is-invalid' : ''),
                        'rows' => 3
                    ])
                !!}
                @if($errors->has('position_ru'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('position_ru') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-sm-12">
                {!! Form::label('position_kz', 'Позиция KZ') !!}
                {!! Form::textarea('position_kz', isset($employee_contact) ? $employee_contact->position_kz : null, [
                        'class' => 'form-control ' . ($errors->has('position_kz') ? 'is-invalid' : ''),
                        'rows' => 3
                    ])
                !!}
                @if($errors->has('position_kz'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('position_kz') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-sm-12">
                {!! Form::label('position_en', 'Позиция EN') !!}
                {!! Form::textarea('position_en', isset($employee_contact) ? $employee_contact->position_en : null, [
                        'class' => 'form-control ' . ($errors->has('position_en') ? 'is-invalid' : ''),
                        'rows' => 3
                    ])
                !!}
                @if($errors->has('position_en'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('position_en') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('phone', 'Телефон') !!}
                {!! Form::text('phone', isset($employee_contact) ? $employee_contact->phone : null,
                    [
                        'class' => 'form-control ' . ($errors->has('phone') ? 'is-invalid' : ''),
                    ])
                !!}
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', isset($employee_contact) ? $employee_contact->email : null,
                    [
                        'class' => 'form-control ' . ($errors->has('email') ? 'is-invalid' : ''),
                    ])
                !!}
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::button('<i class="fa fa-check-circle fa-fw mr-1"></i> ' . 'Сохранить',
                        ['class' => 'btn btn-success', 'type' => 'submit']) !!}
            </div>
        </div>
    </div>
</div>




