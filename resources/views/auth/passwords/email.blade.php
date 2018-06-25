@extends('layouts.app')

@section('content')
    <h1>{{ __('Reset Password') }}</h1>
    @if (session('status'))
        {{ session('status') }}
    @endif
    {!! Form::open(['route' => 'password.email']) !!}
        <div class="form-group">
            {!! Form::label('email', trans('message.email')) !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'value' => old('email')]) !!}
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        {!! Form::submit(__('Send Password Reset Link'), ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
