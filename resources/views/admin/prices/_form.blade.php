<div class="row select-wrapper">
    <div class="card col-lg-12">
        <div class="card-body">

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('title_ru', 'Заголовок RU') !!}
                {!! Form::text('title_ru', isset($price) ? $price->title_ru : null,
                    [
                        'class' => 'form-control ' . ($errors->has('title_ru') ? 'is-invalid' : ''),
                    ])
                !!}
                @if($errors->has('title_ru'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('title_ru') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('title_kz', 'Заголовок KZ') !!}
                {!! Form::text('title_kz', isset($price) ? $price->title_kz : null,
                    [
                        'class' => 'form-control ' . ($errors->has('title_kz') ? 'is-invalid' : ''),
                    ])
                !!}
                @if($errors->has('title_kz'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('title_kz') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('title_en', 'Заголовок EN') !!}
                {!! Form::text('title_en', isset($price) ? $price->title_en : null,
                    [
                        'class' => 'form-control ' . ($errors->has('title_en') ? 'is-invalid' : ''),
                    ])
                !!}
                @if($errors->has('title_en'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('title_en') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-sm-12">
                {!! Form::label('description_ru', 'Описание RU') !!}
                {!! Form::textarea('description_ru', isset($price) ? $price->description_ru : null, [
                        'class' => 'form-control ' . ($errors->has('description_ru') ? 'is-invalid' : ''),
                        'rows' => 3
                    ])
                !!}
                @if($errors->has('description_ru'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('description_ru') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-sm-12">
                {!! Form::label('description_kz', 'Описание KZ') !!}
                {!! Form::textarea('description_kz', isset($price) ? $price->description_kz : null, [
                        'class' => 'form-control ' . ($errors->has('description_kz') ? 'is-invalid' : ''),
                        'rows' => 3
                    ])
                !!}
                @if($errors->has('description_kz'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('description_kz') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-sm-12">
                {!! Form::label('description_en', 'Описание EN') !!}
                {!! Form::textarea('description_en', isset($price) ? $price->description_en : null, [
                        'class' => 'form-control ' . ($errors->has('description_en') ? 'is-invalid' : ''),
                        'rows' => 3
                    ])
                !!}
                @if($errors->has('description_en'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('description_en') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('file', 'Файл') !!}
                @if(isset($price) && $price->file)
                    <br>
                    <a href="{{ $price->getFile() }}" target="_blank">Просмотреть</a>
                    <br>
                @endif
                {!! Form::file('file', ['class' => 'form-control ' . ($errors->has('file') ? 'is-invalid' : '')]) !!}
                @if($errors->has('file'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('image') }}</strong>
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




