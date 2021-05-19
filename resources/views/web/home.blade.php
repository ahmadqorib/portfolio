<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ahmad Qorib</title>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body class="bg-blue-50">
        <img src="{{ asset('assets/images/web/home.svg') }}" class="fixed block inset-0 w-full object-cover"
            style="z-index: -1;">

        <!-- This example requires Tailwind CSS v2.0+ -->
        <nav class="bg-transparent">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!--
                            Icon when menu is closed.
                
                            Heroicon name: outline/menu
                
                            Menu open: "hidden", Menu closed: "block"
                            -->
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <!--
                            Icon when menu is open.
                
                            Heroicon name: outline/x
                
                            Menu open: "block", Menu closed: "hidden"
                            -->
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex w-full items-center justify-center">
                        <div class="hidden sm:block sm:ml-6">
                            <div class="flex space-x-4">
                    
                                <a href="#" class="text-gray-50 hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>
                    
                                <a href="#" class="text-gray-50 hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>
                    
                                <a href="#" class="text-gray-50 hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>
            
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>
            
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>
            
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
                </div>
            </div>
        </nav>
  

        <div class="flex items-center justify-center h-screen">
    
            <div class="bg-gray-50 w-4/5 h-3/4 lg:w-3/4 flex flex-col justify-center items-center lg:grid lg:grid-cols-2 rounded-lg p-6">
                <div class="lg:block flex flex-col items-center justify-center lg:pl-14">
                    <div class="text-3xl lg:text-6xl w-full lg:w-96 g:-space-y-2">
                        <h4 class="lg:text-justify text-center bg-clip-text text-transparent bg-gradient-to-b from-red-600 to-yellow-400 capitalize tracking-wider">
                           <span>Hallo,</span>
                        </h4>
                        <h4 class="lg:text-justify text-center bg-clip-text text-transparent bg-gradient-to-b from-red-600 to-yellow-400 capitalize tracking-wider">
                            <span>Saya Ahmad Qorib</span>
                        </h4>
                    </div>
                    <div class="my-4 lg:text-4xl">
                        <h4 class="lg:text-justify text-center bg-clip-text text-red-800 capitalize tracking-wider font-bold">
                            <span>Web Developer</span>
                        </h4>
                    </div>
                    <div class="my-4">
                        <p class="lg:text-justify text-center text-sm text-gray-500 tracking-wide info_text w-80">
                        A time that hasn't happened yet is the future.
                        You're reading this in the present. 
                        </p>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('assets/images/web/images.jpeg') }}" class="block w-1/2 hover:scale-150 transition-all duration-500 transform mx-auto">
                </div>
            </div>
            
          </div>
          
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
    </body>
</html>