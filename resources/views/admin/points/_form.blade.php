<div class="row select-wrapper">
    <div class="card col-lg-12">
        <div class="card-body">

            <div class="row">
                <div class="form-group col-md-4">
                    {!! Form::label('title_ru', 'Заголовок RU') !!}
                    {!! Form::text('title_ru', isset($point) ? $point->title_ru : null,
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

                <div class="form-group col-md-4">
                    {!! Form::label('title_kz', 'Заголовок KZ') !!}
                    {!! Form::text('title_kz', isset($point) ? $point->title_kz : null,
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

                <div class="form-group col-md-4">
                    {!! Form::label('title_en', 'Заголовок EN') !!}
                    {!! Form::text('title_en', isset($point) ? $point->title_en : null,
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
                    {!! Form::textarea('description_ru', isset($point) ? $point->description_ru : null, [
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
                    {!! Form::textarea('description_kz', isset($point) ? $point->description_kz : null, [
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
                    {!! Form::textarea('description_en', isset($point) ? $point->description_en : null, [
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

                <div class="col-md-12">
                    <label style="margin-bottom: 10px">Укажите адрес объекта на карте</label>
                    <div id="map" style="width: 100%; height: 400px; margin-bottom: 15px"></div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('lang', 'Долгота') !!}
                        {!! Form::text('lang', isset($point) ? $point->lang : null,
                            [
                                'class' => 'form-control ' . ($errors->has('lang') ? 'is-invalid' : ''),
                            ])
                        !!}
                        @if($errors->has('lang'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('lang') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('lat', 'Широта') !!}
                        {!! Form::text('lat', isset($point) ? $point->lat : null,
                            [
                                'class' => 'form-control ' . ($errors->has('lat') ? 'is-invalid' : ''),
                            ])
                        !!}
                        @if($errors->has('lat'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('lat') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="form-group col-md-4">
                    {!! Form::label('number', 'Номер') !!}
                    {!! Form::text('number', isset($point) ? $point->number : null,
                        [
                            'class' => 'form-control ' . ($errors->has('number') ? 'is-invalid' : ''),
                        ])
                    !!}
                    @if($errors->has('number'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('number') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="form-group col-md-4">
                    {!! Form::label('direction', 'Направление') !!}
                    {!! Form::text('direction', isset($point) ? $point->number : null,
                        [
                            'class' => 'form-control ' . ($errors->has('direction') ? 'is-invalid' : ''),
                        ])
                    !!}
                    @if($errors->has('direction'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('direction') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="form-group col-md-4">
                    {!! Form::label('format', 'Формат') !!}
                    {!! Form::text('format', isset($point) ? $point->number : null,
                        [
                            'class' => 'form-control ' . ($errors->has('format') ? 'is-invalid' : ''),
                        ])
                    !!}
                    @if($errors->has('format'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('format') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    {!! Form::label('width', 'Ширина') !!}
                    {!! Form::text('width', isset($point) ? $point->number : null,
                        [
                            'class' => 'form-control ' . ($errors->has('width') ? 'is-invalid' : ''),
                        ])
                    !!}
                    @if($errors->has('width'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('width') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    {!! Form::label('height', 'Высота') !!}
                    {!! Form::text('height', isset($point) ? $point->number : null,
                        [
                            'class' => 'form-control ' . ($errors->has('height') ? 'is-invalid' : ''),
                        ])
                    !!}
                    @if($errors->has('height'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('height') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-12">
                    {!! Form::label('image', 'Изображение') !!}
                    @if(isset($point) && $point->image)
                        <br>
                        <img src="{{ $point->getImage() }}" width="300" style="outline: 1px solid #CCC;">
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
</div>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
<script>
	if(typeof ymaps !== 'undefined'){
    ymaps.ready(init);
}

let myMap;
function init () {
    myMap = new ymaps.Map("map", {
        center: [43.243334, 76.943596],
        zoom: 12
    }, {
        balloonMaxWidth: 200,
        searchControlProvider: 'yandex#search'
    });

    myMap.events.add('click', function (e) {
        fillCoords(e.get('coords'));
        if (myMap.balloon.isOpen()) {
            myMap.balloon.close();
        }
        let coords = e.get('coords');
        myMap.balloon.open(coords, {
            contentHeader:'Ваш адрес',
            contentBody: '<p>Координаты щелчка: ' + [
                coords[0].toPrecision(6),
                coords[1].toPrecision(6)
            ].join(', ') + '</p>',
            contentFooter:'<sup>Ваш объект</sup>'
        });
    });

    myMap.events.add('balloonopen', function (e) {
        myMap.hint.close();
    });
}

function fillCoords(coords) {
    $('#lang').val(coords[1].toPrecision(8));
    $('#lat').val(coords[0].toPrecision(8));
}
</script>



