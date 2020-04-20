<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Transaction Coordinators for Real Estate Agents and Realtors | TransactionsClosed</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/style.css" rel="stylesheet">

    </head>
<body>

@include('includes.header')

@yield('content')
    
@include('includes.footer')


</body>
</html>
