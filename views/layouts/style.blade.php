<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Style Guide</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Style guide-specific CSS goes here. -->
    <style>
        .sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 1rem;
        }
        .ss-section:not(:last-child) {
            padding-bottom: 4rem;
            border-bottom: 2px solid #ccc;
            margin-bottom: 4rem;
        }
        .ss-code {
            background-color: #f8f9fa;
        }
        .ss-code code {
            display: block;
            padding: 1rem;
            overflow-x: scroll;
        }
        .palette {
            display: grid;
            grid-column-gap: 1rem;
        }
        @media screen and (min-width: 992px) {
            .palette {
                grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
            }
        }
        .color-block {
            border-radius: 2px;
            padding: 8px 8px 6px;
            color: #333;
            border: 1px solid #ddd;
            margin-bottom: 1rem;
        }
        .color-block span {
            display: block;
            width: 100%;
            height: 60px;
            margin-bottom: 0.42857rem;
        }
        .bd-placeholder-img {
            text-anchor: middle;
        }
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
        button {
            margin-bottom: .5rem;
        }
    </style>
</head>
<body>
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
