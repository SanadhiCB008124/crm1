<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>customer list</title>
</head>

<body>

<div class="container">
<div class="row">
<div>
<h2>customer list</h2>
<div><a href="{{ url ('add-customer')}}">Add</a></div>


<table>


<thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phome</th>
        <th>address</th>


</tr>
</thead>
<tb>




@foreach(  $data as $cust)
<tr>
    <td>1</td>
    <td>{{$cust -> name}}</td>
    <td> {{$cust -> email}}</td>
    <td> {{$cust -> phone}}</td>
    <td> {{$cust -> address}}</td>
    <td>edit</td>

</tr>
@endforeach



</tb>


</table>
</div>

</div>


</div>



</body>
</html>
