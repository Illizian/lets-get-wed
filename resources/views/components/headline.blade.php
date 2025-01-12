<h3
    {{ $attributes->merge([
        'class' => '
        text-sky-900 dark:text-sky-200
        text-5xl font-serif leading-relaxed lg:text-8xl
    ',
    ]) }}>
    {{ $slot }}
</h3>
