@if (count($errors))
    <br>
    <span class="error"><strong>{{ trans('message.wrong') }}</strong></span>
    <ul class="list_error">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
