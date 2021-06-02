<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF_8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FlappeBook</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-gray-300">
<nav class="p-6 bg-yellow-200 flex justify-between mb-6">


<ul class="flex items-right">
<li>
<a href="" class="p-3">Home</a>
</li>
<li>
<a href="{{url('invoice')}}" >Invoice</a>
</li>
<li>
<a href="" class="p-3">Dashbord</a>
</li>
</ul>
</nav>
    
    <body>
        @yield('content')
    </body>
</html>