@props(['title'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Parisienne&display=swap"
        rel="stylesheet">

    @vite('resources/css/app.css')
    @livewireStyles
    @fluxStyles
</head>

<body class="bg-zinc-50 text-zinc-700 dark:text-zinc-50 dark:bg-zinc-800">
    <main class="flex h-full">
        <div
            class="
                relative w-full max-w-7xl mx-auto lg:px-8
                bg-white
                ring ring-zinc-100
                dark:bg-zinc-900 dark:ring-zinc-300/20
        ">
            {{ $slot }}
        </div>
    </main>

    @livewireScripts
    @fluxScripts
</body>

</html>
