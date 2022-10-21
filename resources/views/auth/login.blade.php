@extends('app')

@section('content')

<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 p-4 rotate">
        <div class="pl-4 flex items-center">
          <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
            <!--Icon from: http://www.potlabicons.com/ -->
            <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
              <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
              <path
                class="plane-take-off"
                d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "
              />
            </svg>
            SAAS
          </a>
        </div>
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('login') }}" class="flex items-stretch bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-indigo-500 sm:border-0">
                @csrf
                <div class="flex hidden overflow-hidden relative sm:block w-5/12 md:w-6/12 bg-gray-600 text-gray-300 py-4 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1477346611705-65d1883cee1e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80')">
                    <div class="flex-1 absolute bottom-0 text-white p-10">
                        <h3 class="text-4xl font-bold inline-block">Se connecter</h3>
                        <p class="text-gray-500 whitespace-no-wrap">
                            Content de vous revoir!
                        </p>
                    </div>
                    <svg class="absolute animate h-full w-4/12 sm:w-2/12 right-0 inset-y-0 fill-current text-white" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <polygon points="0,0 100,100 100,0">
                    </svg>
                </div>
                <div class="flex-1 p-6 sm:p-10 sm:py-12">
                    <h3 class="text-xl text-gray-700 font-bold mb-6">
                        Se connecter <span class="text-gray-400 font-light">à son compte</span></h3>

                    <input id="email" type="email" class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 {{ $errors->has('email') ? ' border-red-500' : '' }}" placeholder="Email" name="email" value="{{ old('email')}}" required autofocus>
                     @if ($errors->has('email'))
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $errors->first('email') }}
                        </p>
                    @endif 

                    <input id="password" type="password" class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 {{ $errors->has('password') ? ' border-red-500' : '' }}" name="password" required placeholder="Password">

                    <div class="flex flex-nowrap items-center">
                        <div class="w-full sm:flex-1">
                            <input type="submit" value="Se connecter" class="w-full sm:w-auto bg-indigo-500 text-indigo-100 px-6 py-2 rounded-full hover:bg-indigo-600 focus:outline-none cursor-pointer">
                        </div>
                        <div class="text-sm text-center text-gray-500 hover:text-gray-700 pt-4 sm:p-0">
                            <a href="{{ route('password.request') }}">Mot de passe oublié?</a>
                        </div>
                    </div>
                    <p class="text-gray-500 font-medium mt-8 mb-4">ou se connecter avec </p>
                    
                    <p class="w-full text-xs text-left text-gray-700 mt-8">
                        Pas encore de compte ?
                        <a class="text-blue-500 hover:text-blue-700 no-underline" href="/register">
                            S'enregistrer
                        </a>
                    </p>

                </div>
            </div>
        </div>
    </div>
@endsection