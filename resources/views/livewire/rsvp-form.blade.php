<form class="space-y-2" wire:submit="submit">
    <flux:input wire:model="form.name" label="Your name" />

    <flux:input wire:model="form.email" label="Your email" type="email"
        description="We'll pop you a confirmation email, and keep you in the loop" />

    <flux:field>
        <flux:label>Who ya bringing?</flux:label>

        <div class="grid grid-cols-2 gap-2">
            <flux:input wire:model="form.guests_adult" type="number" label="Adults" />
            <flux:input wire:model="form.guests_child" type="number" label="Children" />
        </div>

        <flux:description>
            Let us know if you're bringing guests, and whether you're bringing children (so we can bring enough food,
            drink, and cages).
        </flux:description>
    </flux:field>

    <flux:textarea wire:model="form.dietaries" label="Dietaries, or allergies"
        placeholder="E.g., vegetarian, gluten-free, nut allergy, lactose intolerance, dislikes fruit, etc." />

    <flux:radio.group wire:model="form.camping" label="Camping" variant="cards" class="flex-col">
        <flux:radio value="no" label="No, my bed is my grail" />
        <flux:radio value="owned" label="Yes - I'm bringing my tent" description="2-5 business days" />
        <flux:radio value="hire" label="Yes - I'm going to hire a Bell Tent" description="1 business day" />
    </flux:radio.group>

    <flux:button type="submit" icon-trailing="paper-airplane">
        RSVP
    </flux:button>
</form>
