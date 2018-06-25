@extends('layouts.app')

@section('content')
    <h1>{{ __('Reset Password') }}</h1>
    @if (session('status'))
        {{ session('status') }}
    @endif
    {!! Form::open(['route' => 'password.request']) !!}
        <div class="form-group">
            {!! Form::label('email', trans('message.email')) !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'value' => old('email')]) !!}
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('password', trans('message.password')) !!}
            {!! Form::password('password', ['class' => 'form-control', 'id' => 'password']) !!}
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('password_confirmation', trans('message.confirm_password')) !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password-confirm"']) !!}
        </div>
        {!! Form::submit(__('Reset Password'), ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
