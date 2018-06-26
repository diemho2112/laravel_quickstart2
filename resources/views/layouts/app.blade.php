<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ trans('message.title') }}</title>
    {{ Html::style(asset('css/app.css')) }}
    {{ Html::script(asset('js/app.js')) }}
    {{ Html::style(asset('css/main.css')) }}
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">{{ trans('message.head') }}</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ trans('message.language') }} <b
                                    class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{!! route('user.change-language', ['en']) !!}">{{ trans('message.english') }}</a></li>
                            <li><a href="{!! route('user.change-language', ['vi']) !!}">{{ trans('message.vietnamese') }}</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ trans('message.menu') }} <b
                                    class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">{{ trans('message.home') }}</a></li>
                            <li><a href="#">{{ trans('message.contact') }}</a></li>

                            <li><a href="#">{{ trans('message.about') }}</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @guest
                        <li><a href="{{ route('login') }}">{{ trans('message.login') }}</a></li>
                        <li><a href="{{ route('register') }}">{{ trans('message.register') }}</a></li>
                    @else
                        <li>
                            <a id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" style="padding-left: 1em;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __(trans('message.logout')) }}
                                </a>
                                {!! Form::open(['route' => 'logout', 'id' => 'logout-form']) !!}
                                {!! Form::close() !!}
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>
