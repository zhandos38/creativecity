<div class="row select-wrapper">
    <div class="card col-lg-12">
        <div class="card-body">

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('name', 'Имя') !!}
                {!! Form::text('name', isset($callRequest) ? $callRequest->name : null,
                    [
                        'class' => 'form-control ' . ($errors->has('name') ? 'is-invalid' : ''),
                    ])
                !!}
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('email', 'E-mail') !!}
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon-email">@</span>
                    </div>
                    {!! Form::text('email', isset($callRequest) ? $callRequest->email : null,
                         [
                             'class' => 'form-control ' . ($errors->has('email') ? 'is-invalid' : ''),
                             'aria-describedby' => 'basic-addon-email'
                         ])
                     !!}
                </div>

                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                {!! Form::label('phone', 'Телефон') !!}
                {!! Form::text('phone', isset($callRequest) ? $callRequest->phone : null,
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

            <div class="form-group col-sm-12">
                {!! Form::label('status_id', 'Статус') !!}
                {!! Form::select('status_id', \App\Models\CallRequest::statuses(), isset($callRequest) ? $callRequest->status_id : null,
                    [
                        'class' => 'js-basic-single form-control ' . ($errors->has('status_id') ? 'is-invalid' : '')
                    ])
                !!}
                @if($errors->has('status_id'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('status_id') }}</strong>
                    </div>
                @endif
            </div>

            <div class="form-group col-sm-12">
                {!! Form::label('comment', 'Комментарии по заказу') !!}
                {!! Form::textarea('comment', isset($callRequest) ? $callRequest->comment : null, [
                        'class' => 'form-control ' . ($errors->has('comment') ? 'is-invalid' : ''),
                        'rows' => 3
                    ])
                !!}
                @if($errors->has('comment'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('comment') }}</strong>
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




