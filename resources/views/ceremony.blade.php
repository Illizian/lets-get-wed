<x-layout title="The Wedding of Alex & Mez">
    <article class="space-y-12 lg:space-y-24">
        <x-section.header />

        <x-section>
            <x-section.details :timeline="$timeline" />
        </x-section>

        <x-section>
            <x-section.location />
        </x-section>

        <x-section>
            <x-section.timeline :timeline="$timeline" />
        </x-section>

        <x-section>
            <x-section.facilities />
        </x-section>

        <x-section>
            <x-section.provisions />
        </x-section>

        <x-section>
            <x-section.dresscode />
        </x-section>

        <x-section>
            <x-section.camping />
        </x-section>

        <x-section>
            <x-headline id="rsvp">
                Répondez S’il Vous Plaît
            </x-headline>

            <p class="my-4 text-2xl">
                We welcome you to join us for the {{ $timeline[0]['title'] }} on {{ $timeline[0]['datetime'] }}
            </p>

            <div class="md:grid md:grid-cols-12 md:gap-4 md:pb-8">
                <div class="col-span-8">
                    <livewire:rsvp-form ceremony="{{ App\Enums\CeremonyStatus::ACCEPTED }}" />
                </div>

                <div class="col-span-4 space-y-4">
                    <div class="mt-4 -mx-4 overflow-hidden lg:rounded-lg md:m-0">
                        <img src="{{ Vite::asset('resources/img/mez-alex-inquisition.jpg') }}" />
                    </div>

                    <div class="hidden md:block overflow-hidden lg:rounded-lg">
                        <img src="{{ Vite::asset('resources/img/mez-alex-yoo-hoo.jpg') }}" />
                    </div>

                    <div class="hidden md:block overflow-hidden lg:rounded-lg">
                        <img src="{{ Vite::asset('resources/img/mez-alex-you-ok-hun.jpg') }}" />
                    </div>
                </div>
        </x-section>
    </article>
</x-layout>
