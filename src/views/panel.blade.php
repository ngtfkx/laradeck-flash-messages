@if (session('messages-success'))
    @foreach(\Session::get('messages-success') as $message)
        @include('laradeck-flash-messages::message', ['classes' => 'alert-success'])
    @endforeach
@endif

@if (session('messages-error'))
    @foreach(\Session::get('messages-error') as $message)
        @include('laradeck-flash-messages::message', ['classes' => 'alert-danger'])
    @endforeach
@endif

@if (session('messages-warning'))
    @foreach(\Session::get('messages-warning') as $message)
        @include('laradeck-flash-messages::message', ['classes' => 'alert-warning'])
    @endforeach
@endif

@if (session('messages-info'))
    @foreach(\Session::get('messages-info') as $message)
        @include('laradeck-flash-messages::message', ['classes' => 'alert-info'])
    @endforeach
@endif