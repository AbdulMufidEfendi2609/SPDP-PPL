<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title>Aplikasi SPDP</title>

    <link href="{{url('css/teamplate_login/css/bootstrap.css')}}" rel="stylesheet" />
	<link href="{{url('css/teamplate_login/css/coming-sssoon.css')}}" rel="stylesheet" />

    <!--     Fonts     -->
    <link href="{{url('http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css')}}" rel="stylesheet">
    <link href='{{url('http://fonts.googleapis.com/css?family=Grand+Hotel')}}' rel='stylesheet' type='text/css'>
    @yield('head')
</head>

<body>
<div class="main" style="background-image: url('css/teamplate_login/images/pupuk.jpg')">
    <div class="cover black" data-color="black"></div>
    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>
</div>
 </body>
    @yield('body')
   <script src="{{url('css/teamplate_login/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
   <script src="{{url('css/teamplate_login/js/bootstrap.min.js')}}" type="text/javascript"></script>

</html>
