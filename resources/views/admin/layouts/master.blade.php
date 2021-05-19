<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        @livewireStyles
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        @stack('styles')
    </head>
    <body class="h-screen bg-indigo-50">
        <div class="flex h-full">
            <div class="fixed bottom-0 w-full lg:h-full lg:w-24 z-10">
                @include('admin.layouts.navbar')
            </div>
            
            <div class="w-full p-4 lg:px-10 lg:py-4 lg:ml-24">
                <div class="bg-blue-400 h-15 rounded-xl">
                    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                        <div class="relative flex items-center justify-between h-16">
                            <div class="flex-1 flex justify-start">
                                <a href="#" class="h-full flex flex-wrap content-center bg-white py-2 px-5 text-red-500 font-semibold hover:bg-gray-200 rounded-md"><div>Dashboard</div></a>
                            </div>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                                <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                  <span class="sr-only">View notifications</span>
                                  <!-- Heroicon name: outline/bell -->
                                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                  </svg>
                                </button>
                        
                                <!-- Profile dropdown -->
                                <div x-data="{ open: false }" class="ml-3 relative">
                                    <div>
                                        <button @click="open = true" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-expanded="false" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </button>
                                    </div>

                                    <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="h-100 rounded-xl my-2 bg-white py-3 lg:px-8 px-2">
                    @yield('content')
                </div>
                
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        @stack('scripts')
    </body>
</html>