<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name') }}</title>
  
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <livewire:styles/>
</head>
<body>

  {{ $slot }}
  <livewire:scripts />

  <wireui:scripts />
  <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>