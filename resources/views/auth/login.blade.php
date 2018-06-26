@extends('layouts.app')

@section('content')
    {!! Form::open(['route' => 'login', 'id' => 'form_login']) !!}
        <h1>{{ trans('message.login') }}</h1>
        <div class="form-group">
            {!! Form::label('email',  trans('message.email')) !!}
            {!! Form::text('email', null, ['id' => 'email', 'class' => 'form-control', 'value' => old('email')]) !!}
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('password',  trans('message.password')) !!}
            {!! Form::password('password', ['id' => 'password', 'class' => 'form-control']) !!}
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            {!! Form::checkbox('remember')  !!}  {{ trans('message.remember') }}
        </div>
        {!! Form::submit(trans('message.login'), ['class' => 'btn btn-primary']) !!}
        <a class="btn btn-link" href="{{ route('password.request') }}">{{ trans('message.forgot_password') }}</a>
    {!! Form::close() !!}
@endsection
