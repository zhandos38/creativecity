<div class="row select-wrapper">
    <div class="card col-lg-12 selects-contant">
        <div class="card-body">
            <div class="form-group col-sm-12">
                {!! Form::label('type', 'Тип') !!}
                {!! Form::select('type', \App\Models\Contact::types(), isset($contact) ? $contact->type : null,
                    [
                        'class' => 'js-basic-single form-control ' . ($errors->has('type') ? 'is-invalid' : '')
                    ])
                !!}
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('type') }}</strong>
                    </div>
                @endif
            </div>

            @if(isset($contact) && $contact->id == 1)
                <div class="form-group col-xs-12 col-sm-12 col-md-12">
                    {!! Form::label('content_ru', 'Файл RU') !!}
                    @if($contact && $contact->content_ru)
                        <br>
                        <a href="{{ \App\Models\Contact::getFile($contact->content_ru) }}" target="_blank">Просмотреть Файл</a>
                        <br>
                    @endif
                    {!! Form::file('content_ru', ['class' => 'form-control ' . ($errors->has('content_ru') ? 'is-invalid' : '')]) !!}
                    @if($errors->has('content_ru'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('content_ru') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12">
                    {!! Form::label('content_kz', 'Файл KZ') !!}
                    @if($contact && $contact->content_kz)
                        <br>
                        <a href="{{ \App\Models\Contact::getFile($contact->content_kz) }}" target="_blank">Просмотреть Файл</a>
                        <br>
                    @endif
                    {!! Form::file('content_kz', ['class' => 'form-control ' . ($errors->has('content_kz') ? 'is-invalid' : '')]) !!}
                    @if($errors->has('content_kz'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('content_kz') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12">
                    {!! Form::label('content_en', 'Файл EN') !!}
                    @if($contact && $contact->content_en)
                        <br>
                        <a href="{{ \App\Models\Contact::getFile($contact->content_en) }}" target="_blank">Просмотреть Файл</a>
                        <br>
                    @endif
                    {!! Form::file('content_en', ['class' => 'form-control ' . ($errors->has('content_en') ? 'is-invalid' : '')]) !!}
                    @if($errors->has('content_en'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('content_en') }}</strong>
                        </div>
                    @endif
                </div>
            @else
                <div class="form-group col-xs-12 col-sm-12 col-md-12">
                    {!! Form::label('content_ru', 'Контент RU') !!}
                    {!! Form::textarea('content_ru', isset($contact) ? $contact->content_ru : null,
                        ['class' => 'form-control ' . ($errors->has('content_ru') ? 'is-invalid' : ''), 'rows' => 2]) !!}
                    @if($errors->has('content_ru'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('content_ru') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-12">
                    {!! Form::label('content_kz', 'Контент KZ') !!}
                    {!! Form::textarea('content_kz', isset($contact) ? $contact->content_kz : null,
                        ['class' => 'form-control ' . ($errors->has('content_kz') ? 'is-invalid' : ''), 'rows' => 2]) !!}
                    @if($errors->has('content_kz'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('content_kz') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-12">
                    {!! Form::label('content_en', 'Контент EN') !!}
                    {!! Form::textarea('content_en', isset($contact) ? $contact->content_en : null,
                        ['class' => 'form-control ' . ($errors->has('content_en') ? 'is-invalid' : ''), 'rows' => 2]) !!}
                    @if($errors->has('content_en'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('content_en') }}</strong>
                        </div>
                    @endif
                </div>
            @endif
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::button('<i class="fa fa-check-circle fa-fw mr-1"></i> ' . 'Сохранить',
                        ['class' => 'btn btn-success', 'type' => 'submit']) !!}
            </div>
        </div>
    </div>
</div>




