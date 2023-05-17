
<DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Register</title>
</head>
<body>

<section class="flex flex-col md:flex-row h-screen items-center">

  <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
    <img src="images/login3.jpg" alt="" class="w-full h-full object-cover">
  </div>

  <div class="bg-black w-full md:max-w-md lg:max-w-full  md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

    <div class="w-full h-100">


      <h1 class="text-xl md:text-2xl font-bold leading-tight mt-10 text-amber-100">Register </h1><br>
      <x-validation-errors class="mb-4" />
      <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label class="block text-amber-100"  for="name" value="{{ __('Name') }}">Name</label>
                <input id="name"  type="text" name="name"  required autofocus autocomplete="name" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
            </div>

            <div class="mt-4">
                <label  class="block text-amber-100" for="email" value="{{ __('Email') }}">Email</label>
                <input id="email"  type="email" name="email"  required autocomplete="username" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none" />
            </div>

            <div class="mt-4">
                <label  class="block text-amber-100" for="password" value="{{ __('Password') }}">Password</label>
                <input id="password"  type="password" name="password" required autocomplete="new-password" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
            </div>

            <div class="mt-4">
                <label class="block text-amber-100" for="password_confirmation" value="{{ __('Confirm Password') }}">Confirm Password </label>
                <input id="password_confirmation"  type="password" name="password_confirmation" required autocomplete="new-password" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-amber-100 hover:text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-100" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

             
      
            </div>

            <button type="submit" class="w-full block bg-black text-amber-100   hover:text-white  border border-amber-100  font-semibold rounded-lg
              px-4 py-3 mt-6">  {{ __('Register') }}</button>
        </form>
      
    </div>
  </div>

</section>
</body>
</html>