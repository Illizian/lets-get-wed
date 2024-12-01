<x-mail::message>
# Yay! We look forward to celebrating with you

We've got your RSVP, and you have our thanks!

<x-mail::button :url="route('rsvp', ['response' => $response])">
    Update your RSVP
</x-mail::button>

Thanks,<br>
Alex & Mez
</x-mail::message>
