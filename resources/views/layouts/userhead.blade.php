<!-- App favicon -->
<link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
        
@yield('css')

 <!-- App css -->
<link href="{{ URL::asset('assets/css/userbootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/css/userstyle.css') }}" rel="stylesheet" type="text/css" />
<!-- <script type="text/javascript" src="{{ asset('jquery-3.5.1.min.js') }}"></script> -->
<script src="https//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">