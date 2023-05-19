<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Add Customer</title>
</head>

<body>
<div>
    <h2>Add Employee</h2>

    <form method="post" action="{{url ('save-employee') }}">
@csrf 
<div>

<div class="mt-4">
                <label  class="block text-bg" for="name" >Name</label>
                <input   type="text"  name="name"  class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
            </div>


            <div class="mt-4">
                <label  class="block text-bg" for="email" >email</label>
                <input type="email"  name="email"  class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
            </div>
           


           
    
</div>
<br>
<button type="submit" >
   save
    </buttom>
<a href="{{ url('employee-list') }}" >Back</a>
</form>




</div>



</body>
</html>