<div class="row select-wrapper">
    <div class="card col-lg-12">
        <div class="card-body">

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('title_ru', 'Заголовок RU') !!}
                {!! Form::text('title_ru', isset($banner) ? $banner->title_ru : null,
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
                {!! Form::text('title_kz', isset($banner) ? $banner->title_kz : null,
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
                {!! Form::text('title_en', isset($banner) ? $banner->title_en : null,
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
                {!! Form::textarea('description_ru', isset($banner) ? $banner->description_ru : null, [
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
                {!! Form::textarea('description_kz', isset($banner) ? $banner->description_kz : null, [
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
                {!! Form::textarea('description_en', isset($banner) ? $banner->description_en : null, [
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
                {!! Form::label('button_text_ru', 'Текст на кнопке RU') !!}
                {!! Form::text('button_text_ru', isset($banner) ? $banner->button_text_ru : null,
                    [
                        'class' => 'form-control ' . ($errors->has('button_text_ru') ? 'is-invalid' : ''),
                    ])
                !!}
                @if($errors->has('button_text_ru'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('button_text_ru') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('button_text_kz', 'Текст на кнопке KZ') !!}
                {!! Form::text('button_text_kz', isset($banner) ? $banner->button_text_kz : null,
                    [
                        'class' => 'form-control ' . ($errors->has('button_text_kz') ? 'is-invalid' : ''),
                    ])
                !!}
                @if($errors->has('button_text_kz'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('button_text_kz') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('button_text_en', 'Текст на кнопке EN') !!}
                {!! Form::text('button_text_en', isset($banner) ? $banner->button_text_en : null,
                    [
                        'class' => 'form-control ' . ($errors->has('button_text_en') ? 'is-invalid' : ''),
                    ])
                !!}
                @if($errors->has('button_text_en'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('button_text_en') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('link', 'Ссылка') !!}
                {!! Form::text('link', isset($banner) ? $banner->link : null,
                    [
                        'class' => 'form-control ' . ($errors->has('link') ? 'is-invalid' : ''),
                    ])
                !!}
                @if($errors->has('link'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('link') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('image', 'Изображение(моб)') !!}
                @if(isset($banner) && $banner->image)
                    <br>
                    <img src="{{ $banner->getImage() }}" width="300" style="outline: 1px solid #CCC;">
                    <br><br>
                @endif
                {!! Form::file('image', ['class' => 'form-control ' . ($errors->has('image') ? 'is-invalid' : '')]) !!}
                @if($errors->has('image'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('image') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('bg_image', 'Изображение(десктоп)') !!}
                @if(isset($banner) && $banner->bg_image)
                    <br>
                    <img src="{{ $banner->getBgImage() }}" width="300" style="outline: 1px solid #CCC;">
                    <br><br>
                @endif
                {!! Form::file('bg_image', ['class' => 'form-control ' . ($errors->has('bg_image') ? 'is-invalid' : '')]) !!}
                @if($errors->has('bg_image'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('bg_image') }}</strong>
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




