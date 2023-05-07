<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title')</title>
<meta name='description' content='@yield('meta-description')' />
<meta name='keywords' content='@yield('meta-keywords')' />
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
<link rel="stylesheet" href="https://unpkg.com/prismjs@1.29.0/themes/prism.min.css">
@yield('css')
<style>
    /* html {
        -webkit-filter : grayscale(100%);
        -moz-filter: grayscale(100%);
        -o-filter: grayscale(100%);
        filter: grayscale(100%);
        filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);
    } */
</style>
