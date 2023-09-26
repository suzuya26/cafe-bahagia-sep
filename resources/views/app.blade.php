<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafe Bahagia</title>
  @vite('resources/css/app.css')
  @livewireStyles
</head>
<body>
  <h1 class="text-3xl text-center font-bold m-2">
    Cafe Bahagia
  </h1>
  <p class="text-xl text-center font-medium">
    Our Product :
  </p>
  <livewire:produk/>
  @livewireScripts
</body>
</html>
