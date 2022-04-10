<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title')</title>
<link href="{{ URL::asset('/assets/css/normalize.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/css/all.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/css/home.css') }}" rel="stylesheet" type="text/css" />
<!-- librerias -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
<link href="{{ URL::asset('/assets/css/lightslider.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/img/icon.ico') }}" rel='icon' type='image/x-icon' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ URL::asset('/assets/js/lightslider.js') }}"></script>
<!-- scripts -->
<script src="{{ URL::asset('/assets/js/scripts.js') }}"></script>
