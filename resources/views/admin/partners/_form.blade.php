<div class="row select-wrapper">
    <div class="card col-lg-12">
        <div class="card-body">

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('title_ru', 'Заголовок RU') !!}
                {!! Form::text('title_ru', isset($partner) ? $partner->title_ru : null,
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
                {!! Form::text('title_kz', isset($partner) ? $partner->title_kz : null,
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
                {!! Form::text('title_en', isset($partner) ? $partner->title_en : null,
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

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('link', 'Ссылка') !!}
                {!! Form::text('link', isset($partner) ? $partner->link : null,
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
                {!! Form::label('image', 'Изображение') !!}
                @if(isset($partner) && $partner->image)
                    <br>
                    <img src="{{ $partner->getImage() }}" width="300" style="outline: 1px solid #CCC;">
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
                {!! Form::button('<i class="fa fa-check-circle fa-fw mr-1"></i> ' . 'Сохранить',
                        ['class' => 'btn btn-success', 'type' => 'submit']) !!}
            </div>
        </div>
    </div>
</div>




