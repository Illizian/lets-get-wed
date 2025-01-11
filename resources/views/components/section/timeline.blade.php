@props(['timeline'])

<div class="space-y-2 lg:space-y-4">
    <h3 class="text-5xl font-serif leading-relaxed lg:text-8xl">
        The Cunning Plan
    </h3>

    <p>
        A rough overview of our plans for the weekend.
    </p>

    <ol role="list" class="mt-6 space-y-6">
        @foreach ($timeline as $item)
            <x-timeline-item :title="$item['title']" :datetime="$item['datetime']" :description="$item['description']" />
        @endforeach
    </ol>
</div>
