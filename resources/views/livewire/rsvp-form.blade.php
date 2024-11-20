<form class="space-y-2">
    <flux:input wire:model="name" label="Your name" />
    <flux:input wire:model="email" label="Your email" type="email" />


    <flux:field>
        <flux:label>Who ya bringing?</flux:label>

        <div x-data="{ 'guests': 0 }">
            <ol>
                <template x-for="guest in guests">
                    <li class="mb-1 last:mb-2">
                        <flux:input icon="user" wire:model="guests[]" />
                    </li>
                </template>
            </ol>

            <flux:button icon="plus" @click="guests = guests + 1">Add Guest</flux:button>
        </div>
    </flux:field>

    <flux:textarea wire:model="dietaries" label="Dietaries, or allergies" placeholder="" />

    <flux:radio.group wire:model="" label="Camping" variant="cards" class="flex-col">
        <flux:radio value="no" label="No, my bed is my grail" />
        <flux:radio value="owned" label="Yes - I'm bringing my tent" description="2-5 business days" />
        <flux:radio value="hire" label="Yes - I'm going to hire a Bell Tent" description="1 business day" />
    </flux:radio.group>
</form>
