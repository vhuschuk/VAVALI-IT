<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Академия</title>
    {{--
    <link href="{{ URL::asset('sass/index.scss') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('sass/_colors.scss') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('sass/common.scss') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('sass/_button.scss') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('sass/app.scss') }}" rel="stylesheet" type="text/css" >
   
    <link href= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    --}}
    <link href="/css/styles.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
@include('layouts.header') 
   @yield ('content')
@include('layouts.footer') 
</body>
</html>
