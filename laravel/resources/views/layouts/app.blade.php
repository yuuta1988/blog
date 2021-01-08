<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>

<body>

    {{-- @include('layouts._header') --}}

    <div id="app">
        @yield('content')
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>