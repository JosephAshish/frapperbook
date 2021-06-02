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
<a href="{{url('project')}}" >Invoice</a>
</li>
<li>
<a href="" class="p-3">Dashbord</a>
</li>
</ul>
</nav>
<div>
<div class=" flex justify-center w-8/12 bg-white p-6 rounded-lg mb-5">
Invoice
</div>
<div class="flex justify-center w-8/12 bg-white p-20 rounded-lg mb-5">
Project

<!--<form action="{{url('project')}}" method="POST">
{{csrf_field()}}-->
<form>
<select placeholder="Select Project" name="project" type="text" required="">
<option value="" selected disabled hidden>Select Project</option>
<!-- @foreach($project as $row)
<option value="{{$row['businessname']}}">{{$row['businessname']}}</option>
@endforeach -->
        </select>
        <div class=" flex justify-center  bg-yellow-500 p-6 rounded-lg mb-5 mx-60">
        <button>Submit</button></form>
        </div>
<!--</form>-->

</div>

    </body>
</html>