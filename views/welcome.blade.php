<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Subvitamine</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <h1 class="demo-title">Subvitamine</h1>
        <button type="button" class="btn btn-primary btn-lg px-4" data-toggle="tooltip" data-placement="right" title="Hello World!">
            Made with &hearts;
        </button>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
