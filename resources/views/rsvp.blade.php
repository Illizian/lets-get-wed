<x-layout title="Your RSVP">
    <article class="pb-8 space-y-12 lg:space-y-24">
        <header class="max-w-7xl w-full mx-auto">
            <img class="mb-6 lg:mb-8" src="{{ Vite::asset('resources/img/wedding-hero-rsvp.jpg') }}" />

            <div class="px-4 lg:px-8">
                <h1 class="text-5xl text-center leading-relaxed font-serif md:text-8xl">
                    {{ $rsvp->name }}

                    @if ($rsvp->guests)
                        <span class="text-2xl md:text-5xl">
                            and, {{ count($rsvp->guests) }} guests
                        </span>
                    @endif
                </h1>
            </div>
        </header>

        <x-section>
            <p>
                Thanks, we look forward to seeing you, but if anything's changed you can let us know by updating us
                below!
            </p>

            <livewire:rsvp-form :rsvp="$rsvp" />
        </x-section>
    </article>
</x-layout>
