<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <link href="{{ asset('/css/bernstrap.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/css/home.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/css/bernimate.css') }}" rel="stylesheet"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!--[if gt IE 7]>
            <link rel="stylesheet" type="text/css" href="{{ asset('/css/ie.css') }}" />
        <![endif]-->
    </head>

        @yield('content')
    
</html>