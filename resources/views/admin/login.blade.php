<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  @livewireStyles
</head>
<body class="bg-gray-300">
  <img src="{{ asset('assets/images/wave.svg') }}" class="fixed hidden lg:block inset-0 h-full object-cover"
      style="z-index: -1;">
  <div class="w-screen h-screen flex flex-col justify-center items-center lg:grid lg:grid-cols-2">
    <img src="{{ asset('assets/images/unlock.svg') }}" class="hidden lg:block w-1/2 hover:scale-150 transition-all duration-500 transform mx-auto">

    <livewire:admin.login />
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  @livewireScripts
</body>
</html>