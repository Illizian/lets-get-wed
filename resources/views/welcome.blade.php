<x-layout>
    <article class="space-y-12">
        <header class="max-w-7xl w-full mx-auto">
            <img src="{{ Vite::asset('../img/wedding-hero.jpg') }}" />

            <div class="p-8">
                <h3 class="pb-4 text-2xl">
                    Join us at the Wedding of:
                </h3>

                <h1 class="text-3xl text-center font-serif lg:text-8xl">
                    Mary-Anne &amp; Alex
                </h1>
            </div>
        </header>

        <section class="flex px-8 max-w-7xl w-full mx-auto">
            <flux:card class="space-y-6">
                <div>
                    <flux:heading size="xl" class="flex gap-2 items-center">
                        <flux:icon.clock />

                        Saturday, 28th June 2025
                    </flux:heading>
                    <flux:subheading class="flex gap-2 items-center">
                        <flux:icon.map-pin />

                        Haha Farm, Hemblington Rd, Blofield, Norwich NR13 4AH
                    </flux:subheading>
                </div>
            </flux:card>

            <div>

            </div>
        </section>

        <section class="flex gap-4 px-8 max-w-7xl w-full mx-auto">
            <div>
                <h3 class="py-6 text-7xl font-serif">
                    Pitch Up
                </h3>

                <p>
                    We have a campsite!! We've partnered with
                    <a href="https://www.norfolkbells.co.uk/wedding-mez-alex/" class="underline">
                        Norfolk Bells
                    </a>
                    to make hiring a Bell Tent super easy, book directly via our portal and they will get it setup,
                    delivered, and ready for your arrival, and packed down after.
                </p>
            </div>
            <div>
                <img src="{{ Vite::asset('../img/bell-tent.jpg') }}" class="rounded-lg" />
            </div>
        </section>
        <section class="flex gap-4 px-8 max-w-7xl w-full mx-auto">
            <livewire:rsvp-form />
        </section>
    </article>
</x-layout>
