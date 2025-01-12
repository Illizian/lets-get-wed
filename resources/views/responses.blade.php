<x-layout title="Responses">
    <article class="pb-8 space-y-12 lg:space-y-24">
        <x-section class="py-12">
            <flux:table>
                <flux:columns>
                    <flux:column>Name</flux:column>
                    <flux:column>Email</flux:column>
                    <flux:column>Guests</flux:column>
                    <flux:column>Dietaries</flux:column>
                    <flux:column>Camping</flux:column>
                    <flux:column>Ceremony</flux:column>
                    <flux:column></flux:column>
                </flux:columns>

                <flux:rows>
                    @foreach ($responses as $response)
                        <flux:row>
                            <flux:cell>
                                {{ $response->name }}
                            </flux:cell>
                            <flux:cell>
                                {{ $response->email }}
                            </flux:cell>
                            <flux:cell>
                                <ul>
                                    @foreach ($response->guests as $guest)
                                        <li>
                                            {{ $guest['name'] }}
                                            [{{ $guest['child'] ? 'Child' : 'Adult' }}]
                                        </li>
                                    @endforeach
                                </ul>
                            </flux:cell>
                            <flux:cell>
                                <div class="max-w-64 text-wrap break-words">
                                    {{ $response->dietaries }}
                                </div>
                            </flux:cell>
                            <flux:cell>
                                {{ $response->camping }}
                            </flux:cell>
                            <flux:cell>
                                {{ $response->ceremony }}
                            </flux:cell>
                            <flux:cell>
                                <flux:button href="{{ route('rsvp', ['response' => $response->id]) }}">RSVP</flux:button>
                            </flux:cell>
                        </flux:row>
                    @endforeach
                </flux:rows>
            </flux:table>
        </x-section>
    </article>
</x-layout>
