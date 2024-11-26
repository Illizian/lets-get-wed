@props(['title', 'datetime', 'description'])

<li class="group relative flex gap-x-4">
    <div class="absolute -bottom-8 left-0 top-0 flex w-8 justify-center group-last:h-8">
        <div class="w-1 bg-cyan-500/50"></div>
    </div>
    <div class="relative flex h-8 w-8 flex-none items-center justify-center bg-white dark:bg-zinc-900">
        <div class="h-6 w-6 rounded-full bg-cyan-500 ring-2 ring-cyan-500/75"></div>
    </div>
    <div class="flex-auto">
        <h4 class="font-black text-cyan-500">{{ $title }}</h4>
        <p class="block mb-2 text-sm font-bold leading-5 text-sky-500">
            {{ $datetime }}
        </p>
        @isset($description)
            <p class="text-sm">
                {{ $description }}
            </p>
        @endisset
    </div>
</li>
