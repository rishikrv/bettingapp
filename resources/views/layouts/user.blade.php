<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        @include('layouts.userhead')
    </head>
<body>
    <div id="wrapper">
         @include('layouts.userheader')
         @include('layouts.usersidebar')
         <div class="content">  
            <div class="content">
                <div class="container-fluid">
                   @include('layouts.usersettings')
                   @yield('content')
                </div> 
            </div> 
        </div> 
        @include('layouts.footer-script') 
    </div> 
    </body>
</html>