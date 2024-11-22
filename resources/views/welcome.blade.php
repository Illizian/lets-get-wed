<x-layout title="The Wedding of Alex & Mez">
    <article class="pb-8 space-y-4 lg:space-y-12">
        <header class="max-w-7xl w-full mx-auto lg:px-16">
            <img class="mb-2 lg:mb-8" src="{{ Vite::asset('resources/img/wedding-hero.jpg') }}" />

            <div class="px-4 lg:px-8">
                <h3 class="pb-4 text-2xl">
                    Join us at the Wedding of:
                </h3>

                <h1 class="text-5xl text-center leading-relaxed font-serif lg:text-8xl">
                    Mary-Anne
                    <span class="block lg:inline">
                        &amp;
                    </span>
                    Alex
                </h1>
            </div>
        </header>

        <x-section>
            <div class="flex flex-col gap-4 md:flex-row">
                <flux:card class="space-y-6">
                    <flux:heading size="xl" class="flex gap-2 items-center">
                        <flux:icon.clock />

                        Saturday, 28th June 2025
                    </flux:heading>
                    <flux:subheading class="flex gap-2 items-center">
                        <flux:icon.map-pin />

                        Haha Farm, Hemblington Rd, Blofield, Norwich NR13 4AH
                    </flux:subheading>
                </flux:card>

                <div>
                    <flux:button variant="primary" href="#rsvp" class="w-full">RSVP Now</flux:button>
                </div>
            </div>
        </x-section>

        <x-section>
            <div class="flex flex-col gap-4">
                <div class="space-y-1">
                    <h3 class="text-5xl font-serif leading-relaxed lg:text-8xl">
                        The Farm
                    </h3>

                    <h4 class="text-2xl">
                        Situated in the middle of nowhere, otherwise known as Blofield.
                    </h4>

                    <p>
                        You can find us on Haha Farm. Where we'll be celebrating, surrounded by fields and nature.
                    </p>
                </div>

                <div class="-mx-4 overflow-hidden sm:mx-0 lg:rounded-lg">
                    <img src="{{ Vite::asset('resources/img/haha-farm-map.jpg') }}" />
                </div>
            </div>
        </x-section>

        <x-section>
            <div class="flex flex-col gap-4 lg:flex-row-reverse">
                <div class="-mx-4 overflow-hidden sm:mx-0 lg:rounded-lg">
                    <img src="{{ Vite::asset('resources/img/bell-tent.jpg') }}" />
                </div>

                <div class="space-y-1">
                    <h3 class="text-5xl font-serif leading-relaxed lg:text-8xl">
                        Pitch Up
                    </h3>

                    <h4 class="text-2xl">
                        We have a campsite!!
                    </h4>

                    <p>
                        Bring your tent and join us for a night under the stars by the fire.
                    </p>

                    <p>
                        Don't have your own tent, or want a fancier &amp; easier option? We've teamed up with
                        <a href="https://www.norfolkbells.co.uk/wedding-mez-alex/" class="underline">
                            Norfolk Bells
                        </a>
                        to make hiring a Bell Tent super easy, book directly via our portal and they will get it
                        setup,
                        delivered, and ready for your arrival, and packed down after. No faffing aboot!
                    </p>
                </div>
            </div>
        </x-section>

        <x-section>
            <h3 id="rsvp" class="mb-4 text-5xl font-serif leading-relaxed lg:text-5xl">
                Répondez S’il Vous Plaît
            </h3>

            <livewire:rsvp-form />
        </x-section>
    </article>
</x-layout>
