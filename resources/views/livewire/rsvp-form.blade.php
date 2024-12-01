<form class="space-y-2" wire:submit="submit">
    <flux:input wire:model="form.name" label="Your name" />

    <flux:input wire:model="form.email" label="Your email" type="email"
        description="We'll pop you a confirmation email, and keep you in the loop" />

    <flux:field>
        <flux:label>Who ya bringing?</flux:label>

        <flux:description>
            Let us know if you're bringing guests, and whether you're bringing children (so we can bring enough food,
            drink, and cages).
        </flux:description>

        <div x-data="{ 'guests': @entangle('form.guests') }">
            <ol>
                <template x-for="(guest, index) in guests" :key="index">
                    <li class="flex gap-2 mb-1 last:mb-2">
                        <flux:input x-model="guests[index]['name']">
                            <x-slot name="iconLeading">
                                <flux:icon.face-smile x-show="guest.child" />
                                <flux:icon.user x-show="!guest.child" />
                            </x-slot>
                        </flux:input>
                    </li>
                </template>
            </ol>

            <div class="flex gap-2">
                <flux:button icon="plus" @click="guests.push({ name: '', child: false })">Add Guest</flux:button>
                <flux:button icon="plus" @click="guests.push({ name: '', child: true })">Add Child</flux:button>
            </div>
        </div>
    </flux:field>

    <flux:textarea wire:model="form.dietaries" label="Dietaries, or allergies"
        description="If you or your guests have any allergies or dietary requirements. Please also let us know who amongst you is effected so we can play appropriately & we can ensure they're catered for."
        placeholder="E.g., vegetarian, gluten-free, nut allergy, lactose intolerance, dislikes fruit, etc." />

    <flux:radio.group wire:model="form.camping" label="Camping" variant="cards" class="flex-col">
        <flux:radio value="no" label="No, my bed is my grail"
            description="We aren't messing about, we've a proper bed and a large bell tent, glamping! We would totally be picking this option as guests 😆" />
        <flux:radio value="owned" label="Yes - I'm bringing my tent"
            description="Whilst we have a large space for camping, please don't bring a entire campus with you." />
        <flux:radio value="hire" label="Yes - I'm going to hire a Bell Tent"
            description="Please be sure to visit our portal and hire your tent - they'll have it delivered and setup for you." />
    </flux:radio.group>

    <flux:button type="submit" variant="filled" icon-trailing="paper-airplane">
        @if ($rsvp)
            Update RSVP
        @else
            RSVP
        @endif
    </flux:button>
</form>
