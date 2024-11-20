@props(['title'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>

    @vite('resources/css/app.css')
    @livewireStyles
    @fluxStyles
</head>

<body>
    {{ $slot }}

    @livewireScripts
    @fluxScripts
</body>

</html>
