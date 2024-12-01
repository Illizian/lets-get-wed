<x-mail::message>
# New RSVP

<x-mail::table>
| Field     | Response                       |
| --------- | ------------------------------ |
| name      | {{ $response->name }}          |
| email     | {{ $response->email }}         |
| guests    | {{ count($response->guests) }} |
| dietaries | {{ $response->dietaries }}     |
| camping   | {{ $response->camping }}       |
</x-mail::table>

@foreach ($response->guests as $guest)
- {{ $guest['name'] }} : {{ $guest['child'] ? '[Child]' : '[Adult]' }}
@endforeach

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
