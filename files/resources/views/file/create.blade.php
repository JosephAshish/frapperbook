@extends('main')

@section('content')
<div class="flex justify-center">
<div class=" flex justify-center w-8/12 bg-white p-6 rounded-lg mb-5">
Projects
</div>
</div>

<div class="flex justify-center grid grid-cols-2 divide-x mb-5 mx-60">
<div class="p-4 bg-white rounded-lg mr-2 ">
<a href=""  onclick="myFunction();return false;">New File</a>
</div>
<div class="p-4 bg-white  rounded-lg ml-2 ">
<a href="" onclick="myFunction1();return false;">Existing File</a>
</div>
@if(count($errors)>0)
<div>
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
@if(\Session::has('success'))
<div>
<p>{{\Session::get('success')}}</p>
</div>
@endif
</div>

<div id="hiddiv" style="display: none;">

<form action="{{url('file')}}" method="POST">
{{csrf_field()}}
        <div class=" flex justify-center  bg-blue-200 p-6 rounded-lg mb-5 mx-60">
          <input class="bg-blue-200" type="text" name="name" id="name" placeholder="Full Name">
        </div>
        <div class=" flex justify-center  bg-blue-200 p-6 rounded-lg mb-5 mx-60">
        <input class="bg-blue-200" type="text" name="businessname" id="businessname" placeholder="Business Name">
        </div>
        <div class=" flex justify-center  bg-blue-200 p-6 rounded-lg mb-5 mx-60">
          <input class="bg-blue-200" type="email" name="businessemail" id="businessemail" placeholder="business E-Mail">
        </div>
        <div class=" flex justify-center  bg-blue-200 p-6 rounded-lg mb-5 mx-60">
        <input class="bg-blue-200" type="text" name="country" id="country" placeholder="country">
        </div>
        <div class=" flex justify-center  bg-blue-200 p-6 rounded-lg mb-5 mx-60">
        <input class="bg-blue-200" type="text" name="currency" id="currency" placeholder="currency">
        </div>
        <div class=" flex justify-center  bg-blue-200 p-6 rounded-lg mb-5 mx-60">
        <label for="finyearstart">Financial Year Start   </label>
          <input class="bg-blue-200" type="date" name="finyearstart" id="finyearstart" placeholder="Financial Year Start">
        </div>
        <div class=" flex justify-center  bg-blue-200 p-6 rounded-lg mb-5 mx-60">
        <label for="finyearstart">Financial Year End   </label>
          <input class="bg-blue-200" type="date" name="finyearend" id="finyearend" placeholder="Financial Year End">
        </div>
        <div class=" flex justify-center  bg-yellow-500 p-6 rounded-lg mb-5 mx-60">
        <button>Create</button>
        </div>
      </form>
</div>

<div id=hiddiv1 style="display: none;">
    <div class="col-md-12">
    <br/>
    <h3 class="flex justify-center">Existing Files</h3>
    <br/>
    <table class="border-collapse border border-green-800 flex justify-center">
    <tr>
    <th class="border border-green-800 flex justify-center">File names</th>
    </tr>
    @foreach($files as $row)
    <tr>
    <td class="border border-green-800 flex justify-center">
    {{$row['businessname']}}</td>
    </tr>
    @endforeach
    </table>
    </div>
</div>


<script>

function myFunction() {
  var x = document.getElementById("hiddiv");
      x.style.display = "block";
      var y=document.getElementById("hiddiv1");
    y.style.display="none"
    }

function myFunction1(){
    var y=document.getElementById("hiddiv1");
    y.style.display="block";
    var x = document.getElementById("hiddiv");
      x.style.display = "none";
}
</script>






@endsection