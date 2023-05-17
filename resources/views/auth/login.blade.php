
<DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Login</title>
</head>
<body>
<section class="flex flex-col md:flex-row h-screen items-center">

  <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
    <img src="images/login3.jpg" alt="" class="w-full h-full object-cover">
  </div>

  <div class="bg-black w-full md:max-w-md lg:max-w-full  md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

    <div class="w-full h-100">


      <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12 text-amber-100">Log in </h1>
      <x-validation-errors class="mb-4" />
      @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
      <form  class="mt-6"  method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label class="block text-amber-100" for="email" value="{{ __('Email') }}">Email Address </label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none" />
            </div>

            <div class="mt-4">
                <label class="block text-amber-100" for="password" value="{{ __('Password') }}">Password </label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300
                focus:bg-white focus:outline-none"/>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-amber-100">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-amber-100 hover:text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-100" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                
               
               
            </div>
            <button type="submit" class="w-full block bg-black text-amber-100   hover:text-white  border border-amber-100  font-semibold rounded-lg
              px-4 py-3 mt-6"> {{ __('Log in') }}</button>
        </form>

      

     

      <p class="mt-8 text-white">Need an account? <a href="{{ route('register') }}" class="text-amber-100 hover:text-white font-semibold">Create an
              account</a></p>


    </div>
  </div>

</section>
</body>
</html>