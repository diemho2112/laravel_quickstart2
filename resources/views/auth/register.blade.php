@extends('layouts.app')

@section('content')
    {!! Form::open(['route' => 'register', 'id' => 'form_register']) !!}
        <h1>{{ trans('message.register') }}</h1>
        <div class="form-group">
            {!! Form::label('name', trans('message.name')) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('email', trans('message.email')) !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('password', trans('message.password')) !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('password_confirmation', trans('message.confirm_password')) !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit(trans('message.register'), ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
