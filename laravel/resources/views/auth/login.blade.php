<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" 
    class=" bg-cover px-6 py-4 bg-white shadow-md overflow-hidden w-full"
    style="background-image: url({{('/assets/img/log.png')}})">

        @csrf

        <div class="bg-white max-w-440px sm:rounded-lg m-auto mx-lo mb-l mt-11 px-50px" >
            <div>
                <img src="{{ URL::to('/assets/img/logo.png')}}" alt="" class="w-9/12 m-auto pt-11 px-11">
            </div>  
        
            <div class="focus:ring-indigo-500 text-blue-400 pt-11 pb-8 pl-28 text-xl">
                <h1>Sign into your account</h1>
            </div>
        
            <!-- Email Address -->
            <div class="arrondi-lg mx-lo">
                
                <x-text-input id="email" class="block w-4/5 ml-12" placeholder="Email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4 arrondi-lg">
        
                <x-text-input id="password" class="block w-4/5 ml-12"
                            placeholder="password"
                            name="password"
                            required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4 mx-12 flex justify-between">
                <div class="">
                <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm  text-blue-400">{{ __('Remember me') }}</span>
                </label>
                </div>
 
               <div class="flex items-center justify-end text-blue-400 ">
                    @if (Route::has('password.request'))
                    <a class="text-sm text-blue-400  rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300" href="{{ route('password.request') }}">
                    {{ __('Forgot Password?') }}
                    </a>
                </div>  
            </div>  
                @endif

            <x-primary-button class="ml-130px my-50px w-2/5 py-3 border border-transparent text-sm leading-4 font-medium rounded-lg text-blue-100 hover:text-white focus:outline-none transition ease-in-out duration-150">
                {{ __('Log in') }}

            </x-primary-button>
        </div>
     
      
    </form>
</x-guest-layout>
