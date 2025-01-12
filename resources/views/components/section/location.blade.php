<div class="flex flex-col gap-4 lg:flex-row">
    <div class="space-y-2 lg:space-y-4">
        <x-headline>
            The Farm
        </x-headline>

        <h4 class="text-2xl">
            Situated in the middle of nowhere, otherwise known as Blofield.
        </h4>

        <p>
            You can find us on Haha Farm. Where we'll be celebrating, surrounded by fields and nature.
        </p>

        <flux:button href="https://maps.app.goo.gl/gVKWem35xN9Fda8u6" variant="primary" icon="map-pin">
            View on Google Maps
        </flux:button>
    </div>

    <div class="-mx-4 sm:mx-0">
        <img class="lg:rounded-lg" src="{{ Vite::asset('resources/img/haha-farm-map.jpg') }}" />
    </div>
</div>
